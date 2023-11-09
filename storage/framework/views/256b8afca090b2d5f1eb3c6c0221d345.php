

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('components/GameServers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('components/Questions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.baseLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\laravel\hostlariz\resources\views/pages/gameServers.blade.php ENDPATH**/ ?>