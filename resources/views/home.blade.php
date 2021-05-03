@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>HOME</h1>        
        <br/>
        @if (isset($logout)) 
            <div class="alert alert-success">{{ $logout }}</div>
        @endif
        @if (isset($password)) 
            <div class="alert alert-success">{{ $password }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach        
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