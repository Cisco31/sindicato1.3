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

    <div class="mx-auto card text-center" style="width: 18rem; margin-top: 75px;">
        <div class="card-header">
            <h5 class="card-title">¿Esta seguro de eliminar la solicitud?</h5>
        </div>
        <div class="card-body">
            <p class="card-text">Fecha: {{$request->fecha}}</p>
        </div>
        <div class="card-header">
            <button wire:click="delete" class="btn btn-success btn-sm">Confirmar</button>
            <a href="{{route('requests.create')}}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>
