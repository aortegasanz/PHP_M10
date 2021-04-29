@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CATALOG</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif    
        @if ($llibre)
            <div class="row">
                <div class="col-2">
                    <strong>Identificador:</strong> {{ $llibre['id'] }}
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <strong>Nom:</strong> {{ $llibre['nom'] }}
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a href=" {{ route('catalog.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        @endif
    </DIV>
@endsection