<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrewerieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SuggestController;

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

Route::get ('/login', [BrewerieController::class, 'login'])->name('login');

Route::get ('/index', [BrewerieController::class, 'index'])->name('landing');

Route::get ('/brewerie/{id}', [BrewerieController::class, 'show']);

Route::get ('/about', function(){
    return view('about', ['empName' => 'aulab']);
})->name('about');

Route::get ('/contact', [ContactController::class, 'show'])->name('contact');

Route::post('/contact', [ContactController::class, 'store']);

Route::get ('/brewery', [SuggestController::class, 'create']);

Route::post ('/brewery', [SuggestController::class, 'store'])->name('suggestbrewery');