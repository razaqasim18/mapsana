<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form Mapsana</title>
    <link rel="shortcut icon" href="{{ asset('assets/svgs/favicon.png') }}" type="image/x-icon" />

    <!-- Bootstrap 5 cdn -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap5/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap5/bootstrap-icons.css') }}" />
    <script src="{{ asset('assets/bootstrap5/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap 5 cdn -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/signup_form_assets/style2.css') }}" />
    <!-- Stylesheet -->
</head>

<body>
    <form id="signUpForm" action="#">
        <div class="container-fluid" style="background-image: url({{ asset('assets/svgs/login-background.png') }})"
            id="pgone">
            <div class="row whiteDiv">
                <div class="col-md-12">
                    <img src="{{ asset('assets/signup_form_assets/img/Vector_29.svg') }}" alt=""
                        class="mt-4 ms-2" width="30" height="30" id="prevBtn" onclick="nextPrev(-1)" />
                </div>

                <!-- pg 1 start -->
                <div class="step" id="mystep1">
                    <div class="col-md-12 text-center">
                        <p class="intro">
                            Bienvenido a <b style="color: #00a81b"> Mapsana </b>
                        </p>
                        <p class="subintro text-center">
                            tomará solo unos minutos para crear tu cuenta
                        </p>
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="mainContent">Eres...</p>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6 text-center positionDiv">
                            <p class="Paciente">Paciente</p>
                        </div>
                        <div class="col-md-6">
                            <p class="Salud">Prestador Individual de Salud</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-end endicon">
                        <p class="vamos">
                            Vamos!
                            <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                                width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                        </p>
                    </div>
                </div>

                <!-- pg one end -->

                <!-- pg two start -->
                <!-- <ul id="progressbar">
                    <li class="stepIndicator"></li>
                    <li class="stepIndicator"></li>
                    <li class="stepIndicator"></li>
                </ul> -->

                <div class="step" id="mystep2">
                    <div class="col-md-12 text-center Aseguraremos mt-4 mb-5">
                        <b style="color: #00a81b"> Aseguraremos </b> <br />
                        que todo este listo para abrirte una cuenta
                    </div>

                    <div class="col-md-12 img1">
                        <img src="{{ asset('assets/signup_form_assets/img/progress2y1.svg') }}" alt=""
                            width="600" />
                    </div>

                    <div class="col-md-12 my-2 checkboxes">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        Ya cumpliste 18 años y estas legalmente capacitado <br />
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        Tienes RUN chileno y tu cedula esta vigente <br />
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        No posees registro de inhabilitación por maltrato relevante <br />
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        No posees registro de inhabilitación por delitos sexuales <br />
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        Estas de acuerdo presentar Certificado de antecedentes penales
                        <br />
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        Estas de acuerdo con nuestro
                        <span class="txtgreen"><b>Proceso de Verificación</b></span>
                        <br />
                    </div>
                    <div class="col-md-12 text-end Siguente">
                        Siguente
                        <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                            width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                    </div>
                </div>
                <!--  pg 2 end -->

                <!-- pg 3 start -->

                <div class="step" id="mystep3">
                    <div class="col-md-12 Ahoratext text-center">
                        Ahora crearemos <b style="color: #00a81b"> el acceso </b> a tu
                        cuenta
                    </div>
                    <div class="col-md-12 img1">
                        <img src="./assets/signup_form_assets/img/progress2y2.png" alt="" width="600" />
                    </div>
                    <div class="my-2 signup_form">
                        <form action="" class="">
                            <input type="email" name="email" class="email_input"
                                placeholder="por favor, ingresa tu email personal
