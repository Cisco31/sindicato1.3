<div wire:init="cargando">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
    </head>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu"></div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt="">
                    <h3>SUTUTSLRC</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('admin.view') }}"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}"><span class="fa fa-users mr-3 notif"></span>Usuarios</a>
                </li>
                <li>
                    <a href="{{ route('admin.anuncios') }}"><span class="fa fa-newspaper mr-3"></span> Anuncios</a>
                </li>
                <li>
                    <a href="{{ route('admin.solicitudes') }}"><span class="fa fa-tags mr-3"></span> Solicitudes</a>
                </li>
                <li>
                    @livewire('iniciar-sesion.logout')
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container cont-anuncio-index">
                <div class="row">
                    <div class="col mb-1">
                        <div class="float-left">
                            <a href="{{ route('admin.anuncio.pdf') }}" type="button" class="btn-sm btn-dark"><i
                                    class="fa fa-file-pdf"></i> Generar
                                reporte</a>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="float-right">
                            <a href="{{ route('admin.anuncio-create') }}" type="button" class="btn-sm btn-success"><i
                                    class="fa fa-plus-square"></i> Crear nuevo anuncio</a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        @if (count((array) $anuncios))
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
                                                <a href="{{ route('admin.anuncio-delete', $anuncio) }}" type="button"
                                                    title="Eliminar anuncio" class="btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                                <a href="{{ route('admin.anuncio-edit', $anuncio) }}"
                                                    title="Editar anuncio" type="button" class="btn-sm btn-info"><i
                                                        class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        @else
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        @endif

                        {{-- @if (count($anuncios) == 0)
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
                                <tbody>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                    <th>No hay resultados</th>
                                </tbody>
                            </table>
                        @endif --}}
                        {{ $cargado == true ? $anuncios->links() : null }}
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
