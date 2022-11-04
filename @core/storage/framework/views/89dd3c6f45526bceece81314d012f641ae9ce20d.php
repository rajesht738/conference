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
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php $gallery_item = $work_item->gallery ? explode('|',$work_item->gallery) : []; ?>
            <?php if(!empty($gallery_item)): ?>
                <div class="case-study-gallery-wrapper margin-bottom-30 margin-top-40">
                    <div class="case-study-gallery-carousel owl-carousel">

                        <?php $__currentLoopData = $gallery_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-gallery-item">
                                <div id="slideButton"
                                    style="position: absolute;
                                z-index: 1;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                width: 100%;
                                height: 100%;
                                gap: 5px;
                                ">
                                    <button class="btn btn-boxed btn-primary">Final Programm 2022</button>
                                    <button class="btn btn-boxed btn-primary">Submit Abstract</button>
                                </div>
                                <?php echo render_image_markup_by_attachment_id($gall); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="work-details-content-area padding-120">
        <div class="row">
            <div class="col-lg-12"
                style="border-top: 5px solid #ffffa6;
            border-bottom: 5px solid #f5f5bb;padding-left: 20%;background: #054a33;">
                <?php echo $work_item->sponsherships; ?>

            </div>
        </div>

        <div class="row" style="background: #054a33;">
            <div class="container">
                <div class="row" style="padding-top: 75px;">
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



        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="padding-right: 45px;">
                    <div class="portfolio-details-item">
                        <p style="font-size: 34px;
                       font-weight: 600; color: blue;">About us</p>
                        <div class="post-description">
                            <?php echo $work_item->description; ?>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6" style="padding-left: 45px;">

                    <p style="font-size: 34px;
                    font-weight: 600; color: blue;">Why do attend?</p>
                    <div class="post-description">
                       <p> Vaccines Summit-2022 delivers unlimited opportunities for making business deals, product
                        enhancements, cutting edge solutions for improving and elevating the company’s business and
                        partnership. The conference provides a unique platform for all the leading industry professionals,
                        institutional investors, capitalists, corporate investors and business development executives to
                        have private One-to-One meetings with elite business representatives which increase the chances of
                        marketing in this networking world.
                       </p>
                        <h2>Who can attend?</h2>
                        <ul>
                        <li>Government and non-government officials</li>
                            <li> C-Level Executives</li>
                                <li>Decision Makers</li>
                                    <li>Vice Presidents</li>
                                        <li> Drug developers</li>
                                            <li> Academician</li>
                                                <li>Researchers & Developers</li>
                                                    <li>Directors</li>
                                                        <li>Healthcare professionals</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-confpage-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\conference\@core\resources\views/frontend/pages/works/conf-single.blade.php ENDPATH**/ ?>