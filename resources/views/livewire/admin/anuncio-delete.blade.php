<div>

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
            <div class="mx-auto card" style="width: 45rem;">
                <div class="card-header">
                    <h1>¿Quieres eliminar este anuncio?</h2>
                </div>
                <div class="card-body">
                    <h4>{{ $anuncio->titulo }}</h2>
                        <p>{{ $anuncio->contenido }}</p>
                        <img src="{{ Storage::disk('public')->url($anuncio->url_img != null ? $anuncio->url_img : 'images/anuncios/anuncio.jpg') }}"
                            class="card-img-top" alt="">
                </div>
                <div class="card-footer">
                    <button wire:click="delete" class="float-right btn btn-primary btn-sm">Confirmar</button>
                    <a href="{{ route('admin.anuncios') }}" class="btn btn-danger btn-sm">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</div>
