<?php $img_url = '';?>

<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url" content="<?php echo e(route('frontend.work.single', $work_item->slug)); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo e($work_item->title); ?>" />
    <?php echo render_og_meta_image_by_attachment_id($work_item->image); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($work_item->title); ?> - <?php echo e(get_static_option('work_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('work_page_' . $user_select_lang_slug . '_name')); ?>: <?php echo e($work_item->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li><?php echo e($work_item->title); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-tags'); ?>
    <meta name="description" content="<?php echo e($work_item->meta_tags); ?>">
    <meta name="tags" content="<?php echo e($work_item->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('edit_link'); ?>
    <li><a target="_blank" href="<?php echo e(route('admin.work.edit', $work_item->id)); ?>"><i class="far fa-edit"></i>
            <?php echo e(__('Edit Works')); ?></a></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('slider'); ?>

    <!-- banner area start  -->
    <div class="banner-area banner-area1 pos-rel">
        <div class="swiper-container slider__active">
            <div class="swiper-wrapper">
                <?php
                    $gallery_item = $work_item->gallery ? explode('|', $work_item->gallery) : [];
                ?>
                <?php if(!empty($gallery_item)): ?>
                    <?php $__currentLoopData = $gallery_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
            <div class="swiper-slide" data-background="">
             <div class="single-banner single-banner-1 banner-overlay-1 banner-835 d-flex align-items-center pos-rel">
                <div class="banner-bg banner-bg1 banner-bg1-1">
                  <?php echo render_image_markup_by_attachment_id($gall); ?>

                </div>
                                <div class="container pos-rel">
                                    <div class="row align-items-center" style="display: flex;text-align: center; justify-content: center;flex-direction: column;">
                                        <div class="col-xl-6 col-lg-7 col-md-8">
                                            <div class="banner-content banner-content1 banner-content1-1 pt-40">

                                                <h1 class="banner-title white-color" data-animation="fadeInUp"data-delay=".8s"><?php echo e($work_item->title); ?></h1>
                                                <p class="banner-text" data-animation="fadeInUp" data-delay="1.0s">
                                                    <?php echo e($work_item->clients); ?> <br>
                                                    <?php echo e($work_item->start_date); ?> to <?php echo e($work_item->end_date); ?> </p>
                                                <div class="banner-btn one" data-animation="fadeInUp" data-delay="1.2s">
                                                    <a class="theme-btn yellow"
                                                        href="http://conf.micropowersystem.org/conferences/<?php echo e($work_item->slug); ?>/abstract-submission">Submit
                                                        Abstract <i class="fal fa-arrow-alt-right"></i></a>
                                                    <a class="theme-btn red"
                                                        href="http://conf.micropowersystem.org/conferences/<?php echo e($work_item->slug); ?>/key-dates">Register
                                                        <i class="fal fa-arrow-alt-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- banner area end  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="conf-new padding-120" style="background: white;
color: lightseagreen;">
        <div class="row">
            <div class="container">
                <div class="alert alert-light alert-dismissible fade show sticky-kit shadow-sm rounded-0 mb-0"
                    role="alert" style="">
                    <div class="row justify-content-center">
                        <?php echo $work_item->notice; ?>

                    </div>
                    <button class="close mt-md-2" type="button" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
            </div>
        </div>
    </section>
    <div class="work-details-content-area ">
        
        <section id="conf-team">

            <div class="row">
                <div class="container">
                    <h3 style="color: #fff;
                padding-bottom: 20px;">The Best of <?php echo $work_item->title; ?></h3>
                    <div class="row">
                        <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="row" style="padding: 12px;">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <?php echo render_image_markup_by_attachment_id($data->image, 'grid'); ?>

                                            <div class="hover">
                                                <ul class="social-icon">
                                                    <?php if(!empty($data->icon_one) && !empty($data->icon_one_url)): ?>
                                                        <li><a href="<?php echo e($data->icon_one_url); ?>"><i
                                                                    class="<?php echo e($data->icon_one); ?>"></i></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($data->icon_two) && !empty($data->icon_two_url)): ?>
                                                        <li><a href="<?php echo e($data->icon_two_url); ?>"><i
                                                                    class="<?php echo e($data->icon_two); ?>"></i></a></li>
                                                    <?php endif; ?>
                                                    <?php if(!empty($data->icon_three) && !empty($data->icon_three_url)): ?>
                                                        <li><a href="<?php echo e($data->icon_three_url); ?>"><i
                                                                    class="<?php echo e($data->icon_three); ?>"></i></a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content">
                                            <p class="name" style="font-size: 18px; color:white"><?php echo e($data->name); ?></p>
                                            <span class="post"><?php echo e($data->designation); ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12">
                            <div class="pagination-wrapper">
                                <?php echo e($all_team_members->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="conf-glimps">

            <div class="row">
                <div class="container">
                    <h3 style="color: #fff;
                padding-bottom: 20px;">Glimpse of <?php echo $work_item->title; ?></h3>
                    <div class="col-lg-12">

                        <div class="section-title margin-bottom-55">
                            <h2 class="title"></h2>
                        </div>
                   
                        <?php echo $work_item->sponsherships; ?>

                    </div>


                </div>
            </div>
        </section>


        <section id="conf-why-we-attend">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 conf-about">
                        <div class="portfolio-details-item">
                            <h3 style="">About Us</h3>
                            <div class="post-description">
                                <?php echo $work_item->description; ?>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 conf-wytoattend">

                        
                        <div class="post-description">
                            <?php echo $work_item->why_do_attend; ?>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    <section id="conf-topic">
        <div class="row">
            <div class="container">
                <?php echo $work_item->conference_topics; ?>

                <hr style="border-top: 2px solid yellow;">
            </div>

        </div>
    </section>
    <section id="conf-submitAbstract">
        <div class="row">
            <div class="container sumitAbstractWrapper">
                <div class="col-xl-9 col-lg-9 text-center">
                    <h3 class="mb-3 ls text-white fs-md-2 fs-lg-3">Submit Your Abstract</h3>
                    <p class="lead font-weight-light text-400">All submitted conference papers will be blind peer reviewed
                        by three competent reviewers. The conference proceedings book, certificate of presentation will be
                        distributed to the conference participants at the venue during conference dates. The post-conference
                        proceedings will be abstracted and indexed in the respective Biocore Journals and submitted to be
                        indexed in the Google Scholar, J-Gate, and ICMJE. Each abstract will receive a DOI provided by Cross
                        Ref. The registration fee includes the publication of one accepted paper of up to 6 pages in the
                        conference proceeding. :
                        <a href="mailto:contact@biocoreconferences.com"
                            style="color:#fff;text-transform:lowercase">contact@biocoreconferences.com
                        </a>
                    </p>
                    <a class="btn btn-lg btn-danger rounded-capsule mt-4"
                        href="http://conf.micropowersystem.org/conferences/<?php echo e($work_item->slug); ?>/abstract-submission"
                        title="Closed!" data-fancyscroll="data-fancyscroll">Submit now</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            
            <div class="row">
                <?php if(get_static_option('contact_page_form_section_status') == 'on'): ?>
                    <div class="col-lg-4">
                        <div class="left-content-area">
                            <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo e(route('frontend.contact.message')); ?>" method="post"
                                enctype="multipart/form-data" id="contact_form_submit" class="contact-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="captcha_token" id="gcaptcha_token">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php echo render_form_field_for_frontend(get_static_option('contact_page_form_fields')); ?>

                                    </div>
                                    <div class="col-lg-12">
                                        <button class="submit-btn" type="submit"><?php echo e(__('Send Message')); ?></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg-8 mt-4 mt-lg-0 d-flex flex-column justify-content-between">
                    <div class="row fs-1">
                        <div class="col-md-5 border-400 pr-md-4">
                            <h3>Social Connects</h3>
                            
                            
                            
                            <li class="my-1"><span class="fa-li pr-2" style="left: -1em; position: unset;"><i
                                        class="fab fa-facebook"></i></span><a href="https://facebook.com">Facebook</a>
                            </li>
                            <li><span class="fa-li pr-2" style="left: -1em; position: unset;"><i
                                        class="fab fa-twitter"></i></span><a href="https://twitter.com/vaccinesummitdc"
                                    target="_blank">Twitter </a></li>
                            <li><span class="fa-li pr-2" style="left: -1em; position: unset;"><i
                                        class="fab fa-linkedin-in"></i></span><a
                                    href="https://twitter.com/vaccinesummitdc" target="_blank">Linkdin </a></li>

                        </div>
                        <?php if(get_static_option('contact_page_google_map_section_status') == 'on'): ?>
                            <div id="map" class="col-md-5 contact_page_map">
                                
                                <ul>
                                    <li> <a href="#conf-topic">Speaker Guidelines</a></li>
                                    <li><a href="http://conf.micropowersystem.org/conferences">Biocore Conferences</a></li>
                                    <li><a href="https://biocoreopen.org/" target="_blank">Biocore Journals</a></li>
                                    <li><a href="<?php echo e(url('')); ?>/privacy_policy" target="_blank">Privacy Policy</a></li>
                                    <li><a href="<?php echo e(url('')); ?>/term_condition" target="_blank">Terms and Conditions</a></li>
                                    <li><a href="<?php echo e(url('')); ?>/cancellation_policy" target="_blank">Cancellation policy</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="footerTop">

        <div class="container">
            <div class="row" style="padding:25px;">
                <div class="col-md-9 px-2">
                    <h3 class="text-white mb-4">Our Journals </h3>
                    <div class="row">
                        <div class="col-md-12 px-2">
                            <div class="ui accordion ml-2">
                                <div class="title active text-400 font-weight-bold" style="display:none;"><i
                                        class="dropdown icon"></i> MEET THE EXPERTS</div>
                                <div class="content active ml-4 text-200 mt-0">
                                    <p class="transition visible" style="display: block !important;">
                                        <?php echo $work_item->our_generals; ?></p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0">
                    <div class="col-lg-12 mt-4 mt-lg-0 d-flex flex-column justify-content-between">
                        <div class="row mb-5">
                            <div class="col-md-12 col-md-6 border-400 pr-md-4">
                                <ul class="fa-ul mb-0">
                                    <li class="font-weight-bold mb-2"><span class="fa-li pr-2"><svg
                                                class="svg-inline--fa fa-map fa-w-18" aria-hidden="true"
                                                data-prefix="fas" data-icon="map" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M0 117.66v346.32c0 11.32 11.43 19.06 21.94 14.86L160 416V32L20.12 87.95A32.006 32.006 0 0 0 0 117.66zM192 416l192 64V96L192 32v384zM554.06 33.16L416 96v384l139.88-55.95A31.996 31.996 0 0 0 576 394.34V48.02c0-11.32-11.43-19.06-21.94-14.86z">
                                                </path>
                                            </svg><!-- <i class="fas fa-map"></i> --></span>Biocore Meetings</li>

                                </ul>
                                <ul class="fa-ul mb-0">
                                    <li class="mb-2"><span class="fa-li pr-2"><svg
                                                class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true"
                                                data-prefix="fas" data-icon="phone" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                                </path>
                                            </svg><!-- <i class="fas fa-phone"></i> --></span><a
                                            href="tel:3212853144">+1-321-2853144</a></li>
                                    <li><span class="fa-li pr-2"><svg class="svg-inline--fa fa-envelope fa-w-16"
                                                aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                </path>
                                            </svg><!-- <i class="fas fa-envelope"></i> --></span>
                                        <a href="mailto:contact@biocoreconferences.com"
                                            style="text-transform: lowercase;">contact@biocoreconferences.com</a>
                                    </li>
                                    </li>
                                    <li><span class="fa-li pr-2"><svg class="svg-inline--fa fa-linkedin-in fa-w-14"
                                                aria-hidden="true" data-prefix="fab" data-icon="linkedin-in"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z">
                                                </path>
                                            </svg><!-- <i class="fab fa-linkedin-in"></i> --></span><a
                                            href="https://www.linkedin.com/in/" target="_blank">Linkedin</a></li>
                                    

                                </ul>
                            </div>
                        </div>
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.561343955882!2d-77.55907528468641!3d37.636004879784906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1154a27b1fed9%3A0x99bd352721aefc71!2s3400%20Copper%20Mill%20Trace%2C%20Richmond%2C%20VA%2023294%2C%20USA!5e0!3m2!1sen!2sin!4v1575607761281!5m2!1sen!2sin" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-confpage-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/pages/works/conf-single.blade.php ENDPATH**/ ?>