@extends('layouts.auth-master')

@section('content')
    <form action="/register" method="POST">
        @csrf
        <h1>Crear nueva cuenta</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
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
            <p>Si ya se encuentra registrado <a href="/login">Login</a><p>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <style>
    </style>
@endsection