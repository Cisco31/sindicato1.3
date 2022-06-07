<head>
    <link href="{{ public_path('static/css/app.css') }}" rel="stylesheet" type="text/css">
</head>


<div class="container text-center">
    <h2>Lista de Anuncios</h2>
</div>


<table class="table table-striped">
    <thead class="table-dark" style="text-aling-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TITULO</th>
            <th scope="col">ESPECIFICACIONES</th>
            <th scope="col">PUBLICADO POR</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    @foreach ($anuncios as $anuncio)
        <tbody>

            <tr>
                <th scope="row">{{ $anuncio->id }}</th>
                <td>{{ $anuncio->titulo }}</td>
                <td>{{ $anuncio->contenido }}</td>
                <td>Nombre usuario</td>
                <td>
                    <a href="{{ route('admin.anuncio-delete', $anuncio) }}" type="button" title="Eliminar anuncio"
                        class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    <a href="{{ route('admin.anuncio-edit', $anuncio) }}" title="Editar anuncio" type="button"
                        class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>

        </tbody>
    @endforeach
</table>
