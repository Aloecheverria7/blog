@extends('layouts.app')

@yield('title')

@section('content')
<section class="no-mb relative-positioned">
    <!--
    *** JUMBOTRON ***
    _________________________________________________________
    -->
    <div style="background: url('img/1-1.jpg') center center repeat; background-size: cover;" class="jumbotron relative-positioned color-white text-md-center">
        <div class="dark-mask mask-primary"></div>
        <div class="container">
            <div class="row mb-small">
                <img src="img/1-9.png" alt="" class="img-fluid">
            </div>
            <div class="row">
                <div class="col-md-6 mb-small">
                    <br>
                    <h3 class="text-left ">Profesionales5Estrellas es la plataforma de referencia en España que pone en contacto a clientes que necesitan un servicio local con profesionales capacitados.</h3>
                </div>
                <div class="col-md-6 text-center-sm">
                    <br>
                    <br>
                    <p class="text-uppercase text-bold">Consulte su presupuesto.<br>gratis.<br></p>
                    <p><a href="#packages" class="scroll-to btn btn-template-outlined-white">Solicite su presupuesto</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- *** JUMBOTRON END ***-->
    </section>
    <section class="bar no-mb color-white padding-big text-md-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Estamos disponibles las 24/7  para reaccionar rápidamente ante sus emergencias.</h3>
                </div>
            </div>
        </div>
</section>
<section class="bar bg-gray no-mb padding-big text-md-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase">¿Que hacemos?</h2>
                <p class="mb-small"><strong>Somos un pequeño grupo de trabajadores. Hemos combinado la experiencia de más de 10 años. Podemos ayudarlo con problemas de diferentes ámbitos y cualquier otro servicio relacionado.</strong></p>
                
            </div>
            <div class="col-md-6 text-center"><img src="{{asset('img/2-7.jpg')}}" alt="" class="img-fluid"></div>
        </div>
    </div>
</section>

