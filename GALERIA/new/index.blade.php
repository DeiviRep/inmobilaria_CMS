@extends('layouts.admin')
@section('contenido')

<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://kit.fontawesome.com/52c3ece157.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/galeria/css/Galeria_ALE.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/galeria/css/GaleriaGenerales_ALE.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/galeria/css/GaleriaModals_ALE.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/galeria/css/GaleriaResponsivo_ALE.css') }}">

<div class="container_gallery nuevo-contenedor-principal ">
    <div class="senal"></div>

    <!-- Barra de búsqueda -->
    @include('layouts.includes.nav')

    <!-- Banner -->
        <div class="banner_gallery banner_gallery--position">
            <h2 class="title">Galería</h2>
            <section class="contplay">
                <a class="video-play-button" id="play-videos" href="#comofunciona">
                    <span></span>
                </a>
            </section>
            
            <a href="{{ asset($paginaactiva->dominio)  }}" id="url-website" class="site-card__i" target="_blank">
                Ir al sitio web
                <svg class="svg-inline--fa fa-arrow-right fa-w-14 flecha1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>
            </a>
                
            <p class="details">Crea una galería de fotos para tu página web y permite que los visitantes puedan <br> incrementar
                el tiempo que pasan en ella.
            </p>

            <div class="double-button">
                <a href="" class="galeria__boton galeria__boton--negro" data-toggle="modal" data-target="#addphoto">
                    <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    Añadir nueva
                </a>

                <a href="#modal-todos" class="galeria__boton galeria__boton--blanco" data-toggle="modal" data-target="#modal-todos">
                    Borrar todo
                </a>
            </div>
        </div>
        <div class="text-container-gallery">
            <p>Mis imagenes</p>
        </div>
    <!-- Finaliza seccion Banner -->

    <!-- Modal como funciona -->
        <div id="comofunciona" class="comofunciona">
            <div class="comofunciona_container">
                <figure class="comofunciona_picture">
                    <img src="/img/ilustracion.png" class="comofunciona_img image-wd">
                </figure>
                <h2 class="comofunciona_title">¿Cómo funciona?
                    <span class="comofunciona_tittle comofunciona_title-bold"></span>
                </h2>
        
                <p class="comofunciona_paragraph">Para añadir un contenido has clic sobre el botón <b>Añadir    nuevo</b>.
                    Posteriormente ingresarás un <b>link relacionado</b> al contenido publicado, por ejemplo: Sitio Web | Canal de YouTube | Página de Facebook | Cualquier mención alguna que haga referencia al contenido publicado.
                </p>
                <div class="divmod cont-btn-modal">
                    <a href="#header" class="modal_close button-wd">¡Entendido, gracias!</a>
                    <a href="#header" class="modal_close button-wd" id="play-video">Mira un vídeo ejemplo</a>
                </div>
            </div>
        </div>
    <!-- Finaliza Modal como funciona -->
    
    <!-- Alerta Cambios realizados con exito -->
        @if(Session::has('succes'))
            <div class="toast-alert">
                <div class="bar-color success"></div>
                <div class="toast-alert-content">
                    <div class="details">
                        <div class="icon-alert success">
                            <ion-icon class="icon" name="checkmark-outline"></ion-icon>
                        </div>
                        <div class="info-alert">
                        <span class="title">Información actualizada</span>
                        <span class="message">Los cambios se han publicado con éxito</span>
                        </div>
                    </div>
                    <div class="close-option" id="close-alert-button">
                        <ion-icon class="icon" name="close-outline">&times;</ion-icon>
                    </div>
                </div>
            </div>
        @endif
    <!-- Fin seccion Alerta Cambios realizados con exito -->

    <!-- Seccion de imagenes agregadas -->
    <!-- Se ajustó la galeria para que coincidiera con los slider -Don -->
        <div id="app-2" class="container-images">
            @foreach ($galeria as $item)
                {{-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 img">
                    <div class="thumbnail galeria__item">
                        <div class="galeria__texto">
                            @if ($item->titulo)
                                <p class="galeria__titulo">{{ $item->titulo }}</p>
                            @if ($item->subtitulo)
                                <p class="galeria__subtitulo">{{ $item->subtitulo }}</p>
                            @endif
                            @endif                 
                        </div>
                        
                        <img class="galeria__imagen" src="{{asset('galeria/'.$item->imagen)}}" width="640px" height="480px">
                        <div class="links">
                            <a slot="content" href="" class="galeria__boton galeria__boton--blanco" data-toggle="modal" data-target="#modal-{{$item->id}}">Eliminar</a>
                        </div>
                    </div>
                </div> --}}

                <figure class="c card__slider" >
                    <div class="card__slider card_image" id="card_image" style="background-image:url({{asset('galeria/'.$item->imagen)}});" >
                        <h3 class="title">{{$item->titulo}}</h3>
                        <p class="subtitle">{{$item->subtitulo}}</p>

                        <figcaption class="figcaption">
                            <span class="info__slider"></span>
                            <span class="links">
                                <a class="boton_card_z_index boton_eliminar_todas_slider_responsive boton_eliminar_todas_slider boton_eliminar_card__slider"  data-toggle="modal" data-target="#modal-{{$item->id}}">Eliminar</a>
                            </span>
                            <div class="color_figcaption"></div>
                        </figcaption>
                    </div>
                </figure>
                @include('admin.galeria.modal')
            @endforeach
        </div>
    <!-- Finaliza Seccion de imagenes agregadas -->

    <!-- Modal para eliminar todos -->
        <div class="modal fade in" id="modal-todos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="POST" action="{{route('destroyTodos.galeria', $array_para_enviar_via_url)}}">
            {{csrf_field()}}
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
                            <p class="s-text">Todo el contenido se eliminará permanentemente<br> <span class="p-text">Esta acción no se puede deshacer.</span></p>
                        </div>
                        
                        <div class="modal-footer double-button">
                            <button type="button" class="galeria__boton galeria__boton--negro" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="galeria__boton galeria__boton--blanco">Aceptar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <!-- Finaliza Modal para eliminar todos -->
