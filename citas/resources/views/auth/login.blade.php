@extends('layouts.auth-master')

@section('content')
    <form action="/login" method="POST">
        @csrf
        <h1>Ingresar</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Sus datos se encuentran seguros</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <a href="/register">Registrarse</a>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <style>
    </style>
@endsection
