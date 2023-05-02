 @extends('layouts.app')
 @section('title')
     <title>Login Mapsana</title>
 @endsection

 @section('content')
     <!-- Login Form Starts -->
     <div class="container-fluid p-5 bg-login" style="background: url('./assets/svgs/login-background.png')" id="login_form">
         <div class="login_wrapper d-flex justify-content-center">
             <div class="bg-white login_container">
                 <div class="d-flex justify-content-end">
                     <button class="cancel_btn" type="button" onclick="window.location.href('/index.html')">
                         <i class="fa-solid fa-xmark xmark"></i>
                         <!-- <img src="./assets/svgs/xmark-solid.svg" alt="cancel_btn" /> -->
                     </button>
                 </div>
                 <div class="d-flex justify-content-center flex-column align-items-center">
                     <img src="./assets/svgs/animalito unete.svg" height="100px" alt="mapsana_img" />
                     <h1 class="ftext fcstxt my-4">Inicio De Sesión</h1>
                 </div>
                 <div class="d-flex flex-column justify-content-center align-items-center align-content-center">
                     <form action="#">
                         <input type="email" class="input_email" name="" required
                             placeholder="ingresa tu RUN o tu correo para recibir el código" id=""
                             title="ingresa tu RUN o tu correo para recibir el código" />
                         <br />
                         <button class="btn_Continuar d-flex" id="btnContinuar">
                             Continuar
                         </button>
                     </form>
                 </div>
                 <div class="d-flex justify-content-center align-items-center mt-4 flex-column">
                     <p class="m-0 ftext">¿No estás registrado?</p>
                     <button class="btnCrear">Crear cuenta</button>
                 </div>
                 <div class="d-flex justify-content-center mt-4">
                     <button class="btnNeces">¿Necesitas Ayuda?</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- Login Form Ends -->

     <div class="container-fluid p-5 bg-login" style="display: none; background: url('./assets/svgs/login-background.png')"
         id="otpForm">
         <div class="login_wrapper d-flex justify-content-center">
             <div class="bg-white login_container">
                 <div class="d-flex justify-content-end">
                     <button class="cancel_btn" type="button" onclick="window.location.href('/index.html')">
                         <i class="fa-solid fa-xmark xmark"></i>
                         <!-- <img src="./assets/svgs/xmark-solid.svg" alt="cancel_btn" /> -->
                     </button>
                 </div>
                 <div class="d-flex justify-content-center flex-column align-items-center">
                     <img src="./assets/svgs/animalito unete.svg" height="100px" alt="mapsana_img" />
                     <h1 class="ftext my-4 fcstxt mb-1">Ingresa Código</h1>
                     <p class="ftext mb-2">el codigo de ingreso fue enviado a tu correo</p>
                 </div>
                 <div class="d-flex flex-column justify-content-center align-items-center align-content-center">
                     <form action="#" class="otp_form">
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name="" required
                             placeholder="-" id="" />
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name="" required
                             placeholder="-" id="" />
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name="" required
                             placeholder="-" id="" />
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name="" required
                             placeholder="-" id="" />
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name="" required
                             placeholder="-" id="" />
                         <input type="number" min="0" max="9" pattern="/^-?\d+\.?\d*$/"
                             onKeyPress="if(this.value.length==1) return false;" class="input_otp" name=""
                             required placeholder="-" id="" />
                         <br />
                         <div class="d-flex justify-content-center mt-2">
                             <button class="btnIni d-flex">Iniciar sesión</button>
                         </div>
                     </form>
                 </div>
                 <div class="d-flex justify-content-center align-items-center mt-4 flex-column">
                     <button class="btnCrear">No recibí el codigo</button>
                     <p class="mt-2 ftext">Reenviar el código en 00:50</p>
                 </div>
                 <div class="d-flex justify-content-center mt-4">
                     <button class="btnNeces">¿Necesitas Ayuda?</button>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
     <script>
         $(document).ready(function() {
             $('#btnContinuar').click(function() {
                 $('#login_form').hide();
                 $('#otpForm').show();
             });
             $('.input_otp').on('input', function() {
                 var $this = $(this);
                 if ($this.val().length >= 1) {
                     $this.next('.input_otp').focus();
                 } else {
                     $this.prev('.input_otp').focus();
                 }
             });
         });
     </script>
 @endsection
