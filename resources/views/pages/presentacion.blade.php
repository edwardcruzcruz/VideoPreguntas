@extends('layouts.default')
 
@section('content')
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Atras</a>
    </div>
</nav>

<h1 align="center">Video 1</h1>
<div class="Video">
    <video autoplay="" id="video" width="1000" height="500" >
        <source src="{{asset('Video/Cortometraje_La_Magia_de_las_Drogas.mkv')}}" type="video/mp4" >
    </video>
</div>

<button class="playVid" type="button">Play Video</button>
<button class="pauseVid" type="button">Pause Video</button><br> 

<p>Video courtesy of <a href="https://www.youtube.com/watch?v=E3Q3dX0liTM" target="_blank">Cortometraje "La Magia de las Drogas"</a>.</p>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{URL::asset('js/func.js')}}"></script>
@stop