" id="" />
                        </form>
                    </div>
                    <div class="polygon text-center">
                        <img src="./assets/signup_form_assets/img/Vector.svg" alt="" height="70"
                            width="70" />
                    </div>
                    <div class="col-md-12 items">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <p>
                                    <img src="{{ asset('assets/img/Group_6.svg') }}" alt=""
                                        class="me-1" />
                                    Te rogamos utilizar tu correo personal donde eres
                                    la unica persona que tiene el control
                                </p>
                            </li>
                            <li class="nav-item">
                                <p>
                                    <img src="{{ asset('assets/img/Group_6.svg') }}" alt=""
                                        class="me-1" />
                                    Asegurate que el acceso al correo tenga
                                    verificacion de 2 pasos
                                </p>
                            </li>
                            <li class="nav-item">
                                <p>
                                    <img src="{{ asset('assets/img/Group_6.svg') }}" alt=""
                                        class="me-1" />
                                    Para fines de seguridad en cada ingreso se
                                    generara una nueva contraseña numerica enviada a
                                    tu correo
                                </p>
                            </li>
                            <li class="nav-item">
                                <p>
                                    <img src="{{ asset('assets/img/Group_6.svg') }}" alt=""
                                        class="me-1" />
                                    Despues del completar processo de verificacion
                                    puedes solicitar cambio de correo asociado a tu
                                    cuenta
                                </p>
                            </li>
                            <li class="nav-item">
                                <p>
                                    <img src="{{ asset('assets/img/Group_6.svg') }}" alt=""
                                        class="me-1" />
                                    Si pierdes el acceso a tu correo, no dudes en
                                    <span class="txtgreen">contactarnos</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 Entendido text-end">
                        Entendido!
                        <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                            width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                    </div>
                </div>
                <!--  pg 3 end -->

                <!--  pg 4 start -->
                <div class="step" id="mystep4">
                    <div class="col-md-12 myText text-center">
                        <b style="color: #00a81b"> Te queremos </b> conocer
                    </div>
                    <div class="col-md-12 img1">
                        <img src="./assets/signup_form_assets/img/progressline 1.png" alt=""
                            width="600" />
                    </div>
                    <div class="col-md-12 middleText text-center">
                        Cual es tu nombre completo?
                    </div>
                    <div class="nameForm">
                        <form action="">
                            <input type="text" name="" class="name_input" id="" />
                        </form>
                    </div>
                    <div class="col-md-12 text-center bottomText">
                        Tiene que ser exactamente como aparece en tu cedula de identidad
                    </div>
                    <div class="col-md-12 text-end Siguente">
                        Siguente
                        <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                            width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                    </div>
                </div>
                <!-- pg 4 end -->

                <!-- pg 5 start -->
                <div class="step" id="mystep5">
                    <div class="col-md-12 gracias text-center">
                        Muchas <b style="color: #00a81b"> gracias! </b>
                    </div>
                    <div class="col-md-12 img1">
                        <img src="./assets/signup_form_assets/img/progress2y2.png" alt="" width="600" />
                    </div>
                    <div class="col-md-12 nacimiento text-center my-5">
                        Cual es tu fecha de nacimiento?
                    </div>
                    <div class="col-md-12 text-center myDate">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <!-- <input type="text"> <br> -->
                                <select name="" id="">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                                <br />
                                <span>Day</span>
                            </li>
                            <li class="breadcrumb-item">
                                <!-- <input type="text"> <br> -->
                                <select name="" id="">
                                    <option value=""></option>
                                    <option value="">January</option>
                                    <option value="">February</option>
                                    <option value="">March</option>
                                    <option value="">April</option>
                                    <option value="">May</option>
                                    <option value="">June</option>
                                    <option value="">July</option>
                                    <option value="">August</option>
                                    <option value="">September</option>
                                    <option value="">October</option>
                                    <option value="">November</option>
                                    <option value="">December</option>
                                </select>
                                <br />
                                <span>Month</span>
                            </li>
                            <li class="breadcrumb-item">
                                <!-- <input type="text"> <br> -->
                                <select name="" id="ddlYears">
                                    <option value=""></option>
                                </select>
                                <br />
                                <span>Year</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-12 text-end Siguente">
                        Siguente
                        <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                            width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                    </div>
                </div>
                <!-- pg 5 end -->

                <!-- pg 6 start -->
                <div class="step" id="mystep6">
                    <div class="col-md-12 ultima text-center">
                        y la <b style="color: #00a81b"> ultima! </b>
                    </div>
                    <div class="col-md-12 img1">
                        <img src="./assets/signup_form_assets/img/progressline 3.png" alt=""
                            width="600" />
                    </div>
                    <div class="col-md-12 Indícanos text-center">
                        Indícanos tu RUN, por favor
                    </div>
                    <div class="col-md-12 text-center myDate">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <input type="text" /> <br />
                                <span>Day</span>
                            </li>
                            <li class="breadcrumb-item">
                                <input type="text" /> <br />
                                <span>Month</span>
                            </li>
                            <li class="breadcrumb-item">
                                <input type="text" /> <br />
                                <span>Year</span>
                            </li>
                            <li class="breadcrumb-item"><input type="text" /> <br /></li>
                        </ol>
                    </div>
                    <div class="col-md-12 text-center appears">
                        It should be the same as appears in your id
                    </div>
                    <div class="col-md-12 text-end Siguente">
                        Siguente
                        <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                            width="30" height="30" id="nextBtn" onclick="nextPrev(1)" />
                    </div>
                </div>
                <!-- pg 6 end -->

                <!-- pg 7 start -->
                <div class="step" id="mystep7">
                    <div class="col-md-12 confirma text-center">
                        Por favor, <b style="color: #00a81b"> lee y confirma </b> lo
                        siguiente
                    </div>
                    <div class="col-md-12 fname text-center">
                        <input type="text" class="form-control fname" placeholder="Full name" />
                    </div>
                    <div class="row">
                        <div class="col-md-6 dob text-center">
                            <input type="text" class="form-control dob" placeholder="Birth date" />
                        </div>
                        <div class="col-md-6 run text-center">
                            <input type="text" class="form-control run" placeholder="RUN" />
                        </div>
                    </div>

                    <div class="col-md-12 checkboxes my-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Type of User (Patient or Health Professional) <br />
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Declaracion de capacidad legal <br />
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Me comprometo terminar el proceso de verificación personal dentro de
                        los 30 días <br />
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Estoy de acuerdo que Mapsana recolecte mis datos personales,segun la
                        <span class="txtgreen">Politica de Privacidad</span> <br />
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Declaro que soy usuario independiente de la plataforma, estoy de
                        acuerdo que no soy y no seré un empleado de Mapsana <br />
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                        Estoy de acuerdo que creacion de cuenta y el uso de la plataforma
                        Mapsana significa que yo acepté la
                        <span class="txtgreen">Politica de Privacidad, Terminos de Uso, Politica de Cookies
                            y Politica de Escrow</span>
                        de Mapsana <br />
                    </div>

                    <div class="row">
                        <div class="col-md-8 text-end">
                            <input type="text" class="form-control email" placeholder="Email" />
                        </div>
                        <div class="col-md-4 text-end Unirse">
                            Unirse
                            <img src="{{ asset('assets/signup_form_assets/img/Vector_30.svg') }}" alt=""
                                width="30" height="30" />
                        </div>
                    </div>
                </div>
                <!-- pg 7 end -->
            </div>
            <!--row white div -->
        </div>
        <!--container-fluid div -->
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName('step');
            x[n].style.display = 'block';
            //... and fix the Previous/Next buttons:
            if (n == x.length - 1) {
                document.getElementById('nextBtn').innerHTML = 'Submit';
            } else {
                document.getElementById('nextBtn').innerHTML = 'Next';
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName('step');
            // Hide the current tab:
            x[currentTab].style.display = 'none';
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById('signUpForm').submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i,
                x = document.getElementsByClassName('stepIndicator');
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(' active', '');
            }
            //... and adds the "active" class on the current step:
            x[n].className += ' active';
        }
    </script>

    <script type="text/javascript">
        window.onload = function() {
            //Reference the DropDownList.
            var ddlYears = document.getElementById('ddlYears');

            //Determine the Current Year.
            var currentYear = new Date().getFullYear();

            //Loop and add the Year values to DropDownList.
            for (var i = 1950; i <= currentYear; i++) {
                var option = document.createElement('OPTION');
                option.innerHTML = i;
                option.value = i;
                ddlYears.appendChild(option);
            }
        };
    </script>
    <!-- onmousedown="if(this.options.length>3){this.size=3;}" onchange='this.size=0;' onblur="this.size=0;" -->
</body>

</html>
