<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('static/css/admin-view.css') }}">
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
            <div class="grid" style="--bs-rows: 3; --bs-columns: 3;">
                <div class="g-start-2" style="grid-row: 2">
                    <div class="container contenedor"><br>

                        @if (count((array) $anuncios))

                            <div class="jumbotron">
                                @foreach ($anuncios as $anuncio)
                                    <!--Anuncio-->
                                    <div class="card">
                                        <div class="card-header"><b>{{ $anuncio->titulo }}</b>
                                            <a href="{{ route('admin.anuncio-create') }}"
                                                class="btn btn-sm btn-dark float-right"><i class="fa fa-save"></i>
                                                Crear
                                                anuncio</a>
                                        </div>

                                        <div class="card-body ">
                                            <div class="container">
                                                <p>{{ $anuncio->contenido }}</p>

                                                {{-- <img src="{{ Storage::disk('public')->url($anuncio->url_img) }}"
                                                style="width: 200px; height: 150px;"><br> --}}

                                                {{-- <img src="{{ asset($anuncio->url_img) }}"
                                                style="width: 200px; height: 150px;"><br> --}}


                                            </div>
                                        </div>

                                        <div class="card-footer h-10"><br>
                                            <footer class="blockquote-footer">
                                                <a href="{{ route('admin.anuncio-edit', $anuncio) }}"><small
                                                        class="text-muted">Editar</a></small>
                                                <a href="{{ route('admin.anuncio-delete', $anuncio) }}"><small
                                                        class="text-muted">Desactivar</a></small>
                                                <small class="float-right text-muted muted"><b>Creado el dia
                                                        {{ $anuncio->created_at }}</b></a></small>
                                            </footer>
                                        </div>
                                    </div> <br>
                                @endforeach
                            </div>
                        @else
                            <div class="jumbotron">
                                <h1>
                                    Sin anuncios por mostrar
                                </h1>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            {{ $cargado == true ? $anuncios->links() : null }}
        </div>




        {{-- <div class="modal fade" id="CrearAnuncio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Anuncio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div> --}}

        {{-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" id="staticBackdrop">
        <div class="card carta">
            <div class="card-footer">
                <div class="form-group"><br>
                    <input wire:model="titulo" class="form-control" id="comment" placeholder="Titulo del anuncio"
                        name="text">
                    <br>
                    <textarea wire:model="texto" placeholder="Especificaciones del anuncio"></textarea> <br>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Subir imagen</label>
                        <input wire:model="foto" type="file" class="form-control-img" name="file">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <a type="button" class="float-left btn btn-dark">Registros</a>
                            <a type="button" class="float-right btn btn-success">Publicar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    </div>
