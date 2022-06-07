<div>
    <head>
        <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
    </head>
    <div id="page-wrapper">
        <!-- Header -->
            <header id="header" class="alt">
                <h1>SUTUTSLRC</h1>
                <nav id="nav">
                    <ul>
                        <li><a href="{{route('index')}}">Inicio</a></li>
                        <li>
                            <a href="#" class="icon solid fa-angle-down">Conocenos</a>
                            <ul>
                                <li><a href="{{route('conocenos.mision')}}">Misión</a></li>
                                <li><a href="{{route('conocenos.vision')}}">Visión</a></li>
                                <li><a href="{{route('conocenos.valores')}}">Valores</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('login')}}" class="button">Iniciar sesión</a></li>
                    </ul>
                </nav>
            </header>

            <section id="banner">
                <h2>SUTUTSLRC</h2>
                <p>Sindicato Único de Trabajadores de la Universidad Tecnológica de San Luis Río Colorado.</p>
                <ul class="actions special">
                    <!-- <li><a href="#" class="button primary">Sign Up</a></li>
                    <li><a href="#" class="button">Learn More</a></li> -->
                </ul>
            </section>

            <section id="main" class="container">

                <section class="box special">
                    <header class="major">
                        <h2>UNIDOS POR EL PROGRESO</h2>
                        <p>Trabajar en conjunto y en el mismo camino hacia la mejor estabilidad laboral en cooperación con la institución, así como promover, defender y representar de manera libre, democrática, responsable, realista y solidaria los derechos de los agremiados</p>
                    </header>
                    <span class="image featured"><img src="{{ asset('static\images\school.jpg') }}" alt="hola" /></span>
                </section>

                <!-- <section class="box special features">
                    <div class="features-row">
                        <section>
                            <img src="" ></img>
                            <h3>Proximos eventos</h3>
                            <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        </section>
                        <section>
                            <img src="" ></img>
                            <h3>Noticias</h3>
                            <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        </section>
                    </div>

                </section> -->

                <div class="row">
                    <div class="col-6 col-12-narrower">

                        <section class="box special">
                            <span class="image featured"><img src="{{ asset('static\images\noti.jpeg') }}" alt="" /></span>
                            <h3>Colaboracion</h3>
                            <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button alt">Learn More</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-6 col-12-narrower">
                        <section class="box special">
                            <span class="image featured"><img src="{{ asset('static\images\event.jpg') }}" alt="" height="286 px"/></span>
                            <h3>Instalaciones</h3>
                            <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button alt">Learn More</a></li>
                            </ul>
                        </section>

                    </div>
                </div>

            </section>

        <!-- Footer -->
            <footer id="footer">
                <!-- <ul class="icons">
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                </ul> -->
                <ul class="copyright">
                    <li>&copy; Sindicato Único de Trabajadores de la Universidad Tecnológica de San Luis Río Colorado. All rights reserved.</li>
                </ul>
            </footer>

    </div>
</div>
