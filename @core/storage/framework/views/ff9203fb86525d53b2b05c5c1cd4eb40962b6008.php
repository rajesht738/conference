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
                    <?php echo render_menu_by_id($primary_menu_id); ?>

                </ul>
            </div>
            
        </div>
    </nav>
    <!-- navbar area end -->
</div><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/partials/navbar-03.blade.php ENDPATH**/ ?>