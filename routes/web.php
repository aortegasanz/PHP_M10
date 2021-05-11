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

//------------------
//  Exercici 2 - 3
//------------------
Route::get('login', function() {
    return view('auth.login');
})->name('login');
Route::post('login', function(Request $request) {
    if ($request->email == 'a@a.com' && $request->password == '1234') {
        $nueva_cookie = cookie('userId', $request->email, 5);
        return view('home')->withCookie($nueva_cookie);
    } else {
        return view('home')->withErrors(['error' => 'Dades d\'accés incorrectes.']);
    }
});

Route::get('password', function() {
    return view('auth.password');
})->name('password');
Route::post('password', function(Request $request) {
    return view('home', ['password' => 'El email para restaurar contraseña ha sido enviado a '.$request->email]);
})->name('password');

Route::get('register', function() {
    return view('auth.register');
})->name('register');
Route::post('register', function(Request $request) {
    return view('home', ['register' => 'El usuari '.$request->email.' ha sigut creat correctament.']);
})->name('register');


Route::get('logout', function() {
    return view('home', ['logout' => 'El usuari ha seleccionat "Logout"']);
});

Route::get('catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show');
Route::get('catalog/create', [CatalogController::class, 'create'])->name('catalog.create');
Route::put('catalog/store', [CatalogController::class, 'store'])->name('catalog.store');
Route::get('catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog.edit');
Route::delete('catalog/delete/{id}', [CatalogController::class, 'delete'])->name('catalog.delete');

//------------------
// Exercici 4
//------------------
Route::get('test', ['middleware' => 'phpM10', function () {
    return '<div class="container text-right" style="padding-left:20px;">
                probando probando middleware a nivel de controlador.
            </div>';
}]);

Route::group(['middleware' => 'phpM10'], function() {
    Route::get('test2222'   , function () {
        return "get 222";
    });
    Route::get  ('catalog/list',        [CatalogController::class, 'index'])->name('catalog.list');
});