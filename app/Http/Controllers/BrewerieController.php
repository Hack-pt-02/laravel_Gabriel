<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Brewerie;
use App\Http\Requests\BrewerieRequest;

class BrewerieController extends Controller{

    public function index (){
        $breweries = Brewerie::orderByDesc('created_at')->paginate(12);
        return view('breweries.index', ['breweries' => $breweries]);
    }

    public function create() {
        return view ('breweries.create');
    }

    public function store(BrewerieRequest $request) {
        $img = Storage::url ($request->file('img')->store('public/breweries'));
        $name = $request->name;
        //Lo valido
        Brewerie::create ([
            'name' => $request->name,
            'description' => $request->description,
            'url' => $img
        ])->saveOrFail();
        return redirect()->route('breweriehome')->with ('success', 'Los datos de la cervecería han sido enviados.');

    }

    public function show($id) {
        $objBrewerie = Brewerie::findOrFail($id);
        return view('breweries.brewerie', ['brewerie' => $objBrewerie]);
    }

    public function friendly ($name){
        $brewerie = Brewerie::where ('name', $name)->firstOrFail();
        return view ('breweries.brewerie', compact ('brewerie'));
    }

    public function login(){
        return view ('breweries.index', [
            'texto' => 'Usuario no autenticado',
            'breweries' => $this->breweries
        ]);
    }
}
