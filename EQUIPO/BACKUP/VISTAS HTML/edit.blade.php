@extends('layouts.admin')
@section('contenido')

            <link rel="stylesheet" type="text/css" href="{{asset('EstilosCMS/equipo/css/equipo_editar.css')}}">



<div class="nuevo-contenedor-principal">

  @include('layouts.includes.nav')

            <div class="container-fluid">
                <div id="ui-view">
                    <div>

                        <div class="animated fadeIn">
  <div class="row">

  @if(Session::has('succes'))
  <div class="col-lg-8">
   <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
   {{Session::get('succes')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
   </div>
   </div>
   @endif
  </div>


  <div class="col-lg-10">
    <!-- Upload IMG-->
     <div class="conall">
     <div class="contup">
       <form class="fond" action="{{route('update.equipo',$equipo->id)}}" method="POST" role="form" enctype="multipart/form-data">
       {{ csrf_field() }}
       <input name="_method" type="hidden" value="PATCH">

       <div class="up">
       <div class="content1">
       <div class="upimgx">
       <h2>Editar Persona</h2>
       <div class=" form-group">
       <div class="content_input">
       <input type="text" class="inpute form-control {{ $errors->has('nombres') ? 'is-invaild' : ''}}" name="nombres" placeholder=" "  value="{{$equipo->nombres}}"> 
       @if ($errors->has('nombres'))
       <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('nombres') }}</strong>
       </span>
       @endif
       

     </div>

     <div class="content_input">
     <input type="text" class="inpute form-control {{ $errors->has('cargo') ? 'is-invaild' : ''}}" name="cargo" placeholder=" "  value="{{$equipo->cargo}}"> 
     @if ($errors->has('cargo'))
     <span class="invalid-feedback" role="alert">
     <strong>{{ $errors->first('cargo') }}</strong>
     </span>
     @endif
    

   </div>
   
   
   
  </div>
  <div class="content_input_correo">
    <input type="text" class="inpute form-control {{ $errors->has('correo') ? 'is-invaild' : ''}}" name="correo" placeholder=" "  value="{{$equipo->correo}}"> 
    @if ($errors->has('correo'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('correo') }}</strong>
    </span>
    @endif
   

  </div>

     <label class="label" for="input-file">

     <img id="imagenPrevisualizacion"  src="{{asset('equipo/'.$equipo->imagen)}}">
     <svg class="logo3 ocultimg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                       <path
                           d="M144 480C64.47 480 0 415.5 0 336C0 273.2 40.17 219.8 96.2 200.1C96.07 197.4 96 194.7 96 192C96 103.6 167.6 32 256 32C315.3 32 367 64.25 394.7 112.2C409.9 101.1 428.3 96 448 96C501 96 544 138.1 544 192C544 204.2 541.7 215.8 537.6 226.6C596 238.4 640 290.1 640 352C640 422.7 582.7 480 512 480H144zM223 263C213.7 272.4 213.7 287.6 223 296.1C232.4 306.3 247.6 306.3 256.1 296.1L296 257.9V392C296 405.3 306.7 416 320 416C333.3 416 344 405.3 344 392V257.9L383 296.1C392.4 306.3 407.6 306.3 416.1 296.1C426.3 287.6 426.3 272.4 416.1 263L336.1 183C327.6 173.7 312.4 173.7 303 183L223 263z" />
                   </svg>
                   <p class="logo4 ocultimg">Subir Imagen</p>
               </label>
               <input type="file" id="input-file" name="imagen" value="" class="form-control {{ $errors->has('imagen') ? ' is-invaild' : ''}}">
     @if ($errors->has('imagen'))
       <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('imagen') }}</strong>
       </span>
       @endif

                   <div class="double-bottom">

                       <button type="submit" class="btns">Actualizar</button>
                   </div>
               </div>
           </div>
       </div>
