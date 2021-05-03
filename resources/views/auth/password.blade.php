@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Recuperar Contraseña</h1>
        <form class="form-control" action="{{ route('login') }}" method="POST">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input class="form-control" type="mail" name="email" required/>
            </div>
            <div class="form-group">
                <a href="{{ url('sendpassword') }}">Indíquenos su correo electrónico y le enviaremos un mail para resetear su contraseña.</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>            
        </form>
    </div>
@endsection