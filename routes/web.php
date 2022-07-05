<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('landing');
});

Route::get ('/login', function(){
    $breweries = [
        [1, 'Cervecería bewikl', 'es un acerveceria con gente'],
        [2, 'Cervecería bewikl2', 'es un acerveceria con gente2'],
        [3, 'Cervecería bewikl3', 'es un acerveceria con gente3'],
        [4, 'Cervecería bewikl4', 'es un acerveceria con gente4'],
        [5, 'Cervecería bewikl5', 'es un acerveceria con gente5']
    ];
    return view ('index', [ 'texto' => 'Usuario no autenticado',
                            'breweries' => $breweries
                            ]);
});

Route::get ('/index', function(){
    $breweries = [
        [1, 'Cervecería bewikl', 'es un acerveceria con gente'],
        [2, 'Cervecería bewikl2', 'es un acerveceria con gente2'],
        [3, 'Cervecería bewikl3', 'es un acerveceria con gente3'],
        [4, 'Cervecería bewikl4', 'es un acerveceria con gente4'],
        [5, 'Cervecería bewikl5', 'es un acerveceria con gente5']
    ];
    return view ('index', ['breweries' => $breweries]);
})->name('landing');

Route::get ('/brewerie/{id}', function ($id){
    $breweries = [
        [1, 'Cervecería bewikl', 'es un acerveceria con gente'],
        [2, 'Cervecería bewikl2', 'es un acerveceria con gente2'],
        [3, 'Cervecería bewikl3', 'es un acerveceria con gente3'],
        [4, 'Cervecería bewikl4', 'es un acerveceria con gente4'],
        [5, 'Cervecería bewikl5', 'es un acerveceria con gente5']
    ];
    $objBrewerie = null;
    foreach ($breweries as $brewerie){
        if ($brewerie[0] == $id){
            $objBrewerie = $brewerie;
        }
    }
    if ($objBrewerie != null){
        return view('brewerie', ['brewerie' => $objBrewerie]);
    } else {
        return view ('index', [
        'texto' => 'Local no enconrado, tal vez estas buscando:',
        'breweries' => $breweries
    ]);
    }
});

Route::get ('/about', function(){
    return view('about', ['empName' => 'aulab']);
})->name('about');

Route::get ('/contact', function(){
return view('contact');
})->name('contact');