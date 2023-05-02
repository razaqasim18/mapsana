 @extends('layouts.patient')
 @section('title')
     <title>Mapsana</title>
 @endsection
 @section('content')
     <!-- Patinet Account Details Starts -->
     <div class="container-fluid p-4 bg-patAccount">
         <section class="patAccountbtns">
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <p class="m-0 gmemb">Green member</p>
                 <button>
                     <img src="./assets/svgs/capabara.svg" class="capabara" alt="" />
                 </button>
                 <p class="m-0 img_label">Membresia</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/homewithmap.svg" alt="" /></button>
                 <p class="m-0 img_label">Dirección</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/lockyellowsvg.svg" alt="" /></button>
                 <p class="m-0 img_label">Reglamentos</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/bookmark.svg" alt="" /></button>
                 <p class="m-0 img_label">Favoritos</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/Notas.svg" alt="" /></button>
                 <p class="m-0 img_label">Notas</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/chats.svg" alt="" /></button>
                 <p class="m-0 img_label">Chat</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/calenders.svg" alt="" /></button>
                 <p class="m-0 img_label">Calendario</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/pages$.svg" alt="" /></button>
                 <p class="m-0 img_label">Pagos</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/archives.svg" alt="" /></button>
                 <p class="m-0 img_label">Archivos</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/qrcodeMi.svg" alt="" /></button>
                 <p class="m-0 img_label">Invitar con QR</p>
             </div>
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <button><img src="./assets/svgs/exitbtn.svg" alt="" /></button>
                 <p class="m-0 img_label">Salida</p>
             </div>
         </section>
     </div>
     <div class="container-fluid p-5 bg-patAccount">
         <div>
             <h1 class="text-center headingTXT"><span class="txtgreen">Hola</span>, Name!</h1>
         </div>
         <div class="d-flex justify-content-between">
             <img src="./assets/svgs/announcement.svg" alt="" />
             <button class="btn_settSide">
                 <img src="/assets/svgs/settings_sidebar.svg" height="40px" alt="settingsbtn" />
             </button>
         </div>
         <div class="pl-3 mt-2 patientDetails">
             <p class="font-italic">There is something you need to know</p>
             <p><b>News Notificaciones Reminder Advices</b></p>
             <p class="font-italic">pending verification</p>
             <p class="font-italic">Upcoming events</p>
             <p class="font-italic">pending payments</p>
             <p class="font-italic">pending evaluations</p>
         </div>
     </div>
     <!-- Patinet Account Details Ends -->
     <hr style="margin: 0px" />
     <!-- Patient Details tabs Starts -->
     <div class="container-fluid p-5 bg-patAccount">
         <div class="row">
             <div class="col-3">
                 <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                         aria-controls="v-pills-home" aria-selected="true">Cuenta
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                         aria-controls="v-pills-profile" aria-selected="false">Atenciones
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                         role="tab" aria-controls="v-pills-messages" aria-selected="false">Pagos y Cobros
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                         role="tab" aria-controls="v-pills-settings" aria-selected="false">Interacciones
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-micirclu"
                         role="tab" aria-controls="v-pills-settings" aria-selected="false">Mi Circulo
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-config"
                         role="tab" aria-controls="v-pills-settings" aria-selected="false">Configuración
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-centro"
                         role="tab" aria-controls="v-pills-settings" aria-selected="false">Centro de Ayuda
                         <img src="./assets/svgs/tab-inactivebtn.svg" height="10px" alt="" />
                     </a>
                 </div>
             </div>
             <div class="col-9">
                 <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab1img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Datos personales
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     aqui puedes redactar tu perfil y completar
                                     verificación de tu cuenta
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Solicitudes</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Seguridad</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Membresia</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Creditos</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Desactivar</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab2img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Calendario</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Programados</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Mis Archivos</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Descargar documentos
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Historial</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Evaluar Atención
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab3img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Historial</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Pendientes</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Impuestos</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Tarifas</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab4img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Historial de busqueda
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Chat</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">LLamadas</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Videoconsultas</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Servicio al Cliente
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Bloqueados</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-micirclu" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab5img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Favoritos</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Recomendaciones</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Mis contactos</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Invitar</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-config" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab6img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Notificaciones</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Personales</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Modalidad</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Mapa</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Cookies</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Globales</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-centro" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                         <img src="/assets/svgs/activetabbtn.svg" class="tab7img" height="20px" alt="" />
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">FAQ</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Historial</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around mb-5">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Solicitar llamada
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">
                                     Forma de contacto
                                 </h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                         <div class="d-flex justify-content-around">
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Ayuda urgente</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                             <div class="card-patient d-flex justify-content-center align-items-center flex-column">
                                 <h3 class="text-center text_shadow">Cambiar e-mail</h3>
                                 <p class="text-center pCardstxt">
                                     here will be some text
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Patient Details tabs Ends -->
 @endsection
