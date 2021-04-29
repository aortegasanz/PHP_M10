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
            if ($llibre['id'] == intval($id)) {                
                return view('catalog.show', compact('pageContent', 'llibre'));
            }
        }
    }

    public function edit(Request $request, $id) {
        $llibres = [ 
            [ 'id' => 1 , 'nom' => 'llibre 1'],
            [ 'id' => 2 , 'nom' => 'llibre 2'],
            [ 'id' => 3 , 'nom' => 'llibre 3'],
            [ 'id' => 4 , 'nom' => 'llibre 4'],
            [ 'id' => 5 , 'nom' => 'llibre 5']
        ];
        $pageContent = 'Vista Edició llibre';
        foreach ($llibres as $llibre) {
            if ($llibre['id'] == intval($id)) {                
                return view('catalog.edit', compact('pageContent', 'llibre'));
            }
        }        
    }

    public function create(Request $request) {
        return view('catalog.create', ['pageContent' => 'Afegir llibre '.$request->nombre]);
    }

    public function delete(Request $request) {
        Session::put('success', 'Dades esborrades correctament.');
        return redirect()->route('catalog.list');
    }

    public function store(Request $request) {
        Session::put('success', 'Dades enmagatzemades correctament.');
        return redirect()->route('catalog.list');
    }
    
}
