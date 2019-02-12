 
<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">Atras</a>
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
                       <source src="<?php echo e(asset('Video/Cortometraje_La_Magia_de_las_Drogas.mkv')); ?>" type="video/mp4" >
                  </video>
	     </div>
             <div class="container" id="overlay"></div>
	     <div id="myProgress">
     		  <div id="myBar"></div>
	     </div>
         </div>
    </div>
</div>

<p>Video courtesy of <a href="https://www.youtube.com/watch?v=E3Q3dX0liTM" target="_blank">Cortometraje "La Magia de las Drogas"</a>.</p>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(URL::asset('js/func.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>