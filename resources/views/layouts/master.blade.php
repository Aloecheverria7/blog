<!DOCTYPE HTML>
<html lang="ES">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href ="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href = "{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<d>

<div id="all">
@yield('content')
    <!-- Top bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-md-block d-none">
                    <p>Contact us on +420 777 555 333 or hello@universal.com.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end justify-content-between">
                        <ul class="list-inline contact-info d-block d-md-none">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                        <ul class="social-custom list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar end-->
    <!-- Login Modal-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="get">
                        <div class="form-group">
                            <input id="email_modal" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password_modal" type="password" placeholder="password" class="form-control">
                        </div>
                        <p class="text-center">
                            <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Login modal end-->

    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
            <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo_pro5.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo_pro5.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
                <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <div id="navigation" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="btn btn-outline-primary"><br>inicio <a href="index.html" class="nav-link"><b class="caret"></b></a>

                        </li>
                        <li class="btn btn-outline-primary"><br>¿Como funciona?<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-6"><img src="img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>Shortcodes</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                                                <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                                                <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                                                <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                                                <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                                                <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                                                <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                                                <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>Header variations</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                                                <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                                                <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="btn btn-outline-primary"><br>¿eres profesional? <b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-6"><img src="img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>Portfolio</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                                <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>About</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                                <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                                <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                            </ul>
                                            <h5>Marketing</h5>
                                            <ul class="list-unstyled">
                                                <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- ========== FULL WIDTH MEGAMENU ==================-->
                        <li class="btn btn-outline-primary"><br>Consulta un presupuesto! <b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Home</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                                                <li class="nav-item"><a href="index.html" class="nav-link">Option 2: Application</a></li>
                                                <li class="nav-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                                                <li class="nav-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                                                <li class="nav-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                                            </ul>
                                            <h5>About</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                                <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                                <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                            </ul>
                                            <h5>Marketing</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Portfolio</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                                <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                                <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                                <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                            </ul>
                                            <h5>User pages</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="customer-register.html" class="nav-link">Register / login</a></li>
                                                <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                                                <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                                                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                                                <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shop</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                                                <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                                                <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                                                <li class="nav-item"><a href="shop-detail.html" class="nav-link">Product detail</a></li>
                                            </ul>
                                            <h5>Shop - order process</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="presupuesto.html" class="nav-link">Shopping cart</a></li>
                                                <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - step 1</a></li>
                                                <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - step 2</a></li>
                                                <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - step 3</a></li>
                                                <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - step 4</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Contact</h5><a href="contact.html" class="nav-link">Contact</a>
                                            <h5>Pages</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                                <li class="nav-item"><a href="text-left.html" class="nav-link">Text page - left sidebar</a></li>
                                                <li class="nav-item"><a href="text-full.html" class="nav-link">Text page - full width</a></li>
                                                <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                                <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                            </ul>
                                            <h5>Blog</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing big</a></li>
                                                <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog listing medium</a></li>
                                                <li class="nav-item"><a href="como-funciona.html" class="nav-link">Blog listing small</a></li>
                                                <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog Post</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                        <!-- ========== Contact dropdown ==================-->
                        <li class="btncontact btn-outline-primary"><br>contacto<a href="contact.html" class="nav-link"> <b class="caret"></b></a>

                        </li>
                        <!-- ========== Contact dropdown end ==================-->
                    </ul>
                </div>
                <div id="search" class="collapse clearfix">
                    <form role="search" class="navbar-form">
                        <div class="input-group">
                            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End-->

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
        <section class="bar bg-primary no-mb color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Estamos disponibles las 24/7  para reaccionar rápidamente ante sus emergencias.</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- *** JUMBOTRON END ***-->
    </section>
    <section class="bar bg-gray no-mb padding-big text-md-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Everything you need</h2>
                    <p class="lead mb-small">40+ prepared HTML templates</p>
                    <p class="mb-small">We have prepared literally <strong>everything you would possibly need building corporate, e-commerce or portfolio website. If you still miss something, let us know and we will try to include it in theme's future updates.</strong></p>
                    <p><a href="#" class="btn btn-template-main">Read more</a></p>
                </div>
                <div class="col-md-6 text-center"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section class="bar no-mb color-white padding-big text-md-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <h2 class="text-uppercase">Clean, valid and documented code & support</h2>
                    <p class="lead mb-small">We made our best to help you</p>
                    <p class="mb-small">Everything in this template is properly named and categorized. In case you don't find in the documentation answer to your question, our support is here to help!</p>
                    <p><a href="#" class="btn btn-template-outlined-white">Read more</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bar bg-gray no-mb padding-big text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Easy to customize</h2>
                    <p class="mb-small">We have made this template with focus on future client customization. You get <strong>40+ prepared HTML templates</strong>, many <strong>reusable components</strong> and <strong>LESS files</strong> for even easier template customization.</p>
                    <p><a href="#" class="btn btn-template-main">Read more</a></p>
                </div>
                <div class="col-md-6 text-center"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section id="who-we-are">
        <br>
        <div class="container">
            <div class="heading">
                <h2>¿Que hacemos?</h2>
                <h5>Somos un pequeño grupo de trabajadores. Hemos combinado la experiencia de más de 10 años. Podemos ayudarlo con problemas de diferentes ámbitos y cualquier otro servicio relacionado.</h5>
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
    </section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">


                <section id="service-we-provide">
                    <div class="container">
                        <div class="section-title">
                            <h1>Servicios que ofrecemos</h1>
                        </div><div class="row">
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div><div id="service-1" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los carpinteros utilizan sus habilidades para construir estructuras y accesorios, tales como ventanas, techos, pisos, paredes y puertas de madera y otras estructuras de madera. Usan una gran variedad de herramientas manuales y eléctricas para cortar, dar forma y ensamblar estructuras de madera.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div><div id="service-2" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los electricistas instalan y mantienen servicios eléctricos, tales como la iluminación, la electricidad y la calefacción. Trabajan en una amplia gama de edificios, incluyendo casas, oficinas, fábricas, hospitales y centrales eléctricas. Algunos electricistas reparan fallos en instalaciones domésticas y en empresas.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div><div id="service-3" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los fontaneros instalan, reparan y mantienen las tuberías de agua, y los sistemas de drenaje y calefacción central y en hogares y otros lugares. Ellos usan una variedad de herramientas para llevar a cabo su trabajo.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>





                                        </div><div id="service-4" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los ingenieros informáticos trabajan en el diseño, desarrollo y fabricación de equipamientos informáticos. Se especializan en áreas tales como las comunicaciones, los sistemas de control, la robótica, los microprocesadores o los dispositivos semiconductores.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div><div id="service-5" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los pintores y decoradores aplican pintura, revestimientos de paredes y otros materiales en el interior y exterior de los edificios. Pasan mucho tiempo preparando las superficies antes de decorarlas.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div><div id="service-6" style="display: none;">
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">Los techadores cubren tejados con materiales como tejas, pizarras o tela asfáltica. El trabajo también implica la medición de superficies de techo y el cálculo de la cantidad necesaria de materiales. Los techadores utilizan distintas herramientas para llevar a cabo su labor.</div>
                                            </div>
                                            <div id="drain">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="mbottom30"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12"><img class="alignnone size-full wp-image-401" src="./Inicio - Profesionales5estrellas_files/1-10.jpg" alt="1" width="279" height="165"></div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn"><img class="alignnone size-medium wp-image-402" src="./Inicio - Profesionales5estrellas_files/2-4.png" alt="2"></div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section></div></div></div></div>


<!-- GET IT-->
<div class="get-it">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center p-3">
                <h3>Do you want cool website like this one?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h4 class="h6">About Us</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <hr>
                <h4 class="h6">Join Our Monthly Newsletter</h4>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                        </div>
                    </div>
                </form>
                <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
                <h4 class="h6">Blog</h4>
                <ul class="list-unstyled footer-blog-list">
                    <li class="d-flex align-items-center">
                        <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                        </div>
                    </li>
                    <li class="d-flex align-items-center">
                        <div class="image"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
                        </div>
                    </li>
                </ul>
                <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
                <h4 class="h6">Contact</h4>
                <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
                <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
                <ul class="list-inline photo-stream">
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center-md">
                    <p>&copy; 2018. Your company / name goes here</p>
                </div>
                <div class="col-lg-8 text-right text-center-md">
                    <p>Template design by <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>
