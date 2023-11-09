<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOSTLARIZ</title>

        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/gif" sizes="16x16">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <!--Meta Tags
        ==================================================-->
        <?php echo $__env->make('components/meta2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- CSS Files
        ================================================== -->
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" id="bootstrap">
        <link href="<?php echo e(asset('css/plugins.css')); ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo e(asset('css/swiper.css')); ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo e(asset('css/coloring.css')); ?>" rel="stylesheet" type="text/css" >
        <!-- color scheme -->
        <link id="colors" href="<?php echo e(asset('css/colors/scheme-01.css')); ?>" rel="stylesheet" type="text/css" >
        <meta http-equiv="X-Frame-Options" content="allow">
    

    </head>
    <body class="dark-scheme" style="background-size: cover; background-repeat: no-repeat;">
        <div id="wrapper" style="background-size: cover; background-repeat: no-repeat;">
            <?php echo $__env->make('components/Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('components/Scroll/Text', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('components/Scroll/Loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('components/Loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="no-bottom no-top" id="content" style="background-size: cover; background-repeat: no-repeat;">
                <div id="top" style="background-size: cover; background-repeat: no-repeat;"></div>
            <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('components/Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js/designesia.js')); ?>"></script>
    <script src="<?php echo e(asset('js/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom-marquee.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom-swiper-1.js')); ?>"></script>
    </body>
</html>
<?php /**PATH E:\Projects\laravel\hostlariz\resources\views/layouts/baseLayout.blade.php ENDPATH**/ ?>