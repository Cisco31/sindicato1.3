<div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route("anuncios.index") }}">
            <img src="{{ asset('static/images/sututslrc.png') }}" width="50" height="50" alt="logo">
        </a>
        <a class="navbar-brand" href="{{ route("anuncios.index") }}">SUTUTSLRC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route("anuncios.index") }}">Anuncios</a>
            <a class="nav-item nav-link" href="{{ route("requests.create") }}">Solicitud</a>
            <a class="nav-item nav-link" href="{{ route("documentos.index") }}">Documentos</a>
            <div style="margin-left: 750px;">
                @livewire('iniciar-sesion.logout')
            </div>
          </div>
        </div>
      </nav>

    <form wire:submit.prevent="crear">
        <div class="card">
            <h5 class="card-header text-center">
                Solicitud Día Económico
            </h5>
            <div class="card-body col-6 mx-auto ">
                @include('livewire.requests.formulario')
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success btn-sm">Guardar</button>
            </div>
        </div>
    </form>
    <br><br>
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha Solicitada</th>
                    <th scope="col">Dia en que se solicitó</th>
                    <th scope="col">Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($requests as $request)
                    <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $request->fecha }}</td>
                        <td>{{ $request->created_at }}</td>
                        @if ($request->estado == null)
                            <td>Pendiente</td>
                        @elseif ($request->estado == 1)
                            <td>Aceptada</td>
                        @else
                            <td>Denegada</td>
                        @endif
                        <td>
                            <a href="{{ route('requests.delete', $request) }}" title="Eliminar Solicitud"
                                class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            {{ $requests->links() }}
        </div>
    </div>
</div>
