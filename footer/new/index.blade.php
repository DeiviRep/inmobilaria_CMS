
@extends('layouts.admin')

@section('contenido')

<link rel="stylesheet" type="text/css" href="{{ asset('css/galeria.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/footer/css/footerFRA.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('EstilosCMS/footer/css/footerDAB.css')}}">{{--PONIENDO NUEVO ESTILO DAVID P.--}}
<div class="nuevo-contenedor-principal">
    {{-- Contenedor principal con navbar y datos del usuario añadido --}}
    @include('layouts.includes.nav')

    <main>
    <div id="ui-view">
        {{-- Banner --}}
        <div class="banner_gallery">
            <h2 class="title">Pie de página</h2>
            <div class="contplay">
                <a class="video-play-button sidebar-link discover is-active" id="play-videos" href="#comofunciona">
                <span></span>
                </a>
            </div>
            <div class="link">
                {{-- MODIFICANDO EL HREF para PLANTILLA 1004 --}}
                <a href="https://inmobiliariarialsa.com.mx/{{ $paginaactiva->dominio }}" id="url-website" class="site-card__i sidebar-link discover is-active" target="_blank">
                    Ir al sitio web
                    <i class="fas fa-arrow-right flecha1"></i>
                </a>
                {{-- DEJANDOLO ESTO PARA PRUEBAS DavidP--}}
                {{-- <a href=href="/plantillas" id="url-website" class="site-card__i" target="_blank">
                    Ir al sitio web
                    <i class="fas fa-arrow-right flecha1"></i>
                </a> --}}
            </div>
        <!-- Modal -->
            <section id="comofunciona" class="comofunciona">
                <div class="comofunciona_container">
                    <figure class="comofunciona_picture">
                        <img src="/img/ilustracion.png" class="comofunciona_img image-wd">
                    </figure>
                    <h2 class="comofunciona_title">¿Cómo funciona?
                        <span class="comofunciona_tittle comofunciona_title-bold"></span>
                    </h2>
        
                    <p class="comofunciona_paragraph">Para añadir un contenido has clic sobre el botón <b>Añadir nuevo</b>.
                        Posteriormente ingresarás un <b>link relacionado</b> al contenido publicado, por ejemplo: Sitio Web | Canal de YouTube | Página de Facebook | Cualquier mención alguna que haga referencia al contenido publicado.</p>
                    <div class="divmod cont-btn-modal">
                        <a href="#header" class="modal_close button-wd">¡Entendido, gracias!</a>
                        <a href="#header" class="modal_close button-wd" id="play-video">Mira un vídeo ejemplo</a>
                    </div>
                </div>
            </section>
        <!--modal-->     
            <p class="details" id="details-par">Puede añadir información de contacto, indicando su disponibilidad entre otros datos.
          </p>
        </div>
        {{-- Fin Banner --}}
       
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        {{-- Inicio Formulario --}}
        <form method="POST" action="{{route('update.footer',$footer->id)}}" role="form">
            <div class="form-grupo-principal not-border" >
                <div class="form-options-contenedor">
                    <div class="header_form">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class= "input__wrap texta">
                            {{-- Input Direccion --}}
                            <div class="desciption_blog form-campo form-input">       
                            <textarea name="direccion" class="input__field" class="form-control" required>{{$footer->direccion}}</textarea>
                            <label class="t_label" >Dirección</label>
                                @if ($errors->has('direccion'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class= "input__wrap texta2">
                            <div class="title_blog form-campo form-input">
                                {{-- Input Derechos Reservados --}}
                                <input type="text" class="input__field" autocomplete="off" required class="form-control"  name="cr" value="{{$footer->cr}}">
                                @if ($errors->has('cr'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cr') }}</strong>
                                </span>
                                @endif
                                <label class="t_label">Derechos reservados</label>
                            </div>
                        </div>
                        <div class= "input__wrap add-height texta3">
                            <div class="title_blog form-campo form-input flex-c">
                                <ul class="list-social">
                                    <li class="list-social-item"><a class="list-social-link" href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-social-item"><a class="list-social-link" href="#instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-social-item"><a class="list-social-link" href="#twitter"><i class="fab fa-twitter"></i></i></a></li>
                                </ul>
                                <ul class="list-social">
                                    <li class="list-social-item"><a class="list-social-link" href="#youtube"><i class="fab fa-youtube"></i></a></li>
                                    <li class="list-social-item"><a class="list-social-link" href="#tiktok"><i class="fab fa-tiktok"></i></a></li>
                                    <li class="list-social-item"><a class="list-social-link" href="#whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Modal Facebook --}}
                        <section id="facebook" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Facebook</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="facebook" value="{{$footer->facebook}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        {{-- Modal Instagram --}}
                        <section id="instagram" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Instagram</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="instagram" value="{{$footer->instagram}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        {{-- Modal Twitter --}}
                        <section id="twitter" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Twitter</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="twitter" value="{{$footer->twitter}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        {{-- Modal Youtube --}}
                        <section id="youtube" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Youtube</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="youtube" value="{{$footer->youtube}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        {{-- Modal Tiktok --}}
                        <section id="tiktok" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Tiktok</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="tiktok" value="{{$footer->tiktok}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        {{-- Modal Whatsapp --}}
                        <section id="whatsapp" class="comofunciona">
                            <div class="comofunciona_container">
                                <h2 class="comofunciona_social">Copia la URL de tu perfil de <b>Whatsapp</b> que quieres compartir y pégala a continuación</h2>
                                <div class="box-input form-input">
                                    <input type="text" class="input__field" autocomplete="off" class="form-control"  name="whatsapp" value="{{$footer->whatsapp}}">
                                    <label class="t_label">Link Directo</label>
                                </div>
                                <figure class="comofunciona_picture">
                                    <img src="/img/footerFRA/URLSOCIAL.svg" class="comofunciona_img">
                                </figure>
                                <div class="divmod">
                                    <a href="#header" class="modal_close">¡Listo!</a>
                                </div>
                            </div>
                        </section>

                        <div class= "input__wrap texta4">
                            {{-- Boton Guardar y Publicar --}}
                            <div class="title_blog form-campo form-input">
                                <div class="btn-save-blog">
                                    <button type="submit" class="text-btn">Guardar y publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_form header_form_resp">
                        <div class= "input__wrap texta5">
                            <div class="title_blog form-campo form-input">
                                {{-- Input Horario --}}
                                <input type="text" class="input__field" autocomplete="off" class="form-control" name="horarios" value="{{$footer->horarios}}">
                                @if ($errors->has('horarios'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('horarios') }}</strong>
                                </span>
                                @endif
                                <label class="t_label">Horarios</label>
                            </div>
                        </div>
                        <div class= "input__wrap texta6">
                            <div class="title_blog form-campo form-input">
                                {{-- Input Telefono --}}
                                <input type="text" class="input__field" autocomplete="off" class="form-control"  name="telefono" value="{{$footer->telefono}}">
                                @if ($errors->has('telefono'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                                <label class="t_label">Número de teléfono</label>
                            </div>
                        </div>
                        <div class= "input__wrap texta7">
                            <div class="title_blog form-campo form-input">
                                {{-- Input Correo --}}
                                <input type="email" class="input__field" autocomplete="off" class="form-control"  name="correo" value="{{$footer->correo}}">
                                @if ($errors->has('correo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                                @endif
                                <label class="t_label">Correo electrónico</label>
                            </div>
                        </div>
                        <div class= "input__wrap card-color texta8">
                            <div class="title_blog form-campo form-input">
                                {{-- Input Background --}}
                                <div class="box-input-color">
                                    <input type="text" class="jscolor color-input" name="background" value="{{$footer->background}}" placeholder="Color Fondo">
                                    <label class="t_label">Color fondo</label>
                                </div>
                                {{-- Input Color --}}
                                <div class="box-input-color">
                                    <input type="text" class="jscolor color-input" name="color" value="{{$footer->color}}" placeholder="Color Fuente">
                                    <label class="t_label">Color fuente</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- Fin Formulario --}}        
        {{-- Inicio Alerta --}}
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
                    <ion-icon class="icon" name="close-outline"></ion-icon>
                </div>
            </div>
        </div>
        @endif
        {{-- Fin Alerta --}}
    </div>
    </main>
</div>
<script src="{{ asset('http://gentiamkt.com/EstilosCMS/footer/js/footerFRA.js') }}"></script>
{{-- AÑADIENDO LA CLASE ACTIVE A LOS INPUTS DPatzi--}}
<script src="{{ asset('EstilosCMS/general/js/general-scripts-antoniza.js') }}
"></script>
{{-- FIN ACTIVE --}}
{{-- INICIO ANIMATE --}}
<!--Utilizaremos la libreria jQuery con la version 3.3.1-->
<script src="{{ asset('EstilosCMS/footer/js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('EstilosCMS/footer/js/script.js') }}"></script>
{{-- FIN ANIMATE --}}
@endsection