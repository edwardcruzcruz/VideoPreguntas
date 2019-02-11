 
<?php $__env->startSection('content'); ?>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Prueba de video con Laravel
                </div>

                <div class="links">
                    <a class="test" href="<?php echo e(URL::to('video')); ?>">Ver video</a>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>