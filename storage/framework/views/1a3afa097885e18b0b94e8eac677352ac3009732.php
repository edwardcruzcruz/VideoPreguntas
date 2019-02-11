
<!doctype html>

<html>

<head>
   <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>
<?php echo $__env->yieldContent('content'); ?>
</body>

</html>
