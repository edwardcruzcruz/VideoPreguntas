 
<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">Atras</a>
    </div>
</nav>

<h1 align="center">Video 1</h1>
<div class="Video">
    <video width="640" height="267" codecs="theora, vorbis"' autoplay controls onerror="failed(event)" >
        <source src="<?php echo e(asset('Video/Cortometraje_La_Magia_de_las_Drogas.mkv')); ?>" type="video/mp4" >
    </video>
</div>
<p>Video courtesy of <a href="https://www.youtube.com/watch?v=E3Q3dX0liTM" target="_blank">Cortometraje "La Magia de las Drogas"</a>.</p>
<script>
 function failed(e) {
   // video playback failed - show a message saying why
   switch (e.target.error.code) {
     case e.target.error.MEDIA_ERR_ABORTED:
       alert('You aborted the video playback.');
       break;
     case e.target.error.MEDIA_ERR_NETWORK:
       alert('A network error caused the video download to fail part-way.');
       break;
     case e.target.error.MEDIA_ERR_DECODE:
       alert('The video playback was aborted due to a corruption problem or because the video used features your browser did not support.');
       break;
     case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
       alert('The video could not be loaded, either because the server or network failed or because the format is not supported.');
       break;
     default:
       alert('An unknown error occurred.');
       break;
   }
 }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>