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

      <div>
        <h3 class="pt-4 pb-2">Formatos</h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Solicitud de préstamo</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Solicitud de préstamo</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Solicitud de préstamo</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Solicitud de préstamo</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h3 class="pt-4 pb-2">Contrato colectivo de trabajo</h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Contrato Colectivo de Trabajo 2017-2019</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Contrato Colectivo de Trabajo 2017-2019</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Contrato Colectivo de Trabajo 2017-2019</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Contrato Colectivo de Trabajo 2017-2019</h5>
                    <p class="card-text"><a href="#" class="card-link">Descargar</a>
                </div>
            </div>
        </div>
    </div>

</div>
