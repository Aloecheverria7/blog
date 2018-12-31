@extends('layouts.app')

@yield('title')

@section('content')
<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">

            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog Listing: Small</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- MAIN CONTENT BLOCK -->
      <SECTION id="blog-post" class="mainblock">
      <div class="container">
        <div class="heading mb-4">
        <h2>COMO FUNCIONA</h2>
      </div>
      </div>
      <div class="container">
        <div class="img-wrap pull-left fadeIn">
          <img src="img/2-7.jpg" alt="icon">
        </div>


        <div class="row">
          <div class="col">
            <div class="box-simple">
              <div class="icon-outlined"><img src="img/3-4.png"></div>
              <h4>SELECCIONA EL SERVICIO</h4>
              <p> Dinos el profesional que buscas<br />
                Rellena nuestro formulario y notificamos a los profesionales de tu zona.</p>
            </div>
          </div>
          <div class="col">
            <div class="box-simple">
              <div class="icon-outlined"><img src="img/3-6.png"></i></div>
              <h4>LOS PROFESIONALES TE CONTACTAN</h4>
              <p>En el plazo pocas horas, hasta 4 profesionales te contactarán para darte precio y así podrás elegir el que prefieras.    </p>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <div class="box-simple">
              <div class="icon-outlined"><img src="img/3-5.png"></i></div>
              <h4>ELIGE AL MEJOR PROFESIONAL</h4>
              <p>Puedes ver las opiniones de clientes para cada profesional que te contacte. Y al finalizar el trabajo, podrás dar tu opinión.</p>
            </div>
          </div>
          <div class="col">
            <div class="box-simple">
            <div class="icon-outlined"><img src="img/3-7.png"></i></div>
            <h4>24/7 DISPONIBILIDAD</h4>
            <p> Nosotros te ayudamos a encontrar profesionales de confianza para cualquier servicio que necesites, como reparaciones del hogar, etc.</p>
          </div>
          </div>
        </div>
        </div>
</section>


@stop
