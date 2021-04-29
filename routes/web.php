<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CatalogController;

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
    return view('home');
});

// ------------
//  Exercici 1
// ------------
/*
Route::post('login', function() {
    return 'Login usuari';
});
Route::get('logout', function() {
    return 'Logout usuari';
});
Route::get('catalog', function() {
    // return 'Llista de llibres';
})->name('catalog.list');
Route::get('catalog/show/{id}', function($id) {
    return 'Vista detall libre '.$id;
})->name('catalog.show');

Route::post('catalog/create', function(Request $request) {
    return 'Afegir llibre '.$request->nombre.')';
})->name('catalog.create');
Route::post('catalog/edit/{id}', function(Request $request, $id) {
    return 'Modificar llibre '.$id;
})->name('catalog.edit');
*/

//------------
//  Exercici 2
//-----------
Route::post('login', function() {
    return view('auth.login');
});
Route::get('logout', function() {
    return view('home', ['logout' => 'El usuari ha seleccionat "Logout"']);
});
Route::get  ('catalog/list',      [CatalogController::class, 'index'])->name('catalog.list');
Route::get  ('catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show');
Route::get  ('catalog/create',    [CatalogController::class, 'create'])->name('catalog.create');
Route::post ('catalog/store',     [CatalogController::class, 'store'])->name('catalog.store');
Route::get ('catalog/edit/{id}',  [CatalogController::class,  'edit'])->name('catalog.edit');

//------------ 
// Exercici 3
//------------
