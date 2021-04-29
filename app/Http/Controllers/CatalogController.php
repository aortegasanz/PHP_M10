<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CatalogController extends Controller
{

    //
    public function index() {
        $llibres = [ 
            [ 'id' => 1 , 'nom' => 'llibre 1'],
            [ 'id' => 2 , 'nom' => 'llibre 2'],
            [ 'id' => 3 , 'nom' => 'llibre 3'],
            [ 'id' => 4 , 'nom' => 'llibre 4'],
            [ 'id' => 5 , 'nom' => 'llibre 5']
        ];
        $pageContent = 'Llista de llibres';
        return view('catalog.index', compact('pageContent', 'llibres'));
    }

    public function show($id) {
        $llibres = [ 
            [ 'id' => 1 , 'nom' => 'llibre 1'],
            [ 'id' => 2 , 'nom' => 'llibre 2'],
            [ 'id' => 3 , 'nom' => 'llibre 3'],
            [ 'id' => 4 , 'nom' => 'llibre 4'],
            [ 'id' => 5 , 'nom' => 'llibre 5']
        ];
        $pageContent = 'Vista detall llibre';
        foreach ($llibres as $llibre) {
            if ($llibre->id == $id) {
                return view('catalog.show', compact('pageContent', 'llibre'));
            }
        }
    }

    public function edit(Request $request, $id) {
        return view('catalog.index', ['pageContent' => 'Modificar libre '.$id]);
    }

    public function create(Request $request) {
        return view('catalog.create', ['pageContent' => 'Afegir llibre '.$request->nombre]);
    }

    public function store(Request $request) {
        $llibres = [ 
            [ 'id' => 1 , 'nom' => 'llibre 1'],
            [ 'id' => 2 , 'nom' => 'llibre 2'],
            [ 'id' => 3 , 'nom' => 'llibre 3'],
            [ 'id' => 4 , 'nom' => 'llibre 4'],
            [ 'id' => 5 , 'nom' => 'llibre 5']
        ];
        $pageContent = 'Llista de llibres';
        Session::put('success', 'Dades enmagatzemades');
        return view('catalog.index', compact('pageContent', 'llibres'));
        //return view('catalog.index', compact('pageContent', 'llibres'))->with('success', 'Dades enmagatzemades correctament.');
    }
}
