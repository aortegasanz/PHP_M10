@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>LOGIN</h1>
        <br/>
        <form class="form-control" action="{{ route('login') }}" method="POST">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input class="form-control" type="mail" name="email" required/>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" required/>
            </div>
            <div class="form-group">
                <a href="{{ url('password') }}">¿Has olvidado tu contraseña?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>            
        </form>
    </div>
@endsection