</div>

<!-- Modal de agregar imagen -->
<div class="modal fade" id="addphoto" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <form action="{{route('store.galeria')}}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content modal-content--gris">
                <div class="modal-window-gallery">
                    <div class="input__wrap modal-input-descripcion">
                        <div class="inpute form-campo form-input box-input-color">
                            <input type="text" class="input__field" id="imp" autocomplete="off" class="form-control"  name="titulo" value="" maxlength="20" data-title>
                            @if ($errors->has('titulo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                            <label class="t_label bel" id="xm">Titulo</label>
                            <p class="num__title" id="num__title" data-num-limitTitle>0/20</p>
                        </div>
    
                        <div class="inpute form-campo form-input box-input-color">
                            <input type="text" class="input__field" id="imp" autocomplete="off" class="form-control"  name="subtitulo" value="" maxlength="35" data-subtitle>
                            @if ($errors->has('titulo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                            <label class="t_label bel" id="xm">Subtitulo</label>
                            <p class="num__title" id="num__subtitle" data-num-limitSubtitle>0/35</p>
                        </div>
                    </div> 

                    <label class="label" for="modal-input-file">
                        <img id="imagenPrevisualizacion" >
                        <svg class="logo3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM223 263C213.7 272.4 213.7 287.6 223 296.1C232.4 306.3 247.6 306.3 256.1 296.1L296 257.9V392C296 405.3 306.7 416 320 416C333.3 416 344 405.3 344 392V257.9L383 296.1C392.4 306.3 407.6 306.3 416.1 296.1C426.3 287.6 426.3 272.4 416.1 263L336.1 183C327.6 173.7 312.4 173.7 303 183L223 263z" />
                        </svg>
                        <p class="logo4">Seleccionar imágen</p>
                    </label>

                    <input type="file" class="input__field" id="modal-input-file" autocomplete="off" class="form-control" name="imagen" value="" required>

                    <div class="double-button">
                        <button type="button" class="galeria__boton galeria__boton--blanco modal__boton" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="galeria__boton galeria__boton--negro modal__boton" data-img>Subir</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Finaliza Modal de agregar imagen -->
        
    <a href="#" class="btn-hover-up"><i class="fa-solid fa-arrow-up"></i></a>
        
    <script src="{{ asset('EstilosCMS/servicio/js/servicioFRA.js') }}"></script>
    <script src="{{ asset('EstilosCMS/galeria/js/galeriaDon.js') }}"></script>
@endsection