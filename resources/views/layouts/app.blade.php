<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="{{ asset('assets/svgs/favicon.png') }}" type="image/x-icon" />

    <!-- Bootstrap & Jquery cdns -->
    <link rel="stylesheet" href="{{ asset('assets/online/bootstrap.min.css') }}" />
    <script src="{{ asset('assets/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/online/bootstrap.min.js') }}"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/online/all.min.css') }}" />

    {{-- owl_carousel --}}
    <link rel="stylesheet" href="{{ asset('assets/online/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/online/owl.theme.default.css') }}" />

    <script src="{{ asset('assets/online/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/online/bootstrap3.min.js') }}"></script>

    {{-- glide --}}
    <link rel="stylesheet" href="{{ asset('assets/css/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glide.theme.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    @yield('title')
</head>

<body>
    <!-- Topbar section starts -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-start text-lg-start mb-lg-0 pl-3">
                <div class="d-inline-flex align-items-start">
                    <small class="py-2 ms-1">Descarga la App</small>
                    <div class="d-flex align-items-center">
                        <!-- <a href="" class="ms-2"
        ><img
         src="assets/svgs/playstore.png"
         alt=""
         width="20px"
         height="20px"
       /></a>
       <a href="" class="ms-2">
        <img
         src="assets/svgs/apple.png"
         alt=""
         width="20px"
         height="22px" />
       </a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-lg-end d-flex align-items-center flex-row-reverse top_icons pr-3">
                <!-- <a href="" class="me-3"><i class="fab fa-facebook-f"></i></a>
     <a href="" class="me-3"><i class="fab fa-linkedin-in"></i></a>
     <a href="" class="me-3"><i class="fab fa-twitter"></i></a>
     <a href="" class="me-3"><i class="fab fa-youtube"></i></a> -->
                <small>Redes sociales</small>
            </div>
        </div>
    </div>
    <!-- Topbar section ends -->

    <!-- Navbar menu Starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Conocer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>
            </ul>
            <div class="py-2">
                <a class="navbar-brand mx-auto" href="{{ route('home') }}" style="padding: 0px">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" height="130px" alt="" />
                </a>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Acceder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar menu ends -->

    @yield('content')

    <!-- mapsana Footer Starts -->
    <div class="container-fluid bg-light pt-5 pb-5 homeFooter">
        <div class="row pcontainer pt-5 quick footer_bg">
            <div class="col-md-3 col-sm-12">
                <div class="footer_logo_img">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" height="180px" width="280px" alt="" />
                </div>
                <p class="text-dark ml-5">
                    Soluciones para Bienestar <br />
                    Conoce nuestros proyectos <br />
                    Empleo
                </p>
                <h6 class="ml-5 my-3 fw900 headingTXT colsignue"><b>Siguenos</b></h6>
                <div class="d-flex justify-content-start footer_icons ml-5">
                    <a href="" class="me-3 ml-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="" class="me-3"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 ps-md-5 mt_57 d-flex flex-column gap-3">
                <a href="#" class="text-dark">Nuestra Misión</a>
                <a href="#" class="text-dark">Proceso Verificación</a>
                <a href="#" class="text-dark">Política de Privacidad</a>
                <a href="#" class="text-dark">Términos de Uso</a>
                <a href="#" class="text-dark">Política de Cookies</a>
                <a href="#" class="text-dark">Base Legal</a>
            </div>

            <div class="col-md-3 col-sm-12">
                <h3 class="text-37 mb-4 fw900 headingTXT">COLABORACÍON</h3>
                <div class="d-flex flex-column gap-3">
                    <a href="#" class="">Prestadores Individuales</a>
                    <a href="#" class="">Empresas</a>
                    <a href="#" class="">Clínicas y Hospitales</a>
                    <a href="#" class="">ISAPRE/ FONASA</a>
                    <a href="#" class="">Contacto empresa</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <h3 class="text-37 mb-4 fw900 headingTXT">USUARIOS</h3>
                <div class="d-flex flex-column gap-3">
                    <a href="#" class="">FAQ</a>
                    <a href="#" class="">Derechos y Deberes</a>
                    <a href="#" class="">Buscador</a>
                    <a href="#" class="">Messenger</a>
                    <a href="#" class="">Reportar un problema</a>
                    <a href="#" class="">Centro de Ayuda</a>
                </div>
            </div>
        </div>
        <div class="d-flex mt-4 justify-content-center">
            <p class="m-0">&copy 2023 Mapsana Group</p>
        </div>
    </div>
    <!-- mapsana Footer Ends -->

    <script src="{{ asset('assets/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- <script src="./assets/owl_carousel/owl.carousel.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    @yield('script')

</body>

</html>
