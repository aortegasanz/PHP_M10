@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CATALOG</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        <form action="{{ route('catalog.store') }}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-auto">
                    <label class="form-label">Nom del llibre</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="nom" required>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-primary" type="submit" value="create">Enmagatzemar</input> 
                </div>
                <div class="col-2">
                    <a href=" {{ route('catalog.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        </form>
    </div>
@endsection