<section id="who-we-are">
    <br>
    <div class="container">
        <div class="heading">
            <h2>Nuestros profesionales</h2>
            <p>El profesional que necesitas a solo un click.</p>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6">
                <div class="box-image-text">
                    <div class="image"><img src="img/1-2.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                    </div>
                    <div class="content">
                        <h4><a href="blog-post.html">Servicio de fontaneria</a></h4>
                        <p>Servicios de fontanería para el hogar, oficina o local. Todo tipo de trabajos de fontanería general de manera ágil y eficiente</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box-image-text">
                    <div class="image"><img src="img/1-3.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                    </div>
                    <div class="content">
                        <h4><a href="blog-post.html">Servicios de Carpinteria</a></h4>
                        <p>Construimos, levantamos, instalamos y reparamos estructuras mediante el uso de herramientas de carpintería.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box-image-text">
                    <div class="image"><img src="img/1-4.jpg" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                    </div>
                    <div class="content">
                        <h4><a href="blog-post.html">Servicio de pintura</a></h4>
                        <p>Remodelamos en todas las superficies interiores o exteriores mediante la aplicación de pintura.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

  <section id="service-we-provide">
                <div class="container">
                    <div class="section-title">
                        <h1>Servicios que ofrecemos</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 wow slideInLeft">
                            <div class="service-tab-title">
                                <ul class="clearfix">
                                    <li class="active" data-tab-name="service-0">ANTENISTA</li>
                                    <li class="" data-tab-name="service-1">CARPINTERO</li>
                                    <li class="" data-tab-name="service-2">ELECTRICISTAS</li>
                                    <li class="" data-tab-name="service-3">FONTANEROS</li>
                                    <li class="" data-tab-name="service-4">INFORMATICOS</li>
                                    <li class="" data-tab-name="service-5">PINTORES</li>
                                    <li class="" data-tab-name="service-6">TEJADOS Y FACHADAS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 wow slideInRight">
                            <div class="row">
                                <div class="service-tab-content clearfix">
                                    <div id="service-0" style="display: block;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Un técnico de instalación de antenas de televisión se encarga de la instalación y de antenas de televisión y antenas parabólicas y se asegura de que proporcionen señales para casas o edificios como hoteles, apartamentos, oficinas y hospitales.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <p><img class="alignnone wp-image-1300 size-full" src="img/194.jpg" alt="" width="279" height="165"></p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div><div id="service-1" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los carpinteros utilizan sus habilidades para construir estructuras y accesorios, tales como ventanas, techos, pisos, paredes y puertas de madera y otras estructuras de madera. Usan una gran variedad de herramientas manuales y eléctricas para cortar, dar forma y ensamblar estructuras de madera.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div><div id="service-2" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los electricistas instalan y mantienen servicios eléctricos, tales como la iluminación, la electricidad y la calefacción. Trabajan en una amplia gama de edificios, incluyendo casas, oficinas, fábricas, hospitales y centrales eléctricas. Algunos electricistas reparan fallos en instalaciones domésticas y en empresas.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div><div id="service-3" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los fontaneros instalan, reparan y mantienen las tuberías de agua, y los sistemas de drenaje y calefacción central y en hogares y otros lugares. Ellos usan una variedad de herramientas para llevar a cabo su trabajo.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Rеѕultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>





                                    </div><div id="service-4" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los ingenieros informáticos trabajan en el diseño, desarrollo y fabricación de equipamientos informáticos. Se especializan en áreas tales como las comunicaciones, los sistemas de control, la robótica, los microprocesadores o los dispositivos semiconductores.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div><div id="service-5" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los pintores y decoradores aplican pintura, revestimientos de paredes y otros materiales en el interior y exterior de los edificios. Pasan mucho tiempo preparando las superficies antes de decorarlas.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div><div id="service-6" style="display: none;">
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">Los techadores cubren tejados con materiales como tejas, pizarras o tela asfáltica. El trabajo también implica la medición de superficies de techo y el cálculo de la cantidad necesaria de materiales. Los techadores utilizan distintas herramientas para llevar a cabo su labor.</div>
                                        </div>
                                        <div id="drain">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <div class="mbottom30"></div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="{{asset('img/1-10.jpg')}}" alt="1" width="279" height="165"></div>
                                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                                        <ul>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Flexibilidad</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Competencia</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Resultados</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Ahorre Costos</li>
                                                            <li><i class="fa fa-arrow-circle-o-right"></i>Solución Rápida</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="{{asset('img/2-4.png')}}" alt="2"></div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

  <section id="project-version-one" class="our-projects " style="background:url(http://profesionales5estrellas.com/wp-content/uploads/2016/01/bg-1.jpg) repeat scroll !important"><div class="container">
  <div class="section-title">
    <h1>Nuestros proyectos</h1>
  </div>
  </section>
  </div>
  </div>
  </div>
  </div>
 

  <section id="our-specialist" class="" style="background:">
  <div class="container">
      <div class="section-title">
        <h1>Nuestros especialistas</h1>
      </div><div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0">
              <div class="single-member hvr-bounce-to-bottom">
      <img src="{{asset('img/1-2.png')}}" >
      <div class="info hvr-bounce-to-top">

        <h2>Ricardo Gonzalez</h2>
        <p class="position">Antenista</p>
      </div>
              </div>
          </div>
  <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0">
              <div class="single-member hvr-bounce-to-bottom">
      <img src="{{asset('img/2-6.png')}}" >
      <div class="info hvr-bounce-to-top">

        <h2>Carlos Rodriguez</h2>
        <p class="position">Fontanero</p>
      </div>
              </div>
          </div>
  <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0">
              <div class="single-member hvr-bounce-to-bottom">
      <img src="{{asset('img/3-2.png')}}" >
      <div class="info hvr-bounce-to-top">

        <h2>Jose Rodriguez</h2>
        <p class="position">Electricista</p>
      </div>
              </div>
          </div>
  <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0">
              <div class="single-member hvr-bounce-to-bottom">
      <img src="{{asset('img/4-2.png')}}" >
      <div class="info hvr-bounce-to-top">

        <h2>Victor Aguilar</h2>
        <p class="position">Informático</p>
      </div>
      </div>
          </div>
           </div>
           </div>
           </section>


      <section id="testimonials" style="background:">
        <div class="container">
            <div class="section-title">
              <h1>Lo que dicen nuestros clientes</h1>
            </div>
          <div class="row"><div class="col-lg-4 col-md-4 col-sm-6"> <div class="single-testimonial ">
      <div class="profile-info pull-left">
        <img src="{{asset('img/5-4.jpg')}}">
        <h2>Ana Diaz</h2>
      </div>

      <div class="content pull-left">
        <p><i class="fa fa-quote-left"></i>  He estado usando los servicios de profesionales5estrellas durante mucho tiempo, no podría ser más feliz. Siempre a tiempo y servicios rentables.</p>
      </div>
    </div>
  </div><div class="col-lg-4 col-md-4 col-sm-6">    <div class="single-testimonial ">
      <div class="profile-info pull-left">
        <img src="{{asset('img/2-9.jpg')}}" >
        <h2>Alex Gonzalez</h2>
      </div>

      <div class="content pull-left">
        <p><i class="fa fa-quote-left"></i>  Los llamé por un problema y, para mi sorpresa, aparecieron dentro de las 2 horas y solucionaron rápidamente.</p>
      </div>
    </div>
  </div><div class="col-lg-4 col-md-4 col-sm-6">    <div class="single-testimonial ">
      <div class="profile-info pull-left">
        <img src="{{asset('img/5-3.jpg')}}">
        <h2>Nina J.</h2>
      </div>

      <div class="content pull-left">
        <p><i class="fa fa-quote-left"></i>  Muy profesional y atento. Además de aseado y rápido. Volveré a solicitar sus servicios sin ninguna duda.</p>
      </div>
      </div>
     </div></div>
        </div>
      </section>


  <section id="emergency" style="background:url(http://profesionales5estrellas.com/wp-content/uploads/2016/01/bg.png) no-repeat scroll right top / cover !important">
     <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <img class="wow bounceInLeft" src="{{asset('img/404-man.png')}}" alt="">
            </div>
        <div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9">
          <h2><b>Encuentre su profesional </b>Con Nosotros</h2>
          <p class="em_sub">Si tiene una emergencia, simplemente consulte su presupuesto.</p>
          <p class="phone-contact"><b>+34 610341742</b> O <a href="{{url('/contacto')}}" class="hvr-bounce-to-right">Contáctenos</a></p>
        </div>
      </div>
      </div>
    </section>

  
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>


@stop
