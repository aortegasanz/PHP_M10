@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CATALOG</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
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
                        <a href="{{ route('catalog.show',   $llibre['id']) }}"><i class="far fa-eye"></i></a> 
                        <a href="{{ route('catalog.create') }}"><i class="fas fa-plus-square"></i></i></a>
                        <a href="{{ route('catalog.edit',   $llibre['id']) }}"><i class="fas fa-edit"></i></a> 
                        <a href="{{ route('catalog.delete', $llibre['id']) }}"><i class="far fa-trash-alt"></i></a> 
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection