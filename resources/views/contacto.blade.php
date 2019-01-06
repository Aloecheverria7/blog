@extends('layouts.app')

@yield('title')

@section('content')
  <section id="page-title" style="
      background-image: url(https://profesionales5estrellas.com/wp-content/themes/plumberx/img/resources/page-title-bg.jpg);      ">
    <div class="overlay-clr" style=""></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <div class="title pull-left"><h1>Contáctenos</h1></div>       </div>
      </div>
    </div>
  </section>  

   <div id="content">

     <div id="contact" class="container">
       <div class="row">
         <div class="col-lg-8">
           <section class="bar">
             <div class="heading">
               <h2>estamos para ayudarte</h2>
             </div>
             <p class="lead">¿Tiene alguna pregunta o comentario, no dude en contactar con nosotros. También puede llamarnos. Por favor, encuentre toda la información de contacto en el panel derecho. Intentamos comunicarnos con usted lo antes posible.</p>
             <p class="text-sm">Por favor, no dude en contactarnos, nuestro centro de servicio al cliente está trabajando para usted 24/7.</p>
             <div class="heading">
               <h3>Formulario de contacto</h3>
             </div>
             <form>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="firstname">Nombres</label>
                     <input id="firstname" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="lastname">Apellidos</label>
                     <input id="lastname" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="email">Email</label>
                     <input id="email" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="subject">Asunto</label>
                     <input id="subject" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="message">Mensaje</label>
                     <textarea id="message" class="form-control"></textarea>
                   </div>
                 </div>
                 <div class="col-md-12 text-center">
                   <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>
                 </div>
               </div>
             </form>
           </section>
         </div>

         <div class="col-lg-4">
         <section class="bar mb-0">
         <ul>
           <li class="clearfix">
             <img src="img/3-0.png" alt="">
             <div class="content">
               <h4>Dirección</h4>
               <p>España</p>
             </div>
           </li>
           <li class="clearfix">
             <img src="img/3-1.png" alt="">
             <div class="content">
               <h4>Email</h4>
               <p>gruposerviluz@gmail.com</p>
             </div>
           </li>
           <li class="clearfix">
             <img src="img/3-3.png" alt="">
             <div class="content">
               <h4>Teléfono</h4>
               <p>+34  610341742</p>
             </div>
           </li></ul>
         
         </section>
       </div>
       </div>
     </div>
   </div>

@stop
