<div class="header-style-04">
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
                    
                    <?php echo render_menu_by_id(34); ?>

                </ul>
            </div>
            <div class="nav-right-content">
                <?php if(!empty(get_static_option('hide_frontend_language_change_option'))): ?>
                    <div class="language_dropdown" id="languages_selector">
                        <div class="selected-language"><?php echo e(get_language_name_by_slug(get_user_lang())); ?> <i class="fas fa-caret-down"></i></div>
                        <ul>
                            <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-value="<?php echo e($lang->slug); ?>"><?php echo e($lang->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <!-- navbar area end -->
</div><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/partials/navbarconf-03.blade.php ENDPATH**/ ?>