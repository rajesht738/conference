<?php echo $__env->make('frontend.partials.conf-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php $inner_page_navbar = 'navbarconf-03' ?>
 <?php echo $__env->make('frontend.partials.'.$inner_page_navbar, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="breadcrumb-area breadcrumb-bg <?php echo e($inner_page_navbar); ?>"
<?php
    $site_breadcrumb_bg = get_attachment_image_by_id(get_static_option('conference_breadcrumb_bg'),"full",false);
?>

<?php if(!empty($site_breadcrumb_bg)): ?>
style="background-image: url(<?php echo e($site_breadcrumb_bg['img_url']); ?>);"
<?php endif; ?>
>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title"><?php echo $__env->yieldContent('page-title'); ?></h1>
                    <ul class="page-list">
                        <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                        <?php if(request()->is(get_static_option('blog_page_slug').'/*') || request()->is(get_static_option('blog_page_slug').'-category'.'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('blog_page_slug')); ?>"><?php echo e(get_static_option('blog_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('work_page_slug').'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('work_page_slug')); ?>"><?php echo e(get_static_option('work_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('service_page_slug').'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('service_page_slug')); ?>"><?php echo e(get_static_option('service_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('product_page_slug').'/*') || request()->is(get_static_option('product_page_slug').'-cart') || request()->is(get_static_option('product_page_slug').'-category'.'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('product_page_slug')); ?>"><?php echo e(get_static_option('product_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('career_with_us_page_slug').'/*') || request()->is(get_static_option('career_with_us_page_slug').'-category'.'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('career_with_us_page_slug')); ?>"><?php echo e(get_static_option('career_with_us_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('events_page_slug').'/*') || request()->is(get_static_option('events_page_slug')) || request()->is(get_static_option('events_page_slug').'-category'.'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('events_page_slug')); ?>"><?php echo e(get_static_option('events_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('knowledgebase_page_slug').'/*') || request()->is(get_static_option('knowledgebase_page_slug').'-category'.'/*')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('knowledgebase_page_slug')); ?>"><?php echo e(get_static_option('knowledgebase_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('donation_page_slug').'/*') || request()->is(get_static_option('donation_page_slug'))): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('donation_page_slug')); ?>"><?php echo e(get_static_option('donation_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php elseif(request()->is(get_static_option('gig_page_slug').'/*') || request()->is(get_static_option('gig_page_slug').'-search')): ?>
                            <li><a href="<?php echo e(url('/').'/'.get_static_option('gig_page_slug')); ?>"><?php echo e(get_static_option('gig_page_' . $user_select_lang_slug . '_name')); ?></a></li>
                        <?php endif; ?>
                        <?php echo $__env->yieldContent('breadcrumb'); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.partials.footer-conf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/frontend-conf-Innerpage-master.blade.php ENDPATH**/ ?>