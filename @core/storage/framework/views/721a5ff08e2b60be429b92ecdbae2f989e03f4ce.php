<?php if(!empty(get_static_option('home_page_support_bar_section_status'))): ?>
    <div class="info-bar-area style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info-bar-inner">
                        <div class="left-content">
                            <ul class="info-items-two">
                                <?php $__currentLoopData = $all_support_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="single-info-item">
                                            <div class="icon">
                                                <i class="<?php echo e($data->icon); ?>"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><?php echo e($data->title); ?>: <span class="details"><?php echo e($data->details); ?></span></h5>

                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            
                        </div>
                        <div class="right-content">
                            <div class="request-quote">
                                <?php $quote_btn_url = !empty(get_static_option('navbar_button_custom_url_status')) ? get_static_option('navbar_button_custom_url') : route('frontend.request.quote'); ?>
                                
                                <a href="<?php echo e($quote_btn_url); ?>" class="rq-btn blank">Submit Abstract <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<nav class="navbar navbar-area navbar-expand-lg nav-style-02">
    <div class="container nav-container">
        <div class="navbar-brand">
            <a href="<?php echo e(url('/')); ?>" class="logo">
                <?php echo render_image_markup_by_attachment_id(get_static_option('site_white_logo')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                <?php echo render_menu_by_id($primary_menu_id); ?>

            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/partials/navbar-02.blade.php ENDPATH**/ ?>