</form>
<div class="imgm">
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" width="200" height="200" class="illustration styles_illustrationTablet__1DWOa"><path d="M147.71,147.7H140.8v-2.76h6.91a3.44,3.44,0,1,0,0-6.88H140.8V135.3h6.91a6.2,6.2,0,1,1,0,12.4Z" fill="#68e1fd"></path><path d="M147.71,147.7H140.8v-2.76h6.91a3.44,3.44,0,1,0,0-6.88H140.8V135.3h6.91a6.2,6.2,0,1,1,0,12.4Z" fill="#fff" opacity="0.61"></path><ellipse cx="198.56" cy="256.99" rx="145.07" ry="20.18" fill="#e6e6e6" opacity="0.45"></ellipse><path d="M288.75,95.62c-1.36,21.07-11.42,73.61-79.43,44.06l2.34-6.94s33.61,5.93,42.5-6.54c7.52-10.56,7.4-45.19,24-43.54A12.09,12.09,0,0,1,288.75,95.62Z" fill="#68e1fd"></path><path d="M288.75,95.62c-1.36,21.07-11.42,73.61-79.43,44.06l2.34-6.94s33.61,5.93,42.5-6.54c7.52-10.56,7.4-45.19,24-43.54A12.09,12.09,0,0,1,288.75,95.62Z" opacity="0.08"></path><path d="M226.15,56.36s1.38,7.59,4,12.18a3.87,3.87,0,0,0,5.3,1.45c2.3-1.34,5-3.81,4.76-8l.45-7.11a6.91,6.91,0,0,0-4.89-6.33C230.72,46.71,225.08,51.78,226.15,56.36Z" fill="#f4a28c"></path><polygon points="240.72 57.22 255.69 72.33 246.75 82.04 237.36 63.98 240.72 57.22" fill="#f4a28c"></polygon><path d="M235.8,60.58s-.73-2.88,1.48-3.25,3.29,3.79.47,5Z" fill="#f4a28c"></path><path d="M227.27,61.1,226,64.53a1.24,1.24,0,0,0,1.25,1.67l3-.24Z" fill="#f4a28c"></path><path d="M265.21,248.79s-2,3.65-5.53,3.41-5,3-2,4.41,11.74-1.42,11.74-1.42l.55-5.08Z" fill="#68e1fd"></path><path d="M307.35,244.14s2.25,3.51.32,6.49.26,5.83,2.91,3.86,4.43-11,4.43-11l-4.19-2.93Z" fill="#68e1fd"></path><path d="M238.87,66.88A15.54,15.54,0,0,0,240.18,62S246,67.38,242.1,73.1Z" fill="#ce8172" opacity="0.31"></path><polygon points="263.46 170.35 263.03 250.44 273.39 250.44 286.65 169.32 263.46 170.35" fill="#24285b"></polygon><path d="M248.41,76.46a30.66,30.66,0,0,1,18.31-6.71c10.8-.11,40.92,1.74,38.86,38.58-1.53,27.3-2.31,57.5-2.31,57.5l-39.66,6.61S216.24,105.41,248.41,76.46Z" fill="#68e1fd"></path><path d="M274.62,85.72s-8.31,10-3.17,28.28,12.36,40.33-12.4,51.41l4.56,7,39.66-6.61.52-16.88,6.37-31.26Z" opacity="0.08"></path><rect x="109.25" y="150.31" width="66.97" height="106.68" fill="#a5a5a5" opacity="0.79"></rect><rect x="138.48" y="150.31" width="57.93" height="106.68" fill="#e6e6e6"></rect><polygon points="179.8 156.55 178.74 162.66 150.3 162.66 150.3 188.44 197.6 188.44 197.6 167.44 197.6 162.66 197.6 156.55 179.8 156.55" fill="#ffd200"></polygon><polygon points="179.8 156.55 178.74 162.66 150.3 162.66 150.3 188.44 197.6 188.44 197.6 167.44 197.6 162.66 197.6 156.55 179.8 156.55" opacity="0.08"></polygon><polygon points="186.71 156.55 185.65 162.66 157.21 162.66 157.21 188.44 204.51 188.44 204.51 167.44 204.51 162.66 204.51 156.55 186.71 156.55" fill="#ffd200"></polygon><polygon points="262.98 121.07 264.92 128.28 238.78 139.49 251.07 168.14 294.55 149.49 284.54 126.16 282.26 120.84 279.34 114.05 262.98 121.07" fill="#ffd200"></polygon><polygon points="262.98 121.07 264.92 128.28 238.78 139.49 251.07 168.14 294.55 149.49 284.54 126.16 282.26 120.84 279.34 114.05 262.98 121.07" opacity="0.08"></polygon><polygon points="269.33 118.34 271.27 125.56 245.13 136.76 257.42 165.41 300.89 146.77 290.89 123.43 288.61 118.12 285.69 111.33 269.33 118.34" fill="#ffd200"></polygon><polygon points="192.42 156.55 191.36 162.66 162.93 162.66 162.93 188.44 210.23 188.44 210.23 167.44 210.23 162.66 210.23 156.55 192.42 156.55" fill="#ffd200"></polygon><polygon points="192.42 156.55 191.36 162.66 162.93 162.66 162.93 188.44 210.23 188.44 210.23 167.44 210.23 162.66 210.23 156.55 192.42 156.55" opacity="0.08"></polygon><rect x="164.12" y="151.56" width="44.91" height="30.55" transform="translate(-22.09 28.62) rotate(-8.28)" fill="#24285b"></rect><rect x="164.12" y="151.56" width="44.91" height="30.55" transform="translate(-22.09 28.62) rotate(-8.28)" fill="#fff" opacity="0.12"></rect><rect x="166.45" y="147.23" width="44.91" height="30.55" transform="translate(-21.44 28.91) rotate(-8.28)" fill="#24285b"></rect><polygon points="199.33 156.55 198.27 162.66 169.84 162.66 169.84 188.44 217.14 188.44 217.14 167.44 217.14 162.66 217.14 156.55 199.33 156.55" fill="#ffd200"></polygon><rect x="147.65" y="170.37" width="74.54" height="29.1" fill="#a5a5a5"></rect><path d="M291.13,124a212.24,212.24,0,0,1-14,16.27,63.78,63.78,0,0,1-12.67,9.92c-2.69,1.65-5.52,4.59-3.62,9.19h14.81L295,133.13Z" opacity="0.08"></path><rect x="171.16" y="170.37" width="51.02" height="29.1" fill="#f2f2f2"></rect><rect x="147.65" y="212.92" width="59.02" height="29.1" fill="#f2f2f2"></rect><rect x="128.38" y="132.3" width="16.89" height="18.4" fill="#68e1fd"></rect><circle cx="197.57" cy="183.75" r="4.09" fill="#a5a5a5"></circle><circle cx="178.04" cy="226.31" r="4.09" fill="#a5a5a5"></circle><path d="M211.23,134a22.16,22.16,0,0,0-8.26,1.25c-4.43,1.56-8.53,5.51-5.37,10.13,2.44,3.56,5.9,1.72,7.19-1.13s2.07-5.61,4.53-4.57Z" fill="#f4a28c"></path><path d="M288.48,74.53a51.74,51.74,0,0,1,29,27.08,36.4,36.4,0,0,1-1.09,33.21c-5.87,10.26-17.9,21.77-42.57,26.75l-2.87-7.21,23.56-20.69a12.18,12.18,0,0,0,.58-17.79c-7-7-15.9-17.3-19.91-28.17A10.3,10.3,0,0,1,288.48,74.53Z" fill="#68e1fd"></path><path d="M288.48,74.53a51.74,51.74,0,0,1,29,27.08,36.4,36.4,0,0,1-1.09,33.21c-5.87,10.26-17.9,21.77-42.57,26.75l-2.87-7.21,23.56-20.69a12.18,12.18,0,0,0,.58-17.79c-7-7-15.9-17.3-19.91-28.17A10.3,10.3,0,0,1,288.48,74.53Z" fill="#fff" opacity="0.2"></path><path d="M271.45,155.7s-11-1.2-12,3-1.68,6.74-1.68,6.74a30.1,30.1,0,0,0,15.66-4.82Z" fill="#f4a28c"></path><path d="M303.27,165.83a104.78,104.78,0,0,1,.18,15.38c-.27,6.31-1.91,16.82-3.15,24.09A23.22,23.22,0,0,0,303,220.6l10,17.79-7.26,7.24-11.91-15.48a64.88,64.88,0,0,1-12.16-27l-3.79-19.34-9.55-12.14Z" fill="#24285b"></path><path d="M221.75,47.33s-3.09,7.14,4.29,7.49,7.29-1.15,7.29-1.15.46,9.54,6.85,8.35l2.65-2.68s3-12.17-2.2-14.84C240.63,44.5,230.25,33.83,221.75,47.33Z" fill="#24285b"></path><path d="M235.68,61.73s.39-6.22,3.89-4.67S240.76,65.39,235.68,61.73Z" fill="#f4a28c"></path><path d="M140.8,132.3s11.89-7.63,0-18.3-16.55,14-25.22-2.67,13.33-34.66-11-36S95.47,58.62,74.52,56.81,47.91,92.11,63.91,94.56s31.34,3.44,27,18.77,12,19.5,19.67,15.75,17.8,3.22,17.8,3.22Z" fill="#e6e6e6" opacity="0.45"></path><path d="M98,242s-11.85-3.18-14.47-14.18c0,0,18.32-3.78,18.92,15.14Z" fill="#68e1fd" opacity="0.58"></path><path d="M99.46,240.78s-8.32-13-1.1-25.28c0,0,14,8.79,7.86,25.28Z" fill="#68e1fd" opacity="0.73"></path><path d="M101.59,240.78s4.31-13.82,17.5-16.49c0,0,2.52,9-8.48,16.49Z" fill="#68e1fd"></path><polygon points="93.01 240.51 95.48 256.91 110.58 256.91 112.74 240.51 93.01 240.51" fill="#24285b"></polygon></svg>
</div>
</div>
</div>

 </div>




    </div>


       </div>

       </div>
       </div>
       </div>

        <script src="{{asset('EstilosCMS/equipo/js/edit.js')}}"></script>
        

@endsection