@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>HOME</h1>        
        <br/>
        @if (isset($logout)) 
            <h3><span style="color:orangered;">{{ $logout }}</span></h3>
        @endif
        <br/>
        <div class="row">
            <div class="col"><a href="{{ route('catalog.list') }}" class="text-sm text-gray-700 underline">CATALOGO</a></div>
            <div class="col"><a href="{{ route('catalog.show', 1) }}" class="text-sm text-gray-700 underline">Catalogo.SHOW</a></div>
            <div class="col">
                <form action="{{ route('catalog.edit', 2) }}" method="GET">
                    @csrf
                    <input type="text" name="nombre" value="alberto"/>
                    <button type="submit">Catalogo.EDIT</button>
                </form>
            </div>
            <div class="col">
                <form action="{{ route('catalog.create') }}" method="POST">
                    @csrf
                    <input type="text" name="nombre" value="antonio"/>
                    <button type="submit">Catalogo.CREATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection