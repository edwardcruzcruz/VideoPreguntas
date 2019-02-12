@extends('layouts.default')
 
@section('content')
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Atras</a>
    </div>
</nav>

<div class="container-fluid" id="contenedor">
    <div class="row" id="fila">
	<div class="col-3 col-xs-3 col-sm-3 col-md-3">
             <h1>videos mas + . +</h1>
         </div>
	<div class="col-9 col-xs-9 col-sm-9 col-md-9" id="columna2">
             <div class="Video">
                  <video autoplay="" id="video" >
                       <source src="{{asset('Video/Cortometraje_La_Magia_de_las_Drogas.mkv')}}" type="video/mp4" >
                  </video>
	     </div>
             <div class="container" id="overlay"></div>
         </div>
    </div>
</div>
{{--
<button class="playVid" type="button">Play Video</button>
<button class="pauseVid" type="button">Pause Video</button><br> 
--}}
<p>Video courtesy of <a href="https://www.youtube.com/watch?v=E3Q3dX0liTM" target="_blank">Cortometraje "La Magia de las Drogas"</a>.</p>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{URL::asset('js/func.js')}}"></script>
@stop
