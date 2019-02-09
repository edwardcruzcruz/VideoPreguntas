@extends('layouts.default')
 
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Prueba de video con Laravel
                </div>

                <div class="links">
                    <a class="test" href="{{URL::to('video')}}">Ver video</a>
                </div>
            </div>
        </div>
@stop
