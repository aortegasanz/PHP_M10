@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Registro</h1>
        <br/>
        <form class="form-control" action="{{ route('register') }}" method="POST">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input class="form-control" type="mail" name="email" required/>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" required/>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" required/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>
@endsection