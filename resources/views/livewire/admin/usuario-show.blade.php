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
            <div class="card cardShow text-center ">
                <div class="card-header text-center">
                    <h2 class="info">Información completa del usuario</H2>
                </div>

                <div class="card-body">
                    <div class="row mb-4 g-3">
                        <div class="col">
                            <label>Nombre</label>
                            <input type="text" value="{{ $usuario->nombre }}" disabled>
                        </div>
                        <div class="col">
                            <label>Apellido</label>
                            <input type="text" value="{{ $usuario->apellido }}" disabled>
                        </div>
                        <div class="col">
                            <label>Correo</label>
                            <input type="text" value="{{ $usuario->email }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-4 g-3">
                        <div class="col">
                            <label>Puesto</label>
                            <input type="text" value="{{ $usuario->puesto }}" disabled>
                        </div>
                        <div class="col">
                            <label>Departamento</label>
                            <input type="text" value="{{ $usuario->departamento }}" disabled>
                        </div>
                        <div class="col">
                            <label>Teléfono</label>
                            <input type="text" value="{{ $usuario->telefono }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-4 g-3">
                        <div class="col">
                            <label>CURP</label>
                            <input type="text" value="{{ $usuario->curp }}" disabled>
                        </div>
                        <div class="col">
                            <label>RFC</label>
                            <input type="text" value="{{ $usuario->rfc }}" disabled>
                        </div>
                        <div class="col">
                            <label>INE(Código)</label>
                            <input type="text" value="{{ $usuario->ine }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-4 g-2">
                        <div class="col">
                            <label>Fecha de afiliación</label>
                            <input type="text" value="{{ $usuario->fecha_afiliacion }}" disabled>
                        </div>
                        <div class="col">
                            <label>Fecha de ingreso</label>
                            <input type="text" value="{{ $usuario->fecha_ingreso }}" disabled>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('admin.usuarios') }}" class="btn btn-sm btn-dark float-left"><i
                            class="fa fa-arrow-circle-left   "></i> Regresar</a>
                    <a href="{{ route('admin.user-edit', $usuario) }}" class="btn btn-sm btn-info float-right"><i
                            class="fa fa-edit"></i> Editar información</a>
                </div>
            </div>
        </div>
    </div>

</div>
