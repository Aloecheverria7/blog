@extends('layouts.app')

@yield('title')

@section('content')
<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
     <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
         <div class="col-md-7">
           <h1 class="h2">Contact</h1>
         </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
             <li class="breadcrumb-item active">Contact</li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <div id="content">

     <div id="contact" class="container">
       <div class="row">
         <div class="col-lg-8">
           <section class="bar">
             <div class="heading">
               <h2>estamos para ayudarte</h2>
             </div>
             <p class="lead">¿Tiene alguna pregunta o comentario, no dude en contactar con nosotros. También puede llamarnos. Por favor, encuentre toda la información de contacto en el panel derecho. Intentamos comunicarnos con usted lo antes posible.</p>
             <p class="text-sm">Please feel free to contact us, our customer service center is working for you 24/7.</p>
             <div class="heading">
               <h3>Formulario de contacto</h3>
             </div>
             <form>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="firstname">Firstname</label>
                     <input id="firstname" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <label for="lastname">Lastname</label>
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
                     <label for="subject">Subject</label>
                     <input id="subject" type="text" class="form-control">
                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="message">Message</label>
                     <textarea id="message" class="form-control"></textarea>
                   </div>
                 </div>
                 <div class="col-md-12 text-center">
                   <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Send message</button>
                 </div>
               </div>
             </form>
           </section>
         </div>

         <div class="col-lg-4">
         <section class="bar mb-0">
         <div class="col-lg-4"><ul>
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
         </div>
         </section>
       </div>
       </div>
     </div>
   </div>

@stop
