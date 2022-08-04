<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Brewerie;
use App\Http\Requests\BrewerieRequest;

class BrewerieController extends Controller{

    public function index (){
        //$breweries = DB::table('breweries')->get(); //base de datos
        //$breweries = Brewerie::all()->sortByDesc('created_at'); //no avisa si hay error en nombre
        $breweries = Brewerie::all()->sortBy('created_at', null, true);
        //dd($breweries);
        return view('breweries.index', ['breweries' => $breweries]);
    }

    public function create() {
        return view ('breweries.create');
    }

    public function store(BrewerieRequest $request) {
        $img = Storage::url ($request->file('img')->store('public/breweries'));
        //varias formas de llamar request: get opcional en este caso
        /* DB::table('breweries')->insert([
            'name' => $request->name,
            'description' => $request->get('description'),
            'url' => Storage::url ($img)
        ]); */
        $name = $request->name;
        //Lo valido
        if ((strlen ($name) > 0) && (strlen ($name) <= 100)){
            Brewerie::create ([
                'name' => $request->name,
                'description' => $request->description,
                'url' => $img
                ])->saveOrFail();
                //return back ()->with();
                return redirect()->route('landing')->with ('success', 'Los datos de la cervecería han sido enviados.');
            }
            else{
                return back()->with ('error', 'No ha indiciado el nombre.');
            }
        }

        public function show($id) {
            //Busco $id en pos.0 de array
            //$objBrewerie = DB::table('breweries')->where('id', '=', $id)->first();
            $objBrewerie = Brewerie::findOrFail($id);
            //dd ($objBrewerie);
            return view('breweries.brewerie', ['brewerie' => $objBrewerie]);

            /* foreach ($this->breweries as $brewerie){
                if ($brewerie[0] == $id){
                    $objBrewerie = $brewerie;
                }
            }

            if ($objBrewerie != null){
                return view('breweries.brewerie', ['brewerie' => $objBrewerie]);
            } else {
                return view ('breweries.index', [
                    'texto' => 'Local no enconrado, tal vez estas buscando uno de estos',
                    'breweries' => $this->breweries
                ]);
            }*/
        }

        public function login(){
            return view ('breweries.index', [
                'texto' => 'Usuario no autenticado',
                'breweries' => $this->breweries
            ]);
        }


    }
