<head>
    <link href="{{ public_path('static/css/app.css') }}" rel="stylesheet" type="text/css">
</head>



<h2>Lista de usuarios</h2>

<table class="table text-center table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col"><b>NOMBRE</b></th>
            <th scope="col"><b>APELLIDO</b></th>
            <th scope="col"><b>DEPARTAMENTO</b></th>
            <th scope="col"><b>PUESTO</b></th>
            <th scope="col"><b>ESTADO</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <th scope="row">{{ $usuario->nombre }}</th>
                <th>{{ $usuario->apellido }}</th>
                <th>{{ $usuario->puesto }}</th>
                <th>{{ $usuario->departamento }}</th>
                @if ($usuario->estado == 1)
                    <th><span class="badge badge-pill badge-success">Activo</span></th>
                @elseif ($usuario->estado == 0)
                    <th><span class="badge badge-pill badge-danger">Inactivo</span></th>
                @endif

            </tr>
        @endforeach
    </tbody>
</table>
