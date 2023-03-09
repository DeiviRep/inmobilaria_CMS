@extends('plantillas.1004.admin')
@section('1004')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">


                @foreach ($slider as $item)

                    <div class="item">
                    <img class="img-responsive" src="{{asset('sliders/'.$item->imagen)}}" alt="Slider Image">
                    <video src="{{asset('sliders/'.$item->imagen)}}" autoplay muted loop></video>
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">{{$item->titulo}}</h2>
                                <p class="carousel-subtitle">{{$item->subtitulo}} </p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>

        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    @foreach ($servicio as $item)
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <img src="{{ asset('servicio/'.$item->imagen) }}" class="img-servicio-logo" alt="user-image"/>
                                </div>
                                <div class="service-info">
                                    <h3>{{ $item->titulo }}</h3>
                                    <p class="margin-b-5">{{ $item->descripcion }}</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>





        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Últimas noticias</h2>
                    <p>Conoce aún más sobre nosotros con nuestros artículos relacionados</p>
                </div>
            </div>


            <div class="row">

                @foreach ($blog_index as $item)
                 <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <a href="http://gentiamkt.com/dcdcd/contenido/pagina/blog/{{$item->slug}}" target="_blank">   
                        <img class="img-responsive" src="{{asset('blog/'.$item->imagen)}}" alt="Latest Products Image">
                        </a>
                        </div>
                    </div>
                    <h4><a href="http://gentiamkt.com/dcdcd/contenido/pagina/blog/{{$item->slug}}" target="_blank">{{$item->titulo}}</a></h4>
                    <div class="text-ellipsis">
                        <?=$item->contenido?>
                    </div>
                    <span class="text-uppercase margin-l-20">{{$item->excerpt}}</span>
                    <a class="link" href="http://gentiamkt.com/dcdcd/contenido/pagina/blog/{{$item->slug}}" target="_blank">Ver completo</a>
                </div>
                @endforeach



            </div>

        </div>

        {{-- ! SECCION DE PROPIEDADES --}}

        <div class="seccion_propiedades">
            <h1>Ultimas Propiedades</h1>
            <div class="carousel-propiedades">
                <div class="first-page-carousel" id="first-page-carousel">
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="second-page-carousel" id="second-page-carousel">
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="carousel-propiedades-item">
                        <div class="carousel-item-body">
                            <img src="{{asset('imagesh/propiedad17.png')}}" alt="">
                        </div>
                        <div class="carousel-item-description">
                            <div class="propiedad-info">
                                <h1>SABINOS TULANCINCO</h1>
                                <p>COSTO | $ 763,000.MXN</p>
                                <a href="#">Haz clic aquí para ver ></a>
                            </div>
    
                            <div class="propiedad-detalles">
                                <div class="propiedad-detalle-item">
                                    <h5>Aréa</h5>
                                    <p>90 m²</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Baños</h5>
                                    <p>1</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Cuartos</h5>
                                    <p>2</p>
                                </div>
                                <div class="propiedad-detalle-item">
                                    <h5>Garaje</h5>
                                    <p>Estacionamiento</p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-arrow-controllers">
                <label for="csc-1" class="arrows-controllers">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </label>
                <label for="csc-2" class="arrows-controllers">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </label>
            </div>
            <div class="carousel-controllers" id="carousel-controllers">
                <input type="radio" name="carousel-section" id="csc-1" checked style="displey: none;">
                <label for="csc-1" id="cs-control-1"></label>

                <input type="radio" name="carousel-section" id="csc-2" style="displey: none;">
                <label for="csc-2" id="cs-control-2"></label>
            </div>
        </div>

        {{-- ! FIN DE LA SECCION DE PROPIEDADES --}}

        <div class="bg-color-sky-light">
            <div class="content-lg container">

                <div class="swiper-slider swiper-clients">

                    <div class="swiper-wrapper">
                        @foreach ($enlace as $item)
                        <div class="swiper-slide">

                            <a href="{{$item->enlace}}" target="_blank">
                                <img class="swiper-clients-img" src="{{asset('enlace/'.$item->imagen)}}" alt="Clients Logo">
                            </a>

                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>



        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Customer Reviews</h2>


                    <div class="swiper-slider swiper-testimonials">

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                                    </div>
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                        </div>



                        <div class="swiper-testimonials-pagination"></div>
                    </div>

                </div>
            </div>

        </div>



        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">

                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-chemistry"></i>
                                <h3>Starter Kit <span> - $</span> 49</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 5 products</li>
                                <li class="pricing-list-item">50 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>

                    </div>
                    <div class="col-sm-4 sm-margin-b-2">

                        <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-badge"></i>
                                <h3>Professional <span> - $</span> 149</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 100 products</li>
                                <li class="pricing-list-item">100 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-shield"></i>
                                <h3>Advanced <span> - $</span> 249</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Extended Features</li>
                                <li class="pricing-list-item">Unlimited products</li>
                                <li class="pricing-list-item">Unlimited Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>



        <div class="promo-section overflow-h">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="col-md-6">
                            <div class="ver-center">
                                <div class="ver-center-aligned">
                                    <div class="promo-section-col">
                                        <h2>{{ $seccion_uno->titulo }}</h2>
                                        <p>{{ $seccion_uno->descripcion }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="{{ asset('secciones/'.$seccion_uno->imagen) }}" alt="Content Image">
            </div>
        </div>

        <div class="promo-section overflow-h">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="col-md-6 col-md-offset-6">
                            <div class="ver-center">
                                <div class="ver-center-aligned">
                                    <div class="promo-section-col t-right">
                                        <h2>{{ $seccion_dos->titulo }}</h2>
                                        <p>{{ $seccion_dos->descripcion }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-left">
                <img class="img-responsive" src="{{ asset('secciones/'.$seccion_dos->imagen) }}" alt="Content Image">
            </div>
        </div>



        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Showcase</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>



                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    @if ( count($galeria) > 0 )
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{asset('galeria/'.$galeria[0]->imagen)}}" alt=" Imagen  {{ $galeria[0]->titulo }} ">
                                </div>

                                <div class="work-content">
                                    <h3 class="color-white margin-b-5"> {{ $galeria[0]->titulo }} </h3>
                                    <p class="color-white margin-b-0"> {{ $galeria[0]->subtitulo }} </p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                        </div>
                    @endif
                    
                    @if (count($galeria) > 1)
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{asset('galeria/'.$galeria[1]->imagen)}}" alt=" Imagen  {{ $galeria[1]->titulo }} ">
                                </div>

                                <div class="work-content">
                                    <h3 class="color-white margin-b-5"> {{ $galeria[1]->titulo }} </h3>
                                    <p class="color-white margin-b-0"> {{ $galeria[1]->subtitulo }} </p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                        </div>
                    @endif
                    
                    @if (count($galeria) > 2)
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{asset('galeria/'.$galeria[2]->imagen)}}" alt=" Imagen  {{ $galeria[2]->titulo }} ">
                                </div>

                                <div class="work-content">
                                    <h3 class="color-white margin-b-5"> {{ $galeria[2]->titulo }} </h3>
                                    <p class="color-white margin-b-0"> {{ $galeria[2]->subtitulo }} </p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                        </div>
                    @endif
                    
                    @if (count($galeria) > 3)
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{asset('galeria/'.$galeria[3]->imagen)}}" alt=" Imagen  {{ $galeria[3]->titulo }} ">
                                </div>

                                <div class="work-content">
                                    <h3 class="color-white margin-b-5"> {{ $galeria[3]->titulo }} </h3>
                                    <p class="color-white margin-b-0"> {{ $galeria[3]->subtitulo }} </p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                        </div>
                    @endif

                    @if (count($galeria) > 4)
                        <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                            <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{asset('galeria/'.$galeria[4]->imagen)}}" alt=" Imagen  {{ $galeria[4]->titulo }} ">
                                </div>

                                <div class="work-content">
                                    <h3 class="color-white margin-b-5"> {{ $galeria[4]->titulo }} </h3>
                                    <p class="color-white margin-b-0"> {{ $galeria[4]->subtitulo }} </p>
                                </div>
                                <a class="content-wrapper-link" href="#"></a>
                            </div>
                        </div>
                    @endif
                    
                </div>

            </div>
        </div>
        @endsection
