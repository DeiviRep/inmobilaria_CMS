@extends('layouts.admin')
@section('contenido')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/equipo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/slider/css/slider.css') }}">
    {{-- Estilo DavidPV --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/equipo/css/equipo_targets.css') }}">
    {{--  --}}

    <div class=" nuevo-contenedor-principal">
        @include('layouts.includes.nav')
        <div class="banner_gallery">
            <h2 class="title">Mi equipo</h2>
            <div class="contplay">

                <a class="video-play-button" id="play-videos" href="#comofunciona">
                    <span></span>
                </a>
            </div>

            <a href="http://gentiamkt.com/equipos" id="url-website" class="site-card__i" target="_blank">
                Ir al sitio web
                <i class="fas fa-arrow-right flecha1"></i>
            </a>

            <!-- Modal -->
            <section id="comofunciona" class="comofunciona">
                <div class="comofunciona_container">
                    <figure class="comofunciona_picture">
                        <img src="/img/ilustracion.png" class="comofunciona_img">
                    </figure>
                    <h2 class="comofunciona_title">¿Cómo funciona?
                        <span class="comofunciona_tittle comofunciona_title-bold"></span>
                    </h2>

                    <p class="comofunciona_paragraph">Para añadir un contenido has clic sobre el botón <b>Añadir nuevo</b>.
                        Posteriormente ingresarás un <b>link relacionado</b> al contenido publicado, por ejemplo: Sitio Web
                        | Canal de YouTube | Página de Facebook | Cualquier mención alguna que haga referencia al contenido
                        publicado.</p>
                    <div class="divmod">
                        <a href="#header" class="modal_close">¡Entendido, gracias!</a>
                        <a href="#header" class="modal_close" id="play-video">Mira un vídeo ejemplo</a>
                    </div>
                </div>
            </section>

            <!--modal-->


            <p class="details">Permite mostrar las habilidades, experiencia y perfiles de cada miembro del equipo, creando
                confianza y estableciendo una conexión personal con los visitantes del sitio web.</p>
            <div class="double-button double-button-banner">


                <a href="https://inmobiliariarialsa.com.mx/index.php/admin/equipo/crear" class="boton_agregar_slider">
                    <span class="agregar_slidar_mas"> + </span>
                    Añadir nuevo

                </a>
                <a data-toggle="modal" data-target="#modal-todos" class="boton_eliminar_todas_slider"
                    href="#modal-todos">Borrar todo</a>
                <a href="http://gentiamkt.com/equipos" id="url-website" class="site-card__i site-escondida" target="_blank">
                    Ir al sitio web
                    <i class="fas fa-arrow-right flecha1"></i>
                </a>
            </div>
        </div>

        @if (Session::has('succes'))
            <div class="toast-alert">
                <div class="bar-color success"></div>
                <div class="toast-alert-content">
                    <div class="details">
                        <div class="icon-alert success">
                            <ion-icon class="icon" name="checkmark-outline"></ion-icon>
                        </div>
                        <!-- <div class="info-alert">
                          <div><span class="title">Información actualizada</span>
                                <span class="message">Los cambios se han publicado con éxito</span> -->
                        <div class="info-alert">
                            <div class="mensaje_alert" style="display:none;">
                                {{ Session::get('succes') }}
                            </div>

                            <span class="title color-title-alert">{{ Session::get('succes') }}</span>
                        </div>
                    </div>
                    <div class="close-option boton_alert" id="close-alert-button">
                        <ion-icon class="icon" name="close-outline">&times;</ion-icon>
                    </div>
                </div>
            </div>
        @endif

        <div class="card-body">
            <div>
                <div class="card-columnas">
                    @foreach ($equipo as $item)
                        <div class="card-contenido">
                            <div class="card-equipo">
                                <!-- front -->
                                <div class="card-liner front">
                                    <figure>
                                        <div class="img"
                                            style="background-image:url({{ asset('equipo/' . $item->imagen) }});">
                                    </figure>
                                    <div class="card--social"></div>
                                    <div class="card-title">
                                        <h3 class="name">{{ $item->nombres }}</h3>
                                        <p class="post">{{ $item->cargo }}</p>
                                    </div>
                                    <div class="card-btn">
                                        <div class="botones">
                                            <div class="moreinfo">Opciones</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin front -->
                                <!-- back -->
                                <div class="card-liner back">
                                    <figure>
                                        <div class="img"
                                            style="background-image:url({{ asset('equipo/' . $item->imagen) }});">
                                    </figure>
                                    <div class="card--social"></div>
                                    <div class="card-title">
                                        <h3 class="name">{{ $item->nombres }}</h3>
                                        <p class="post">{{ $item->cargo }}</p>
                                    </div>
                                    <div class="card-desc">
                                        <hr />
                                        <p>{{ $item->correo }}</p>
                                    </div>
                                    <div class="card-btn">
                                        <div class="botones">
                                            <div class="fullprof">
                                                <a class="editar-equipo"
                                                    href="{{ route('edit.equipo', $item->id) }}">Editar</a>
                                                <a href="#modal-{{ $item->id }}" class="eliminar" data-toggle="modal"
                                                    data-target="#modal-{{ $item->id }}">
                                                    Borrar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fin back -->
                                @include('admin.equipo.modal')
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Método para el Modal Borrar todo sdd -->
        <?php
        $totalID = [];
        foreach ($equipo as $item) {
            array_push($totalID, $item->id);
        }
        $array_para_enviar_via_url = serialize($totalID);
        $array_para_enviar_via_url = urlencode($array_para_enviar_via_url);
        ?>


        <!-- Modal para eliminar todos -->
        <div class="modal fade in" id="modal-todos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <form method="POST" action="{{ route('destroyTodos.equipo', $array_para_enviar_via_url) }}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="POST">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Quieres eliminar todo el contenido?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="s-text">Todo el contenido se eliminará permanentemente<br> <span class="p-text">Esta
                                    acción no se puede deshacer.</span></p>
                        </div>
                        <div class="modal-footer double-button">
                            <button type="button" class="button secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="button secondaryy btn-borrar--aceptar">Aceptar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
        <script src="{{ asset('EstilosCMS/slider/js/main.js') }}"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    @endsection
