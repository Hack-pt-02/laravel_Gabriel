<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrewerieController extends Controller
{

    public $breweries = [
        [1, 'Cervecería bewikl', 'es un acerveceria con gente'],
        [2, 'Cervecería bewikl2', 'es un acerveceria con gente2'],
        [3, 'Cervecería bewikl3', 'es un acerveceria con gente3'],
        [4, 'Cervecería bewikl4', 'es un acerveceria con gente4'],
        [5, 'Cervecería bewikl5', 'es un acerveceria con gente5']
    ];

    public function index (){        
        return view ('breweries.index', ['breweries' => $this->breweries]);
    }

    public function show($id) {

        $objBrewerie = null;
        
        foreach ($this->breweries as $brewerie){
            if ($brewerie[0] == $id){
                $objBrewerie = $brewerie;
            }
        }
        //dd ($breweries);
        
        if ($objBrewerie != null){
            return view('breweries.brewerie', ['brewerie' => $objBrewerie]);
        } else {
            return view ('breweries.index', [
                'texto' => 'Local no enconrado, tal vez estas buscando uno de estos',
                'breweries' => $this->breweries
            ]);
        }
    }

    public function login(){
        return view ('breweries.index', [
        'texto' => 'Usuario no autenticado',
        'breweries' => $this->breweries
        ]);
    }


}
