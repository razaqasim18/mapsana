 @extends('layouts.app')
 @section('title')
     <title>Mapsana</title>
 @endsection

 @section('content')
     <!-- HeroSection Starts -->
     <div class="container-fluid hero_section">
         <div class="row">
             <div class="col-md-7 bg_img"></div>
             <div class="col-md-5 hero_headings p-2">
                 <h1 class="odd firstone"><span class="txtgreen">Conéctate</span></h1>
                 <h1 class="second">a tu vecindario</h1>
                 <h1 class="odd">y encuentra</h1>
                 <h1 class="fourth"><b>las soluciones</b></h1>
                 <h1 class="odd">para tu <span class="txtgreen">Salud</span></h1>
                 <h1 class="last1"><span class="lasthone">Fácil, Seguro, Cercano</span></h1>
                 <br />
                 <br />
                 <br />
                 <br />
                 <br />
             </div>
             <div class="search_row">
                 <div class="">
                     <h2 class="text-white">
                         <span class="firstword">Como</span> <br />
                         <span class="secondword">te podemos</span> <br />
                         <span class="thirdword">ayudar</span>
                     </h2>
                 </div>
                 <div class="">
                     <form action="">
                         <input type="text" name="" class="search_field" id=""
                             placeholder="ingresa una dirección, especialidad o prestación medica ..." />
                         <button class="search_btn">BUSCAR</button>
                     </form>
                 </div>
             </div>
         </div>

         <div class="mt-2 mb-2 twoLines" style="margin-top: -120px !important">
             <p class="text-center m-0 hero_line">
                 Elige entre <span class="atendmelo">atención a domicilio</span>, teleconsulta o
                 consulta presencial cerca de tu casa, lo que
                 <span class="atendmelo">mas te acomode!</span>
             </p>
             <p class="text-center m-0 hero_line_1">
                 Si eres Prestador Individual de Salud
                 <a href="#" class="hero_a">Ingresa AQUÍ</a>
             </p>
         </div>
     </div>
     <!-- HeroSection Ends -->

     <!-- Services Section Starts -->
     <div class="container-fluid p-5">
         <div class="row">
             <div class="col-md-6">
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/peditaria.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Pediatría</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/home.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">A domicilio</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/umberlla.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Salud Mental</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/bones.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Traumatología</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/injection.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Enfermeras y Paramedicos</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/pregnant.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Obstetricia</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/healthy.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Kinesiología</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/respiratory.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Fonoaudiología</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/search.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#"><span class="txtgreen">Explora</span> nuestra mapa</a>
                     </div>
                     <div class="right_ar_div">
                         <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" />
                     </div>
                 </div>
                 <div class="service-container">
                     <div class="icon-div">
                         <img src="./assets/svgs/fox.svg" class="service_img" alt="" />
                     </div>
                     <div class="service-link">
                         <a href="#">Todavia no tienes tu cuenta? </a>
                     </div>
                     <div class="right_ar_div">
                         <button class="btn_un">ÚNETE</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Services Section Ends -->

     <!-- Porque Mapsana Section Starts -->
     <div class="container-fluid p-5 myWhite">
         <h1 class="text-center mb-5">
             <span class="txtgreen fninehunderd"><b><i>Porque</i></b></span>
             Mapsana
         </h1>
         <div class="row">
             <div class="col-md-4">
                 <div class="card bg_card">
                     <div class="service_svg">
                         <img src="./assets/svgs/settingsyellow.svg" alt="" />
                     </div>
                     <div class="card-body">
                         <p class="card-text m-0">
                             Una App que sigue tu ritmo, te ayuda encontrar y interactuar
                             sin revelar tus datos de contacto, acordar los detalles de
                             atención que acomoden ambas partes, realizar y recibir pagos,
                             compartir archivos, obtener documentación necesaria para el
                             reembolso. Chatea, llama o coordina vídeo consulta
                             directamente! Eso y mucho más. A distancia de un click.
                         </p>
                         <div class="read_more">
                             <a href="#" class="saber">saber mas
                                 <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" /></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="card bg_card">
                     <div class="service_svg">
                         <img src="./assets/svgs/team.svg" alt="" />
                     </div>
                     <div class="card-body">
                         <p class="card-text m-0">
                             Sabemos que las consultas a domicilio son cómodas y que
                             también debemos hacer lo máximo posible para proteger lo más
                             valioso - tú bienestar, tu familia, tu hogar. Por eso, nuestra
                             plataforma cuenta con algunas restricciones y solo permite
                             acceso mediante una completa verificación de identidad y
                             antecedentes. Contamos contigo para crear un espacio sano y
                             seguro.
                         </p>
                         <div class="read_more">
                             <a href="#" class="saber">saber mas
                                 <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" /></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="card bg_card">
                     <div class="service_svg">
                         <img src="./assets/svgs/handspray.svg" alt="" />
                     </div>
                     <div class="card-body">
                         <p class="card-text m-0">
                             Las consultas presenciales y las tele consultas a veces no son
                             suficientes. Perdiste tu orden médica? O tienes una receta,
                             pero ninguna farmacia tiene el medicamento? Tienes que recibir
                             inyecciones y el hospital más cercano queda lejos? O
                             simplemente te complica salir de casa? Nosotros te entendemos.
                             De vez en cuando necesitas una atención a domicilio. Y sabes
                             lo bueno? Siempre hay alguien cerca!
                         </p>
                         <div class="read_more">
                             <a href="#" class="saber">saber mas
                                 <img src="./assets/svgs/arrow_right.svg" class="ar_img" alt="" /></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Porque Mapsana Section Ends -->

     <!-- Owl Carousel Section Starts -->
     <div class="container-fluid myWhite owlPart">
         <h2 class="text-center fseven100 mb-5">Conoce algunos profesionales más destacados!</h2>

         <div class="glide">
             <div class="glide__track" data-glide-el="track">
                 <ul class="glide__slides">
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="glide__slide">
                         <div>
                             <div class="">
                                 <img src="./assets//svgs/cardbg.png" height="220px" alt="" />
                                 <div>
                                     <div class="star_rating">
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-solid fa-star"></i>
                                         <i class="fa-regular fa-star"></i>
                                     </div>
                                     <div class="pabso">
                                         <div class="card_container">
                                             <div class="d-flex flex-column">
                                                 <div class="d-flex gap-1">
                                                     <div>
                                                         <div class="d-flex gap-1">
                                                             <div>
                                                                 <img src="./assets/svgs/doctorsahb.jpg" height="70px"
                                                                     alt="" />
                                                             </div>
                                                             <div>
                                                                 <h4 class="m-0 chead">
                                                                     Alberto
                                                                     Guerrero
                                                                 </h4>
                                                                 <p class="m-0 txtten">
                                                                     Medico
                                                                     neurólogo
                                                                     infantil
                                                                     <br />
                                                                     A
                                                                     domicilio
                                                                     /
                                                                     Presencial
                                                                     /
                                                                     Teleconsulta
                                                                     <br />
                                                                     Consultas,
                                                                     recetas,
                                                                     ordenes
                                                                     de
                                                                     exam...
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="sideprofile">
                                                         <p class="m-0">
                                                             Verificado
                                                         </p>
                                                         <p class="m-0">
                                                             Atendiendo
                                                         </p>
                                                         <p class="m-0">
                                                             Horario
                                                         </p>
                                                         <p class="m-0">
                                                             ISAPRE
                                                         </p>
                                                         <p class="m-0">
                                                             FONASA
                                                         </p>
                                                     </div>
                                                 </div>
                                                 <div class="dabso">
                                                     <p class="m-0">
                                                         Autopresentación
                                                     </p>
                                                 </div>
                                             </div>
                                             <div>
                                                 <div class="bottombtns">
                                                     <button class="btn_ver">
                                                         Ver Perfil
                                                     </button>
                                                     <button class="btn_cont">
                                                         Contacto
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
             <div class="glide__arrows" data-glide-el="controls">
                 <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                     <img src="./assets/svgs/owl_left_btn.svg" alt="left-arrow" />
                 </button>
                 <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                     <img src="./assets/svgs/owl_right_btn.svg" alt="right-arrow" />
                 </button>
             </div>
         </div>

         <h1 class="text-center">
             Explora todos los
             <span class="txtgreen txtunderline"><b>beneficios</b></span>
         </h1>
         <h2 class="text-center">y se parte de la creciente comunidad de Mapsana</h2>
     </div>
     <!-- Owl Carousel Section Ends -->
 @endsection

 @section('script')
     <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
     <script>
         const config = {
             type: 'carsoul',
             perView: 3,
             // autoplay: true,
             hoverpause: true,
             keybooard: true,
             rewind: true,
             time: 1000,
             // focusAt: 'center',
             animationTimingFunc: 'cubic-bezier(0.165, 0.840, 0.440, 1.000)',
             breakpoints: {
                 1440: {
                     perView: 3,
                     gap: 50,
                 },
                 1024: {
                     perView: 2,
                     gap: 50,
                 },
                 768: {
                     perView: 2,
                     gap: 100,
                 },
                 480: {
                     perView: 1,
                     gap: 30,
                 },
             },
         };
         new Glide('.glide', config).mount();
     </script>
 @endsection
