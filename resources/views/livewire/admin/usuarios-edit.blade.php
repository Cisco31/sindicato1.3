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
            <form wire:submit.prevent="editar">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h2>Editar usuario</h2>
                            <p>Para editar la informacion de un usuario simplemente habra que borrar la informacion que
                                venga en
                                el
                                campo el cual queramos modificar y escribir la nueva informacion a guardar.</p>
                        </div>
                        <div class="card-body">
                            @include('livewire.admin.formularioEdit')
                        </div>
                        <br>
                        <div class="card-footer">
                            <button class="float-right btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                            <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i
                                    class="fa fa-home"></i>
                                Regresar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
