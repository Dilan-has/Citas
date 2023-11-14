<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/styles/navbar.css') }}">
    <title>Document</title>
</head>

<body>
    @include('layouts.partials.navbar')
    @auth
        <div class="container">
            <h1>Lista de Citas</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dependencia</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            <td>{{ $cita->nombre }}</td>
                            <td>{{ $cita->dependencia }}</td>
                            <td>{{ $cita->fecha }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endauth
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
