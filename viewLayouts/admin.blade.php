<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>GROW WITH</title>


    <link href="{{ asset('css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-galeria.css') }}" rel="stylesheet"> <!-- ESTILO DE GALERIA -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cambio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mensajes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider1-carlos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider2-carlos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider3-DAN.css') }}" rel="stylesheet">

    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <link href="{{ asset('cs-fac/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles_card_equipo.css') }}">
    <link href="{{ asset('css/entradaOsc.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('css/estilos-cz.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/menu/css/menuFRA.css') }}">

    <style>
        .grow_logo {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 25px;
            margin-left: 70px;
            text-transform: uppercase;
            color: transparent;
            background: linear-gradient(to left, #1e5799, #2ce0bf, #76dd2c, #dba62b, #e02cbf, #1e5799);
            background-size: 1000px 100%;
            animation: bg 30s linear infinite;
            background-clip: text;
            -webkit-background-clip: text;
        }

        .boxContainerr {
            width: 57%;
            left: -5%;
        }

        @media(max-width:1100px) {
            .boxContainerr {
                width: 55%;
                left: -6%;
            }
        }

        @media(max-width:992px) {
            .image_cuenta {
                left: 35px !important;
            }

            .action_cuenta {
                right: 60px !important;
            }

            .nombre_cuenta {
                right: 100px !important;
            }

            .boxContainerr {
                width: 50%;
                left: -5%;
            }
        }

        @media(max-width:900px) {
            .grow_logo {
                font-size: 20px;
            }

            .boxContainerr {
                width: 45%;
                left: -6.5%;
            }

        }

        @media(max-width:800px) {

            .grow_logo {
                font-size: 18px;
            }

        }

        @media(max-width:740px) {
            .image_cuenta {
                left: 35px !important;
            }

            .action_cuenta {
                right: 60px !important;
            }

            .nombre_cuenta {
                right: 100px !important;
            }

            .boxContainerr {
                width: 50%;
                left: -5%;
            }
        }


        a {
            list-style: none;
            text-decoration: none;
        }

        @keyframes bg {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: 10000px;
            }
        }

        .action_cuenta {
            position: fixed;
            top: 10px;
            right: 80px;
        }

        .action_cuenta .profile {
            position: relative;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer
        }

        .action_cuenta .profile img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .action_cuenta .menu_cuenta {
            position: absolute;
            top: 80px;
            right: -10px;
            padding: 10px 20px;
            background: #fff;
            width: 200px;
            box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: 0.5s;
            visibility: hidden;
            opacity: 0;
            box-shadow: 4px 7px 13px #000;

        }

        .action_cuenta .menu_cuenta.activo {
            visibility: visible;
            opacity: 1;
        }

        .action_cuenta .menu_cuenta::before {
            content: '';
            position: absolute;
            top: -5px;
            right: 28px;
            width: 20px;
            height: 20px;
            background: #fff;
            transform: rotate(45deg);
        }

        .action_cuenta .menu_cuenta h3 {
            width: 100%;
            text-align: center;
            font-size: 18px;
            padding: 20px 0;
            font-weight: 500;
            color: #555;
            line-height: 1.2em;
        }

        .action_cuenta .menu_cuenta h3 span {
            font-size: 14px;
            color: #cecece;
            font-weight: 400
        }

        .action_cuenta .menu_cuenta ul li {
            list-style: none;
            padding: 10px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            direction: flex;
            align-items: center;
        }

        .action_cuenta .menu_cuenta ul li ion-icon {
            max-width: 20px;
            margin-right: 10px;
            opacity: 0.5;
            transition: 0.5s;
        }

        .action_cuenta .menu_cuenta ul li:hover ion-icon {
            opacity: 1;
        }

        .action_cuenta .menu_cuenta ul li a {
            display: inline-block;
            text-decoration: none;
            color: #555;
            font-weight: 500;
        }

        .action_cuenta .menu_cuenta ul li a:hover {
            color: #ffccbf;
        }

        .nombre_cuenta {
            position: relative;
            right: 140px;
            top: 8px;
            color: #fff;
            font-size: 20px;
        }

        form .nav__name {
            border: none;
            width: 190px;
            display: flex;
            background: transparent;
            color: #fff;
            justify-content: left;
            /* margin-left: -10px; */
            position: relative;
            margin-top: -35px;
            margin-left: 15px;
            font-size: 18px;
        }

        .boton_menu_cuenta {
            color: #ffff;
            position: relative;
            top: -3px;
            right: 55px;
            font-weight: 500;
            cursor: pointer;
        }

        .image_cuenta {
            position: relative;
            filter: invert(1);
            width: 20px;
            left: 20px;
        }

        .col-style {
            background-color: #0c5df4;
            width: 170px;
            margin-left: -12px;
            z-index: 999;
            border-radius: 0px 0px 10px 10px;
            transition: .5s;
        }

        .btn-link .boton2 {
            margin-left: 48px;
            line-height: 1em;
        }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done"
    style="font-family: <?php echo isset($styleFont) ? $styleFont : ' '; ?>;">

    {{-- Spinner del dashboard --}}
    <div id="spinner" class="spinner__container show-spinner">
        <div class="spinner">
            <div class="spinner__rect1"></div>
            <div class="spinner__rect2"></div>
            <div class="spinner__rect3"></div>
            <div class="spinner__rect4"></div>
            <div class="spinner__rect5"></div>
        </div>
    </div>

    {{-- Pantalla de bienvenida --}}
    <div id="welcome-app" class="wrapper-start-app">
        <div class="container-start-app">
            <div class="name-start-app">
                <span>¡</span>
                <span>H</span>
                <span>o</span>
                <span>l</span>
                <span>a</span>
                <span>!</span>

            </div>
            <div class="line-start-app"></div>
            <div class="sub-start-app">
                <p>Bienvenido</p>
            </div>
        </div>
    </div>

    <script>
        const visitValue = localStorage.getItem('is-valid-visit');
        if (visitValue && visitValue == 'true') {
            document.querySelector('#welcome-app').style.display = 'none';
        } else {
            document.querySelector('#spinner').style.display = 'none';
        }
    </script>

    <div class="pace  pace-inactive pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <?php
    $idbusca = auth()->user()->id;
    $tpaginas = DB::table('pagina')
        ->select('id')
        ->where('iduser', '=', $idbusca)
        ->first();
    if (isset($tpaginas->id)) {
        $mipagina = $tpaginas->id;
    } else {
        $mipagina = 0;
    }
    
    ?>

    <div>
        <div class="nueva-l-navbar" id="navbarr" style="display: none;">
            <nav class="navv">
                <div>

                    <div class="sombrazul">

                        <div class="nav__list">

                            <div class="nav__brand">
                            </div>

                            <a href="#" class="nav__link active" id="menu-expandir" style="font-size: 20px;">
                                <ion-icon name="menu-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">GROW WITH!</span>
                            </a>


                            <a href="{{ route('dashboard') }}" class="nav__link"
                                style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Inico</span>
                            </a>

                            @if (auth::check())
                                @if (auth()->user()->role == 'ADMIN')
                                    <a href="{{ route('index.plantilla') }}" class="nav__link"
                                        style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                        <span class="nav__name">Plantillas</span>
                                    </a>

                                    <a href="{{ route('index.usuarios') }}" class="nav__link"
                                        style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                        <span class="nav__name">Usuarios</span>
                                    </a>
                                @endif
                            @endif

                            @if (auth::check())

                                <a href="{{ route('index.pagina') }}" class="nav__link"
                                    style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                    <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                                    <span class="nav__name">Páginas</span>
                                </a>
                                @if ($mipagina > 0)



                                    @if (auth()->user()->current_page > 0)
                                        <a href="{{ route('index.contacto') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Mensajes</span>
                                        </a>

                                        <div href="#" class="nav__link collapse"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Ajustes</span>

                                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>
                                            <ul class="collapse__menu col-style">
                                                <a href="{{ route('index.menu') }}"
                                                    class="collapse__sublink">Menu</a>
                                                <a href="{{ route('index.general') }}"
                                                    class="collapse__sublink">Aspectos Generales</a>
                                                <a href="{{ route('index.footer') }}"
                                                    class="collapse__sublink">Footer</a>
                                                <a href="{{ route('index.fondo') }}"
                                                    class="collapse__sublink">Fondos</a>
                                            </ul>
                                        </div>

                                        <p class="nav__title">
                                            {{-- Espacio en blanco --}}
                                            <span class="nav__name">
                                                <ion-icon name="chevron-down-outline"></ion-icon>
                                            </span>
                                        </p>

                                        <a href="{{ route('index.entrada') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Entradas</span>
                                        </a>

                                        <a href="{{ route('index.equipo') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Equipo</span>
                                        </a>

                                        <a href="{{ route('index.enlace') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Enlace</span>
                                        </a>

                                        <a href="{{ route('index.galeria') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Galeria</span>
                                        </a>

                                        <a href="{{ route('index.servicio') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Servicio</span>
                                        </a>

                                        <a href="{{ route('index.seccion_uno') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Misión</span>
                                        </a>

                                        <a href="{{ route('index.seccion_dos') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Visión</span>
                                        </a>

                                        <a href="{{ route('index.slider') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Sliders</span>
                                        </a>

                                        <a href="{{ route('index.blog') }}" class="nav__link"
                                            style="color: <?php echo isset($styleColorNav) ? $styleColorNav : ' '; ?>;">
                                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                                            <span class="nav__name">Blog</span>
                                        </a>
                        </div>
                    </div>
                    @endif

                    <a href="" class="nav__link" style="background-color:#ff000096">
                        <!-- " -->
                        <form method="POST" action="{{ route('logout') }}">
                            {{ csrf_field() }}
                            <button class="nav__name btn btn-link">
                                <span style="font-size: 1em ;" class="boton2">Salir</span></button>
                        </form>

                    </a>
                    @endif
                    @endif
            </nav>
        </div>
    </div>

    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <img src="{{ asset('img/menu.png') }}" class="img__icon" />
                    <span class="nav__logo-name">Grow With</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Profile</h3>

                        <a href="#" class="nav__link active">
                            <i class="fa fa-home nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Home</span>
                        </a>
                        @if (auth::check())
                            @if (auth()->user()->role == 'ADMIN')
                                <a href="{{ route('index.plantilla') }}" class="nav__link active">
                                    <i class="fa fa-home nav__icon" aria-hidden="true"></i>
                                    <span class="nav__name">Plantillas</span>
                                </a>

                                <a href="{{ route('index.usuarios') }}" class="nav__link active">
                                    <i class="fa fa-home nav__icon" aria-hidden="true"></i>
                                    <span class="nav__name">Usuarios</span>
                                </a>
                            @endif
                        @endif

                        @if (auth::check())

                            <a href="{{ route('index.pagina') }}" class="nav__link">
                                <i class="fa fa-cogs nav__icon" aria-hidden="true"></i>
                                <span class="nav__name">Páginas</span>
                            </a>

                            @if ($mipagina > 0)

                                @if (auth()->user()->current_page > 0)
                                    <a href="{{ route('index.contacto') }}" class="nav__link">
                                        <i class="fa fa-cogs nav__icon" aria-hidden="true"></i>
                                        <span class="nav__name">Mensaje</span>
                                    </a>

                                    <div class="nav__dropdown">
                                        <a href="#" class="nav__link">
                                            <i class="fa fa-home nav__icon" aria-hidden="true"></i>
                                            <span class="nav__name">Ajustes</span>
                                            <i class="fa fa-angle-down nav__icon nav__dropdown-icon"
                                                aria-hidden="true"></i>
                                        </a>

                                        <div class="nav__dropdown-collapse">
                                            <div class="nav__dropdown-content">
                                                <a href="{{ route('index.menu') }}"
                                                    class="nav__dropdown-item">Menú</a>
                                                <a href="{{ route('index.general') }}"
                                                    class="nav__dropdown-item">Aspectos Generales</a>
                                                <a href="{{ route('index.footer') }}" class="nav__dropdown-item">Pie
                                                    de página</a>
                                                <a href="{{ route('index.fondo') }}"
                                                    class="nav__dropdown-item">Fondo</a>
                                            </div>
                                        </div>
                                    </div>

                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <a href="{{ route('index.entrada') }}" class="nav__link">
                            <i class="fa fa-comments nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Entradas</span>
                        </a>
                        <a href="{{ route('index.equipo') }}" class="nav__link">
                            <i class="fa fa-users nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Equipo</span>
                        </a>
                        <a href="{{ route('index.enlace') }}" class="nav__link">
                            <i class="fa fa-cogs nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Enlace</span>
                        </a>
                        <a href="{{ route('index.galeria') }}" class="nav__link">
                            <i class="fa fa-calendar nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Galería</span>
                        </a>
                        <a href="{{ route('index.propiedad') }}" class="nav__link">
                            <i class="fa fa-calendar nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Propiedades</span>
                        </a>
                        <a href="{{ route('index.servicio') }}" class="nav__link">
                            <i class="fa fa-calendar nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Servicio</span>
                        </a>
                        <a href="{{ route('index.seccion_uno') }}" class="nav__link">
                            <i class="fa fa-clock nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Misión</span>
                        </a>
                        <a href="{{ route('index.seccion_dos') }}" class="nav__link">
                            <i class="fa fa-clock nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Visión</span>
                        </a>
                        <a href="{{ route('index.slider') }}" class="nav__link">
                            <i class="fa fa-file-image nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Sliders</span>
                        </a>
                        <a href="{{ route('index.blog') }}" class="nav__link">
                            <i class="fa fa-comments nav__icon" aria-hidden="true"></i>
                            <span class="nav__name">Blog</span>
                        </a>

                    </div>
                </div>
            </div>
            @endif

            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button href="#" class="nav__link nav__logout">
                    <i class="fa fa-arrow-circle-left nav__icon" aria-hidden="true"></i>
                    <span class="nav__name">Log Out</span>
                </button>
            </form>
            @endif
            @endif
        </nav>
    </div>

    <div class="dh-nav" id="dh-navbar" style="display: none">
        <nav class="dh-nav__container">
            <div>
                <a href="#" class="dh-nav__link dh-nav__logo">
                    <ion-icon name="disc-outline" class="nav__icon"></ion-icon>
                    <span class="dh-nav__logo-name">Grow With</span>
                </a>
                <div class="dh-nav__list">
                    <div class="dh-nav__items">
                        <h3 class="dh-nav__subtitle">Perfil</h3>
                        <a href="{{ route('dashboard') }}" class="dh-nav__link dh-active">
                            <ion-icon name="home-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Inicio</span>
                        </a>
                        <a href="{{ route('index.pagina') }}" class="dh-nav__link">
                            <ion-icon name="bookmarks-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Páginas</span>
                        </a>
                        <a href="{{ route('index.contacto') }}" class="dh-nav__link">
                            <ion-icon name="chatbubbles-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Mensajes</span>
                        </a>
                        <div class="dh-nav__dropdown">
                            <a href="#" class="dh-nav__link">
                                <ion-icon name="cog-outline" class="dh-nav__icon"></ion-icon>
                                <span class="dh-nav__name">Ajustes</span>
                                <ion-icon name="chevron-down-outline" class="dh-nav__icon"></ion-icon>
                            </a>
                            <div class="dh-nav__dropdown-collapse">
                                <div class="dh-nav__dropdown-content">
                                    <a href="{{ route('index.menu') }}" class="dh-nav__dropdown-item">Menú</a>
                                    <a href="{{ route('index.general') }}" class="dh-nav__dropdown-item">Aspectos
                                        Generales</a>
                                    <a href="{{ route('index.footer') }}" class="dh-nav__dropdown-item">Footer</a>
                                    <a href="{{ route('index.fondo') }}" class="dh-nav__dropdown-item">Fondos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh-nav__items">
                        <h3 class="dh-nav__subtitle">Secciones</h3>

                        <a href="{{ route('index.entrada') }}" class="dh-nav__link">
                            <ion-icon name="pie-chart-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Entradas</span>
                        </a>
                        <a href="{{ route('index.equipo') }}" class="dh-nav__link">
                            <ion-icon name="people-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Equipo</span>
                        </a>
                        <a href="{{ route('index.enlace') }}" class="dh-nav__link">
                            <ion-icon name="link-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Enlace</span>
                        </a>
                        <a href="{{ route('index.galeria') }}" class="dh-nav__link">
                            <ion-icon name="images-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Galeria</span>
                        </a>

                        <a href="{{ route('index.servicio') }}" class="dh-nav__link">
                            <ion-icon name="hardware-chip-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Servicio</span>
                        </a>

                        <a href="{{ route('index.seccion_uno') }}" class="dh-nav__link">
                            <ion-icon name="brush-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Misión</span>
                        </a>

                        <a href="{{ route('index.seccion_dos') }}" class="dh-nav__link">
                            <ion-icon name="bulb-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Visión</span>
                        </a>

                        <a href="{{ route('index.slider') }}" class="dh-nav__link">
                            <ion-icon name="trail-sign-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Sliders</span>
                        </a>

                        <a href="{{ route('index.blog') }}" class="dh-nav__link">
                            <ion-icon name="document-text-outline" class="dh-nav__icon"></ion-icon>
                            <span class="dh-nav__name">Blog</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="dh-nav__link dh-nav__logout">
                <ion-icon name="log-out-outline" class="dh-nav__icon"></ion-icon>
                <span class="dh-nav__name">Salir</span>
            </a>
        </nav>
    </div>

    <main class="main left-0" id="body-pd">
        @include('layouts.includes.manage-theme')

        @yield('contenido')
    </main>

    </div>







    <footer class="app-footer" style="position: relative; left: 30px;">
        <div>

            <span>Growwhit.com.mx</span>
        </div>
        <div class="ml-auto">
            <span><b>By CFL39</b></span>

        </div>
    </footer>

    <script src="{{ asset('EstilosCMS/menu/js/menuFRA.js') }}"></script>
    <script async src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script type="module" src="{{asset('js/app-cz.js')}}" class="view-script"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/coreui.min.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
    <script src="./script.js"></script>
    <script src="{{ asset('js/jscolor.js') }}"></script>
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/slider1-carlos.js') }}"></script>
    <script src="{{ asset('js/slider2-carlos.js') }}"></script>



    @stack('scripts')

    <script>
        tinymce.init({
            selector: '#editor',
            height: "500px",
            plugins: [
                'print preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons spellchecker mediaembed pageembed linkchecker powerpaste formatpainter casechange'
            ],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'casechange undo redo  bold italic underline strikethrough  fontselect fontsizeselect formatselect alignleft aligncenter alignright alignjustify outdent indent numlist bullist  forecolor backcolor removeformat pagebreak charmap emoticons fullscreen preview save print insertfile image media template link anchor codesample fullpage ltr rtl styleselect pageembed formatpainter',
        });
    </script>




    <script type="text/javascript" src="{{ asset('js/custom-tooltips.min.js') }}" class="view-script"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" class="view-script"></script>
    <script type="text/javascript" src="{{ asset('js/menu.js') }}" class="view-script"></script>
    <script src="{{ asset('js/all.js') }}"></script>


</body>

</html>
