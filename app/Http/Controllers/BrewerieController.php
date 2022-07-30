<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrewerieController extends Controller{

    public $breweries = [
        [1, 'Irish Pub', 'Cervecería con música en directo los fines de semana, disponen de cervezas típicas irlandesas ademas de una carta de aperitivos.'],
        [2, 'lOrient', 'Cervecería con amplia carta de cervezas situada en el centro de Palma. Disponen de mas de 100 marcas.'],
        [3, 'Ventures', 'Amplia variedad de cervezas Americanas.'],
        [4, 'El Último Mohicano','Local con música ambiente y poledance show. La cerveza es lo de menos.'],
        [5, 'Món','Cerveza artesana de tirador. Pequeño local acogedor situado en Sineu.']
    ];

    public function index (){
        $breweries = DB::table('breweries')->get(); //base de datos
        //dd($breweries);
        return view('breweries.index', ['breweries' => $breweries]);
    }

    public function show($id) {

        //Busco $id en pos.0 de array

        $objBrewerie = DB::table('breweries')->where('id', '=', $id)->first();
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
