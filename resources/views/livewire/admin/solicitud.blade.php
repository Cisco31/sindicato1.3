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
            <div class="container cont-solicitud">
                <div class="row mb-1">
                    <div class="col">
                        <a href="" type="button" class="float-right btn-sm btn btn-dark"><i class="fa fa-file-pdf"></i>
                            Generar reporte</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">PUESTO</th>
                                    <th scope="col">SOLICITUD</th>
                                    <th scope="col">FECHA</th>
                                    <th scope="col">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Docente</td>
                                    <td>Dia economico</td>
                                    <td>05/04/2022</td>
                                    <td><a href="" type="button" class="btn btn-sm btn-success">Aceptar</a>
                                        <a href="" type="button" class="btn btn-sm btn-danger">Denegar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Docente</td>
                                    <td>Intervencion sindical</td>
                                    <td>05/04/2022</td>
                                    <td><a href="" type="button" class="btn btn-sm btn-success">Aceptar</a>
                                        <a href="" type="button" class="btn btn-sm btn-danger">Denegar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Docente</td>
                                    <td>Prestamo</td>
                                    <td>05/04/2022</td>
                                    <td><a href="" type="button" class="btn btn-sm btn-success">Aceptar</a>
                                        <a href="" type="button" class="btn btn-sm btn-danger">Denegar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
