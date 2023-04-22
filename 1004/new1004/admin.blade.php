<!DOCTYPE html>
<html lang="es" class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>{{$general->titulo}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">



        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('themes/1004/vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/vendor/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>


        <link href="{{asset('themes/1004/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('themes/1004/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>


        <link href="{{asset('themes/1004/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/css/style_2.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/css/assets/owl.carousel.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/css/styles-sections-template.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('themes/1004/css/configuraciones-plantilla-1004-DNA.css')}}" rel="stylesheet" type="text/css"/>
        {{-- LLAMANDO ESTILOS DE ICONOS Dpatzi --}}
        <link href="{{asset('themes/1004/css/socialDAB.css')}}" rel="stylesheet" type="text/css" rel="stylesheet"/>
        {{-- LLAMANDO ESTILOS DE ICONOS Dpatzi --}}

        <!--<link href="{{asset('css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/fuentes.css')}}" rel="stylesheet">-->


        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css" rel="stylesheet')}}">
        <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet"> 

        <!-- Main Stylesheet File -->
        <link href="{{asset('css-inmobiliariaRIALSA/global/global.css')}}" rel="stylesheet">
        <link href="{{asset('css-inmobiliariaRIALSA/style.css')}}" rel="stylesheet">
        <link href="{{asset('css-inmobiliariaRIALSA/styles.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css-1-inmobiliariaRIALSA/style.css')}}">



        <link rel="shortcut icon" href="{{asset('general/'.$general->favicon)}}" type="image/x-icon">
    </head>



    <body>


        <header class="header navbar-fixed-top">

            <nav class="navbar" role="navigation">
                <div class="container">

                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>


                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="{{asset('general/'.$general->logo)}}" alt="">
                                <img class="logo-img logo-img-active" src="{{asset('general/'.$general->logodos)}}" alt="">
                            </a>
                        </div>

                    </div>


                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-right scroll-to">
        
                        <li class="dropdown">
                            <a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Trámites notariales <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="nav-item-child nav-item-hover" href="typography.html">Poderes notariales</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Testamentos</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Donaciones</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Compra Ventas</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Juicios sucesorios intestamentarios y testamentarios</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Actas aclaratorias</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Permisos para menor</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Disolución de regímenes matrimoniales</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Actas constitutivas</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Actas de asamblea</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Certificación de documentos</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Ratificación de contratos</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Cancelación de hipotecas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Trámites fiscales <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="nav-item-child nav-item-hover" href="typography.html">Recuperación de intereses <b>INFONAVIT</b>/<b>FOVISSSTE</b></a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Trámite de constancia de situación fiscal</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Trámites hipotecarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Gestión de créditos BANCARIOS</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Gestión de créditos Pymes</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Corrección de RFC</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Trámites jurídicos <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Pensiones <b>IMSS</b></a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Amparos</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Divorcios</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Pensión alimenticia</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Otros Servicios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="nav-item-child nav-item-hover" href="post-single.html">Vales de ecotecnologias</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Planos</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Propiedades</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Remodelación</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Deslindes</a></li>
                                  <li><a class="nav-item-child nav-item-hover" href="typography.html">Construcción en terreno propio <br> (INFONAVIT, FOVISSSTE)</a></li>
            </div>
                            </ul>
                        </li>

                    </ul>
                        </div>
                    </div>

                </div>
            </nav>

        </header>



        @yield('1004')



        <footer class="footer" style="background: {{$footer->background}} !important">

            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row row-lg">
                        <div class="col-sm-2 sm-margin-b-50">

                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#"><strong>Horarios:</strong></a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#">{{$footer->horarios}}</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#"><strong>Numero de Contacto:</strong></a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#">{{$footer->telefono}}</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#"><strong>Correo Electronico:</strong></a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#">{{$footer->correo}}</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#"><strong>Direccion:</strong></a></li>
                                <li class="footer-list-item"><a class="footer-list-link" style="color: {{$footer->color}};" href="#">{{$footer->direccion}}</a></li>
                            </ul>

                        </div>
                        <div class="col-sm-4 sm-margin-b-30">

                            <ul class="list-social">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                    </div>
                                    <div class="col-sm-12 col-xs-4">
                                        <li class="list-social-item"><a class="list-social-link" href="{{$footer->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    </div>
                                </div>
                            </ul>

                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                    </div>

                </div>
            </div>



            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0">{{$footer->cr}}</p>
                    </div>
                </div>

            </div>

        </footer>



        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>



        <script src="{{asset('themes/1004/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/jquery-migrate.min.js')}}" ></script>
        <script src="{{asset('lib/popper/popper.min.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/bootstrap/js/bootstrap.min.js')}}"></script>


        <script src="{{asset('themes/1004/vendor/jquery.easing.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/jquery.back-to-top.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/jquery.smooth-scroll.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/jquery.wow.min.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/swiper/js/swiper.jquery.min.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/masonry/jquery.masonry.pkgd.min.js')}}"></script>
        <script src="{{asset('themes/1004/vendor/masonry/imagesloaded.pkgd.min.js')}}"></script>


        <script src="{{asset('themes/1004/js/layout.min.js')}}"></script>
        <script src="{{asset('themes/1004/js/socialDAB.js')}}"></script>
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('lib/popper/popper.min.js')}}"></script>
        <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
        <!-- Contact Form JavaScript File -->
        <script src="{{asset('contactform/contactform.js')}}"></script>
        <script src="{{asset('jsc/main.js')}}"></script>
        {{-- <script src="{{asset('themes/1004/js/scripts-sections-template.js')}}"></script> --}}
        <script src="{{asset('themes/1004/js/components/wow.min.js')}}"></script>
        <script src="{{asset('themes/1004/js/components/swiper.min.js')}}"></script>
        <script src="{{asset('themes/1004/js/components/masonry.min.js')}}"></script>
        <script src="{{asset('themes/1004/js/owlcarousel/owl.carousel.min.js')}}"></script>
        <script async src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <!--<script src="{{asset('js/all.js')}}"></script>-->

    </body>

</html>
