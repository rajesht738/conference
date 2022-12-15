<?php echo $__env->make('frontend.partials.conf-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php $inner_page_navbar = 'navbar-01' ?>
 <?php echo $__env->make('frontend.partials.'.$inner_page_navbar, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 <?php echo $__env->yieldContent('slider'); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.partials.footer-conf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/frontend-confpage-master.blade.php ENDPATH**/ ?>