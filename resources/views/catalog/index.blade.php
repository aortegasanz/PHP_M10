@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CATALOG</h1>
    </div>
    @if (Session::get('success'))
        <div class="alert alert-success">{!! Session::get('success') !!}</div>
        @php Session::forget('success') @endphp
    @else   
        <h1>hola</h1>
    @endif
    <div class="container">
        @if (isset($pageContent)) 
            <h5>{{ $pageContent }}</h5>
        @endif
        @if (isset($llibres))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Nom del Llibre</strong></td>
                    <td><strong>Operacions</strong></td>
                </tr>
            @foreach ($llibres as $llibre)
                <tr>
                    <td>{{ $llibre['id'] }}</td>
                    <td>{{ $llibre['nom'] }}</td>
                    <td>
                        <i class="far fa-eye"></i>
                        <a href="{{ route('catalog.create') }}"><i class="fas fa-plus-square"></i></i></a>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection