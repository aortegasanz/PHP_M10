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
                        <a href="{{ route('catalog.edit', $llibre['id']) }}"><i class="fas fa-edit"></i></a> 
                        <!--<a href="{{ route('catalog.delete', $llibre['id']) }}"><i class="far fa-trash-alt"></i></a> -->
                        <form action="{{ route('catalog.delete', $llibre['id']) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $llibre['id'] }}"/>
                            <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection