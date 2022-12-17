<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('about_page_'.$user_select_lang_slug.'_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
Cancellation policy
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li>Cancellation policy</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(!empty(get_static_option('about_page_about_us_section_status'))): ?>
    <div class="who-we-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content-area">
                        <div class="aboutus-content-block margin-bottom-50">
                            <h4 class="title">Cancellation policy</h4>
                            <p>Cancellation policy Biocore Scientific conferences cover a broad range of research in the Science, Technology, Medical, Pharma, Clinical and Engineering. Biocore Conferences are well planned and the program structure will design in a healthy manner. Our aim is to provide a platform for scientific researchers, educators, scientists, students, resource persons and practitioners to come together and share their research findings with the scientific world which helps to improve sharing of knowledge and easy access to scientific information, between businesses and scientific professionals. The main object is to give the Scientific Community with major exposure to all the areas of the Science and Engineering. All submitted conference papers will be blind peer reviewed by three competent reviewers. The conference abstracts and proceedings book, certificate of presentation will be distributed to the conference participants at the conference registration desk. The post conference proceedings will be abstracted and indexed in the respective Biocore Journals and submitted to be indexed in the Google Scholar, J-Gate and ICMJE. Each abstract will receive a DOI provided by Cross Ref. The registration fee includes the publication of one accepted paper of up to 6 pages in the conference proceeding.</p>
                        </div>
                
                    </div>
                </div>
                
            </div>
            <div class="row">
                <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="icon-box-three margin-bottom-25">
                        <div class="icon">
                            <i class="<?php echo e($data->icon); ?>"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><?php echo e($data->title); ?></h4>
                            <p><?php echo e($data->excerpt); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <hr>
        </div>
    </div>
<?php endif; ?>
<?php if(!empty(get_static_option('about_page_know_about_section_status'))): ?>
    <section class="our-work-area padding-top-110 padding-bottom-120 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title desktop-center margin-bottom-55">
                        <h2 class="title"><?php echo e(get_static_option('about_page_'.$user_select_lang_slug.'_know_about_section_title')); ?></h2>
                        <p><?php echo e(get_static_option('about_page_'.$user_select_lang_slug.'_know_about_section_description')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $all_know_about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-work-item-02">
                        <div class="thumb">
                            <?php echo render_image_markup_by_attachment_id($data->image,'','grid'); ?>

                        </div>
                        <div class="content">
                            <a href="<?php echo e($data->link); ?>"><h4 class="title"><?php echo e($data->title); ?></h4></a>
                            <p><?php echo e($data->description); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
<?php if(!empty(get_static_option('about_page_call_to_action_section_status'))): ?>
    <section class="cta-area-one cta-bg-one padding-top-95 padding-bottom-100"
             <?php echo render_background_image_markup_by_attachment_id(get_static_option('home_page_01_'.$user_select_lang_slug.'_cta_background_image')); ?>

    >
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content-area">
                        <h3 class="title"><?php echo e(get_static_option('home_page_01_'.$user_select_lang_slug.'_cta_area_title')); ?></h3>
                        <p><?php echo e(get_static_option('home_page_01_'.$user_select_lang_slug.'_cta_area_description')); ?></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content-area">
                        <div class="btn-wrapper">
                            <a href="<?php echo e(get_static_option('home_page_01_'.$user_select_lang_slug.'_cta_area_button_url')); ?>" class="boxed-btn btn-rounded white"><?php echo e(get_static_option('home_page_01_'.$user_select_lang_slug.'_cta_area_button_title')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/pages/cancellation-policy.blade.php ENDPATH**/ ?>