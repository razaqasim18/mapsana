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
    <link rel="stylesheet" href="{{ asset('assets/online/owl.carousel.css') }}"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/online/owl.theme.default.css') }}"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('assets/online/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/online/bootstrap3.min.js') }}"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/owl_carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/owl_carousel/owl.theme.css') }}" />

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
    <nav class="navbar navbar-expand-lg navbar-light navpatientbg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <div class="py-2">
                <a class="navbar-brand mx-auto" href="{{ route('dashboard') }}" style="padding: 0px">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" height="130px" alt="" />
                </a>
            </div>
            <div>
                <form action="#">
                    <button class="btn_filter">
                        <img src="{{ asset('assets/svgs/filtersbtn.svg') }}" height="45px" alt="btnFilters" />
                    </button>
                    <input class="patInput" type="text"
                        placeholder="ingresa una dirección, especialidad o prestación medica ..." />
                    <button class="btnpatSearch">
                        <img src="{{ asset('assets/svgs/saerchbtnimg.svg') }}" height="40px" alt="btnSearch" />
                    </button>
                </form>
            </div>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <button class="btn_sidebar">
                        <img src="{{ asset('assets/svgs/sidebarbtn.svg') }}" height="40px" alt="" />
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btnprofile">
                        <img src="{{ asset('assets/svgs/foto.svg') }}" height="45px" alt="" />
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar menu ends -->

    @yield('content')

    <!-- mapsana Footer Starts -->
    <div class="container-fluid bg-light pt-5 pb-5 capabara_footer">
        <div class="row pcontainer pt-5 quick">
            <img src="{{ asset('assets/svgs/footerbottomright.svg') }}" class="fttopleft" alt="" />
            <div class="col-md-3 col-sm-12">
                <p class="text-dark ml-5 mb-5">
                    Soluciones para Bienestar <br />
                    Conoce nuestros proyectos <br />
                    Empleo
                </p>
                <h6 class="ml-5 my-3"><b>Siguenos</b></h6>
                <div class="d-flex justify-content-start footer_icons ml-5">
                    <a href="" class="me-3 ml-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="" class="me-3"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="d-flex mt-4 justify-content-center">
                    <p class="m-0">&copy 2023 Mapsana Group</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <h3 class="text-dark mb-4 fw900">Home</h3>
                <a href="#" class="text-dark">Proceso Verificación</a><br />
                <a href="#" class="text-dark">Política de Privacidad</a><br />
                <a href="#" class="text-dark">Términos de Uso</a><br />
                <a href="#" class="text-dark">Política de Cookies</a><br />
                <a href="#" class="text-dark">Base Legal</a>
            </div>

            <div class="col-md-3 col-sm-12 mt_57">
                <a href="#" class="text-dark">FAQ</a><br />
                <a href="#" class="text-dark">Código de conducta</a><br />
                <a href="#" class="text-dark">Derechos y Deberes</a><br />
                <a href="#" class="text-dark">Messenger</a><br />
                <a href="#" class="text-dark">Membresias</a> <br />
                <a href="#" class="text-dark">Descarga la App</a>
                <a href="#">
                    <i class="fa-brands cbicons fa-app-store-ios"></i>
                </a>
                <a href="#">
                    <i class="fa-brands cbicons fa-android"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 mt_57">
                <img src="{{ asset('assets/svgs/footerwalacapabara.svg') }}" alt="" />
            </div>
            <img src="{{ asset('assets/svgs/footerbottomright.svg') }}" class="footer_br_img" alt="" />
        </div>
    </div>
    <!-- mapsana Footer Ends -->

    <script src="{{ asset('assets/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- <script src="./assets/owl_carousel/owl.carousel.min.js"></script> -->
    <script src="{{ asset('assets/online/owl.carousel.min.js') }}"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('script')

</body>

</html>
