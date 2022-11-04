]<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="<?php echo e(route('admin.home')); ?>">
                <?php
                    $logo_type = 'site_logo';
                        if(!empty(get_static_option('site_admin_dark_mode'))){
                            $logo_type = 'site_white_logo';
                        }
                ?>
                <?php echo render_image_markup_by_attachment_id(get_static_option($logo_type)); ?>

            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="main_dropdown <?php echo e(active_menu('admin-home')); ?>">
                        <a href="<?php echo e(route('admin.home')); ?>"
                           aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span><?php echo app('translator')->get('dashboard'); ?></span>
                        </a>
                    </li>
                 <?php if(check_page_permission('admin_role_manage')): ?>
                        <li
                                class="main_dropdown
                        <?php echo e(active_menu('admin-home/new-user')); ?>

                                <?php echo e(active_menu('admin-home/all-user')); ?>

                                <?php echo e(active_menu('admin-home/all-user/role')); ?>

                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i>
                                <span><?php echo e(__('Admin Role Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/all-user')); ?>"><a
                                            href="<?php echo e(route('admin.all.user')); ?>"><?php echo e(__('All Admin')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-user')); ?>"><a
                                            href="<?php echo e(route('admin.new.user')); ?>"><?php echo e(__('Add New Admin')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/all-user/role')); ?>"><a
                                            href="<?php echo e(route('admin.all.user.role')); ?>"><?php echo e(__('All Admin Role')); ?></a></li>
                            </ul>
                        </li>
                  <?php endif; ?>
                    
                    <li
                            class="main_dropdown
                        <?php echo e(active_menu('admin-home/widgets')); ?>

                            <?php if(request()->is('admin-home/widgets/*')): ?> active <?php endif; ?>
                                    ">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                            <span><?php echo e(__('Widgets Manage')); ?></span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/widgets')); ?>"><a
                                        href="<?php echo e(route('admin.widgets')); ?>"><?php echo e(__('All Widgets')); ?></a></li>
                        </ul>
                    </li>
                    
                    <?php if(check_page_permission('form_builder')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/form-builder/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Form Builder')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/form-builder/quote-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.quote')); ?>"><?php echo e(__('Quote Form')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/order-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.order')); ?>"><?php echo e(__('Order Form')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/contact-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.contact')); ?>"><?php echo e(__('Contact Form')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/call-back-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.call.back')); ?>"><?php echo e(__('Request Call Back Form')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/job-apply-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.job.apply')); ?>"><?php echo e(__('Job Apply Form')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/form-builder/event-booking-form')); ?>"><a
                                            href="<?php echo e(route('admin.form.builder.event.booking')); ?>"><?php echo e(__('Event Booking Form')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('menus_manage')): ?>
                        <li
                                class="main_dropdown
                        <?php echo e(active_menu('admin-home/menu')); ?>

                                <?php if(request()->is('admin-home/menu-edit/*')): ?> active <?php endif; ?>
                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Menus Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/menu')); ?>"><a
                                            href="<?php echo e(route('admin.menu')); ?>"><?php echo e(__('All Menus')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('newsletter_manage')): ?>
                        <li
                                class="main_dropdown
                            <?php echo e(active_menu('admin-home/newsletter')); ?>

                                <?php if(request()->is('admin-home/newsletter/*')): ?> active <?php endif; ?>
                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-email"></i>
                                <span><?php echo e(__('Newsletter Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/newsletter')); ?>"><a
                                            href="<?php echo e(route('admin.newsletter')); ?>"><?php echo e(__('All Subscriber')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/newsletter/all')); ?>"><a
                                            href="<?php echo e(route('admin.newsletter.mail')); ?>"><?php echo e(__('Send Mail To All')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('quote_manage')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/quote-manage/*')): ?> active <?php endif; ?> ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-quote-left"></i>
                                <span><?php echo e(__('Quote Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/quote-manage/all')); ?>"><a
                                            href="<?php echo e(route('admin.quote.manage.all')); ?>"><?php echo e(__('All Quote')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/quote-manage/pending')); ?>"><a
                                            href="<?php echo e(route('admin.quote.manage.pending')); ?>"><?php echo e(__('Pending Quote')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/quote-manage/completed')); ?>"><a
                                            href="<?php echo e(route('admin.quote.manage.completed')); ?>"><?php echo e(__('Complete Quote')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('order_manage')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/order-manage/*')): ?> active <?php endif; ?> ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-light-bulb"></i>
                                <span><?php echo e(__('Package Order Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/order-manage/all')); ?>"><a
                                            href="<?php echo e(route('admin.order.manage.all')); ?>"><?php echo e(__('All Order')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/order-manage/pending')); ?>"><a
                                            href="<?php echo e(route('admin.order.manage.pending')); ?>"><?php echo e(__('Pending Order')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/order-manage/in-progress')); ?>"><a
                                            href="<?php echo e(route('admin.order.manage.in.progress')); ?>"><?php echo e(__('In Progress Order')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/order-manage/completed')); ?>"><a
                                            href="<?php echo e(route('admin.order.manage.completed')); ?>"><?php echo e(__('Completed Order')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/order-manage/success-page')); ?>"><a
                                            href="<?php echo e(route('admin.order.success.page')); ?>"><?php echo e(__('Success Order Page')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/order-manage/cancel-page')); ?>"><a
                                            href="<?php echo e(route('admin.order.cancel.page')); ?>"><?php echo e(__('Cancel Order Page')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('all_payment_logs')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/payment-logs')); ?>">
                            <a href="<?php echo e(route('admin.payment.logs')); ?>"
                               aria-expanded="true">
                                <i class="ti-file"></i>
                                <span><?php echo e(__('All Payment Logs')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('pages')): ?>
                        <li
                                class="main_dropdown
                        <?php echo e(active_menu('admin-home/page')); ?>

                                <?php echo e(active_menu('admin-home/new-page')); ?>

                                <?php if(request()->is('admin-home/page-edit/*')): ?> active <?php endif; ?>
                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Pages Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/page')); ?>"><a
                                            href="<?php echo e(route('admin.page')); ?>"><?php echo e(__('All Pages')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-page')); ?>"><a
                                            href="<?php echo e(route('admin.page.new')); ?>"><?php echo e(__('Add New Page')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('blogs')): ?>
                        <li
                                class="main_dropdown
                                <?php echo e(active_menu('admin-home/blog')); ?>

                                <?php echo e(active_menu('admin-home/blog-category')); ?>

                                <?php echo e(active_menu('admin-home/new-blog')); ?>

                                <?php echo e(active_menu('admin-home/blog-page')); ?>

                                <?php echo e(active_menu('admin-home/blog-single-page')); ?>

                                <?php if(request()->is('admin-home/blog-edit/*')): ?> active <?php endif; ?>
                                "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Blogs Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/blog')); ?>"><a
                                            href="<?php echo e(route('admin.blog')); ?>"><?php echo e(__('All Blog')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog-category')); ?>"><a
                                            href="<?php echo e(route('admin.blog.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-blog')); ?>"><a
                                            href="<?php echo e(route('admin.blog.new')); ?>"><?php echo e(__('Add New Post')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog-page')); ?>"><a
                                            href="<?php echo e(route('admin.blog.page')); ?>"><?php echo e(__('Blog page settings')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog-single-page')); ?>"><a
                                            href="<?php echo e(route('admin.blog.single.page')); ?>"><?php echo e(__('Blog Single Page settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('job_post_manage')): ?>
                        <li
                                class="main_dropdown
                        <?php echo e(active_menu('admin-home/jobs')); ?>

                                <?php if(request()->is('admin-home/jobs/*')): ?> active <?php endif; ?>
                                        "
                        >
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Job Post Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/jobs')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.all')); ?>"><?php echo e(__('All Jobs')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/jobs/category')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.category.all')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/jobs/new')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.new')); ?>"><?php echo e(__('Add New Job')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/jobs/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.page.settings')); ?>"><?php echo e(__('Job Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/jobs/applicant')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.applicant')); ?>"><?php echo e(__('All Applicant')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/jobs/applicant/report')); ?>"><a
                                            href="<?php echo e(route('admin.jobs.applicant.report')); ?>"><?php echo e(__('Applicant Report')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('events_manage')): ?>
                        <li class="main_dropdown
                    <?php echo e(active_menu('admin-home/events')); ?>

                        <?php if(request()->is('admin-home/events/*')): ?> active <?php endif; ?>
                                ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Events Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/events')); ?>"><a
                                            href="<?php echo e(route('admin.events.all')); ?>"><?php echo e(__('All Events')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/category')); ?>"><a
                                            href="<?php echo e(route('admin.events.category.all')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/new')); ?>"><a
                                            href="<?php echo e(route('admin.events.new')); ?>"><?php echo e(__('Add New Event')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.events.page.settings')); ?>"><?php echo e(__('Event Page Settings')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/single-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.events.single.page.settings')); ?>"><?php echo e(__('Event Single Settings')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/attendance')); ?>"><a
                                            href="<?php echo e(route('admin.events.attendance')); ?>"><?php echo e(__('Event Attendance')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/events/event-attendance-logs')); ?>"><a
                                            href="<?php echo e(route('admin.event.attendance.logs')); ?>"><?php echo e(__('Event Attendance Logs')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/events/event-payment-logs')); ?>"><a
                                            href="<?php echo e(route('admin.event.payment.logs')); ?>"><?php echo e(__('Event Payment Logs')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/events/payment-success-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.events.payment.success.page.settings')); ?>"><?php echo e(__('Payment Success Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/events/payment-cancel-pag-settings')); ?>"><a
                                            href="<?php echo e(route('admin.events.payment.cancel.page.settings')); ?>"><?php echo e(__('Payment Cancel Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/events/attendance/report')); ?>"><a
                                            href="<?php echo e(route('admin.event.attendance.report')); ?>"><?php echo e(__('Attendance Report')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/events/payment/report')); ?>"><a
                                            href="<?php echo e(route('admin.event.payment.report')); ?>"><?php echo e(__('Payment Log Report')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                        <li class="main_dropdown
                        <?php echo e(active_menu('admin-home/products')); ?>

                        <?php if(request()->is('admin-home/products/*')): ?> active <?php endif; ?>
                            ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Products Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/products')); ?>"><a
                                            href="<?php echo e(route('admin.products.all')); ?>"><?php echo e(__('All Products')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/products/new')); ?>"><a
                                            href="<?php echo e(route('admin.products.new')); ?>"><?php echo e(__('Add New Product')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/products/category')); ?>"><a
                                            href="<?php echo e(route('admin.products.category.all')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/products/shipping')); ?>"><a
                                            href="<?php echo e(route('admin.products.shipping.all')); ?>"><?php echo e(__('Shipping')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/products/coupon')); ?>"><a
                                            href="<?php echo e(route('admin.products.coupon.all')); ?>"><?php echo e(__('Coupon')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/products/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.products.page.settings')); ?>"><?php echo e(__('Product Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/single-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.products.single.page.settings')); ?>"><?php echo e(__('Product Single Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/success-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.products.success.page.settings')); ?>"><?php echo e(__('Order Success Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/cancel-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.products.cancel.page.settings')); ?>"><?php echo e(__('Order Cancel Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/product-order-logs')); ?>"><a
                                            href="<?php echo e(route('admin.products.order.logs')); ?>"><?php echo e(__('Orders')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/product-ratings')); ?>"><a
                                            href="<?php echo e(route('admin.products.ratings')); ?>"><?php echo e(__('Ratings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/order-report')); ?>">
                                    <a href="<?php echo e(route('admin.products.order.report')); ?>"><?php echo e(__('Order Report')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/products/tax-settings')); ?>">
                                    <a href="<?php echo e(route('admin.products.tax.settings')); ?>"><?php echo e(__('Tax Settings')); ?></a>
                                </li>
                            </ul>
                        </li>


                        <li class="main_dropdown
                    <?php echo e(active_menu('admin-home/donations')); ?>

                        <?php if(request()->is('admin-home/donations/*')): ?> active <?php endif; ?>
                                ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Donations Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/donations')); ?>"><a
                                            href="<?php echo e(route('admin.donations.all')); ?>"><?php echo e(__('All Donations')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/new')); ?>"><a
                                            href="<?php echo e(route('admin.donations.new')); ?>"><?php echo e(__('Add New Donation')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.donations.page.settings')); ?>"><?php echo e(__('Donation Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/single-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.donations.single.page.settings')); ?>"><?php echo e(__('Donation Single Settings')); ?></a>
                                </li>

                                <li class="<?php echo e(active_menu('admin-home/donations/donations-payment-logs')); ?>"><a
                                            href="<?php echo e(route('admin.donations.payment.logs')); ?>"><?php echo e(__('Donation Payment Logs')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/payment-success-page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.donations.payment.success.page.settings')); ?>"><?php echo e(__('Payment Success Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/payment-cancel-pag-settings')); ?>"><a
                                            href="<?php echo e(route('admin.donations.payment.cancel.page.settings')); ?>"><?php echo e(__('Payment Cancel Page Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/donations/report')); ?>">
                                    <a href="<?php echo e(route('admin.donations.report')); ?>"><?php echo e(__('Donation Report')); ?></a>
                                </li>
                            </ul>
                        </li>

                    <?php if(check_page_permission('knowledgebase')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/knowledge')); ?> <?php if(request()->is('admin-home/knowledge/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Knowledgebase')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/knowledge')); ?>"><a
                                            href="<?php echo e(route('admin.knowledge.all')); ?>"><?php echo e(__('All Articles')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/knowledge/category')); ?>"><a
                                            href="<?php echo e(route('admin.knowledge.category.all')); ?>"><?php echo e(__('Topics')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/new-knowledge')); ?>"><a
                                            href="<?php echo e(route('admin.knowledge.new')); ?>"><?php echo e(__('Add New Article')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/knowledge/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.knowledge.page.settings')); ?>"><?php echo e(__('Knowledgebase Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('home_variant')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/home-variant')); ?>">
                            <a href="<?php echo e(route('admin.home.variant')); ?>"
                               aria-expanded="true">
                                <i class="ti-file"></i>
                                <span><?php echo e(__('Home Variant')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('nabvar_settings')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/navbar-settings')); ?>">
                            <a href="<?php echo e(route('admin.navbar.settings')); ?>"
                               aria-expanded="true">
                                <i class="ti-file"></i>
                                <span><?php echo e(__('Nabvar Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('home_page_manage')): ?>
                        <li class="main_dropdown
                        <?php if(request()->is('admin-home/home-page-01/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/job-home/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/charity-home/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/knowledge-home/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/event-home/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/product-home/*')  ): ?> active <?php endif; ?>
                        <?php if(request()->is('admin-home/service-home/*')  ): ?> active <?php endif; ?>
                        <?php echo e(active_menu('admin-home/header')); ?>

                        <?php echo e(active_menu('admin-home/keyfeatures')); ?>

                                ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Home Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <?php if(get_static_option('home_page_variant') == '06'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/header-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.header.area')); ?>">
                                            <?php echo e(__('Header Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/video-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.video.area')); ?>">
                                            <?php echo e(__('Video Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/our-services-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.our.service.area')); ?>">
                                            <?php echo e(__('Our Services Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/counterup-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.counterup.area')); ?>">
                                            <?php echo e(__('Counterup Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/work-process-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.work.process.area')); ?>">
                                            <?php echo e(__('Work Process Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/news-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.news.area')); ?>">
                                            <?php echo e(__('News Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/service-home/testimonial-area')); ?>">
                                        <a href="<?php echo e(route('admin.service.home.testimonial.area')); ?>">
                                            <?php echo e(__('Testimonial Area')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if(get_static_option('home_page_variant') == '08'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/header-slider')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.header.slider')); ?>">
                                            <?php echo e(__('Header Slider Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/featured-product')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.feature.product')); ?>">
                                            <?php echo e(__('Featured Product Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/decorate-area')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.decorate.area')); ?>">
                                            <?php echo e(__('Decorate Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/latest-product-area')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.latest.product.area')); ?>">
                                            <?php echo e(__('Latest Product Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/testimonial-area')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.testimonial.area')); ?>">
                                            <?php echo e(__('Testimonial Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/product-home/cta-area')); ?>">
                                        <a href="<?php echo e(route('admin.product.home.cta.area')); ?>">
                                            <?php echo e(__('Call To Action Area')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if(get_static_option('home_page_variant') == '07'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/featured-event')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.featured.event')); ?>">
                                            <?php echo e(__('Featured Event Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/attend-event')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.attend.event')); ?>">
                                            <?php echo e(__('Why Attend Event Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/event-speaker-area')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.event.speaker.area')); ?>">
                                            <?php echo e(__('Event Speaker Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/counterup-area')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.counterup.area')); ?>">
                                            <?php echo e(__('Counterup Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/upcoming-event-area')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.upcoming.event.area')); ?>">
                                            <?php echo e(__('Upcoming Event Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/our-sponsors-area')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.our.sponsors.area')); ?>">
                                            <?php echo e(__('Sponsors Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/event-home/latest-blog-area')); ?>">
                                        <a href="<?php echo e(route('admin.event.home.latest.blog.area')); ?>">
                                            <?php echo e(__('Latest Blog Area')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>


                                <?php if(get_static_option('home_page_variant') == '09'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/icon-box-area')); ?>">
                                        <a href="<?php echo e(route('admin.charity.home.icon.box.area')); ?>">
                                            <?php echo e(__('Icon Box Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/about-area')); ?>">
                                        <a href="<?php echo e(route('admin.charity.home.about.area')); ?>">
                                            <?php echo e(__('About Us Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/service-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.service.area')); ?>"><?php echo e(__('Service Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/recent-cause')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.recent.cause')); ?>"><?php echo e(__('Recent Cause Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/our-gallery')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.our.gallery')); ?>"><?php echo e(__('Our Gallery Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/event-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.event.area')); ?>"><?php echo e(__('Event Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/counterup-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.counterup.area')); ?>"><?php echo e(__('Counterup Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/team-member-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.team.member.area')); ?>"><?php echo e(__('Team Member Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/testimonial-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.testimonial.area')); ?>"><?php echo e(__('Testimonial Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/charity-home/new-block-area')); ?>"><a
                                                href="<?php echo e(route('admin.charity.home.news.blog.area')); ?>"><?php echo e(__('News & Blog Area')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(get_static_option('home_page_variant') == '05'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/knowledge-home/header')); ?>">
                                        <a href="<?php echo e(route('admin.knowledge.home.header')); ?>">
                                            <?php echo e(__('Header Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/knowledge-home/highlight-box')); ?>">
                                        <a href="<?php echo e(route('admin.knowledge.home.highlight.box')); ?>">
                                            <?php echo e(__('Highlight Box Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/knowledge-home/popular-article')); ?>">
                                        <a href="<?php echo e(route('admin.knowledge.home.popular.article')); ?>">
                                            <?php echo e(__('Popular Article Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/knowledge-home/faq-area')); ?>">
                                        <a href="<?php echo e(route('admin.knowledge.home.faq.area')); ?>"><?php echo e(__('FAQ Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/team-member')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.team.member')); ?>"><?php echo e(__('Team Member Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/knowledge-home/cta-area')); ?>">
                                        <a href="<?php echo e(route('admin.knowledge.home.cta.area')); ?>"><?php echo e(__('Call To Action Area')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(get_static_option('home_page_variant') == '10'): ?>
                                    <li class="<?php echo e(active_menu('admin-home/job-home/header')); ?>">
                                        <a href="<?php echo e(route('admin.job.home.header')); ?>">
                                            <?php echo e(__('Header Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/job-home/featured-job')); ?>">
                                        <a href="<?php echo e(route('admin.job.home.featured.job.area')); ?>">
                                            <?php echo e(__('Featured Job Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/job-home/millions-job-area')); ?>">
                                        <a href="<?php echo e(route('admin.job.home.millions.job.area')); ?>">
                                            <?php echo e(__('Millions Job Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/job-home/latest-job-area')); ?>">
                                        <a href="<?php echo e(route('admin.job.home.latest.job.area')); ?>">
                                            <?php echo e(__('Latest Job Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/latest-news')); ?>">
                                        <a href="<?php echo e(route('admin.homeone.latest.news')); ?>"><?php echo e(__('Latest News Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/job-home/testimonial-area')); ?>">
                                        <a href="<?php echo e(route('admin.job.home.testimonial.area')); ?>">
                                            <?php echo e(__('Testimonial Area')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if(
                                get_static_option('home_page_variant') == '01' ||
                                get_static_option('home_page_variant') == '02' ||
                                get_static_option('home_page_variant') == '03' ||
                                get_static_option('home_page_variant') == '04'
                                ): ?>
                                    <li class="<?php echo e(active_menu('admin-home/header')); ?>">
                                        <a href="<?php echo e(route('admin.header')); ?>">
                                            <?php echo e(__('Header Area')); ?>

                                        </a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/keyfeatures')); ?>">
                                        <a href="<?php echo e(route('admin.keyfeatures')); ?>"><?php echo e(__('Key Features')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/about-us')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.about.us')); ?>"><?php echo e(__('About Us Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/service-area')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.service.area')); ?>"><?php echo e(__('Service Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/cta-area')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.cta.area')); ?>"><?php echo e(__('Call To Action Area')); ?></a>
                                    </li>

                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/recent-work')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.recent.work')); ?>"><?php echo e(__('Recent Work Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/testimonial')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.testimonial')); ?>"><?php echo e(__('Testimonial Area')); ?></a>
                                    </li>
                                    <?php if(get_static_option('home_page_variant') == '03'): ?>
                                        <li class="<?php echo e(active_menu('admin-home/home-page-01/faq-area')); ?>"><a
                                                    href="<?php echo e(route('admin.homeone.faq.area')); ?>"><?php echo e(__('FAQ Area')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/latest-news')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.latest.news')); ?>"><?php echo e(__('Latest News Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/team-member')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.team.member')); ?>"><?php echo e(__('Team Member Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/price-plan')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.price.plan')); ?>"><?php echo e(__('Price Plan Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/counterup')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.counterup')); ?>"><?php echo e(__('Counterup Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/newsletter')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.newsletter')); ?>"><?php echo e(__('Newsletter Area')); ?></a>
                                    </li>
                                    <li class="<?php echo e(active_menu('admin-home/home-page-01/section-manage')); ?>"><a
                                                href="<?php echo e(route('admin.homeone.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li class="main_dropdown  <?php if(request()->is('admin-home/gigs/*')  ): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)"
                           aria-expanded="true">
                            <i class="ti-home"></i>
                            <span><?php echo e(__('Gigs Manage')); ?></span>
                        </a>
                        <ul class="collapse">
                            <li class="<?php echo e(active_menu('admin-home/gigs/all')); ?>">
                                <a href="<?php echo e(route('admin.gigs.all')); ?>"><?php echo e(__('All Gigs')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/new')); ?>">
                                <a href="<?php echo e(route('admin.gigs.new')); ?>"><?php echo e(__('New Gig')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/category')); ?>">
                                <a href="<?php echo e(route('admin.gigs.category')); ?>"><?php echo e(__('Category')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/page')); ?>">
                                <a href="<?php echo e(route('admin.gigs.page.settings')); ?>"><?php echo e(__('Gigs Page Settings')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/single-page')); ?>">
                                <a href="<?php echo e(route('admin.gigs.single.page.settings')); ?>"><?php echo e(__('Gigs Single Page Settings')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/success-page')); ?>">
                                <a href="<?php echo e(route('admin.gigs.success.page.settings')); ?>"><?php echo e(__('Order Success Settings')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/cancel-page')); ?>">
                                <a href="<?php echo e(route('admin.gigs.cancel.page.settings')); ?>"><?php echo e(__('Order Cancel Settings')); ?></a>
                            </li>
                            <li class="<?php echo e(active_menu('admin-home/gigs/orders')); ?>">
                                <a href="<?php echo e(route('admin.gigs.orders')); ?>"><?php echo e(__('Gigs Order Manage')); ?></a>
                            </li>
                        </ul>
                    </li>


                        <li class="main_dropdown  <?php if(request()->is('admin-home/gallery/*')  ): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Gallery Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/gallery/all')); ?>">
                                    <a href="<?php echo e(route('admin.gallery.all')); ?>"><?php echo e(__('Gallery Items')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/gallery/category')); ?>">
                                    <a href="<?php echo e(route('admin.gallery.category')); ?>"><?php echo e(__('Category')); ?></a>
                                </li>
                            </ul>
                        </li>


                        <li class="main_dropdown <?php echo e(active_menu('admin-home/404-page-manage')); ?>">
                            <a href="<?php echo e(route('admin.404.page.settings')); ?>" aria-expanded="true"><i class="ti-control-forward"></i>
                                <span><?php echo e(__('404 Page Manage')); ?></span></a>
                        </li>

                    <?php if(check_page_permission('about_page_manage')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/about-page/*')  ): ?> active <?php endif; ?> ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('About Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/about-page/about-us')); ?>"><a
                                            href="<?php echo e(route('admin.about.page.about')); ?>"><?php echo e(__('About Us Section')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/about-page/know-about')); ?>"><a
                                            href="<?php echo e(route('admin.about.know')); ?>"><?php echo e(__('Know Us Section')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/about-page/section-manage')); ?>"><a
                                            href="<?php echo e(route('admin.about.page.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('contact_page_manage')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/contact-page/*')  ): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-home"></i>
                                <span><?php echo e(__('Contact Page Manage')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/contact-page/contact-info')); ?>"><a
                                            href="<?php echo e(route('admin.contact.info')); ?>"><?php echo e(__('Contact Info')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/contact-page/form-area')); ?>"><a
                                            href="<?php echo e(route('admin.contact.page.form.area')); ?>"><?php echo e(__('Form Area')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/contact-page/map')); ?>"><a
                                            href="<?php echo e(route('admin.contact.page.map')); ?>"><?php echo e(__('Google Map Area')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('quote_page_manage')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/quote-page')); ?>">
                            <a href="<?php echo e(route('admin.quote.page')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Quote Page Manage')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('order_page_manage')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/order-page')); ?>">
                            <a href="<?php echo e(route('admin.order.page')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Order Page Manage')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('price_plan_page_manage')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/price-plan-page/settings')); ?>">
                            <a href="<?php echo e(route('admin.price.plan.page.settings')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Price Plan Page Manage')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('top_bar_settings')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/topbar')); ?>">
                            <a href="<?php echo e(route('admin.topbar')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Top Bar Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('services')): ?>
                        <li class="main_dropdown
                        <?php if(request()->is('admin-home/services/*')): ?> active <?php endif; ?>
                        <?php echo e(active_menu('admin-home/services')); ?>

                                ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Services')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/services')); ?>">
                                    <a href="<?php echo e(route('admin.services')); ?>"><?php echo e(__('All Services')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/services/new')); ?>">
                                    <a href="<?php echo e(route('admin.services.new')); ?>"><?php echo e(__('New Services')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/services/category')); ?>">
                                    <a href="<?php echo e(route('admin.service.category')); ?>"><?php echo e(__('Category')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/services/single-page-settings')); ?>">
                                    <a href="<?php echo e(route('admin.services.single.page.settings')); ?>"><?php echo e(__('Service Single Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('works')): ?>
                        <li class="main_dropdown
                        <?php if(request()->is('admin-home/works/*')): ?> active <?php endif; ?>
                        <?php echo e(active_menu('admin-home/works')); ?>

                                ">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span>Conferences</span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/works')); ?>">
                                    <a href="<?php echo e(route('admin.work')); ?>">All Conferences</a></li>
                                <li class="<?php echo e(active_menu('admin-home/works/new')); ?>">
                                    <a href="<?php echo e(route('admin.work.new')); ?>">New Conference</a></li>
                                <li class="<?php echo e(active_menu('admin-home/works/category')); ?>">
                                    <a href="<?php echo e(route('admin.work.category')); ?>">Conference Category</a></li>
                                <li class="<?php echo e(active_menu('admin-home/works/work-page-settings')); ?>">
                                    <a href="<?php echo e(route('admin.work.page.settings')); ?>">Conference Page Manage</a></li>
                                <li class="<?php echo e(active_menu('admin-home/works/single-page-settings')); ?>">
                                    <a href="<?php echo e(route('admin.work.single.page.settings')); ?>">Conference Single Page Manage</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission('faq')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/faq')); ?>">
                            <a href="<?php echo e(route('admin.faq')); ?>" aria-expanded="true"><i class="ti-control-forward"></i>
                                <span><?php echo e(__('Faq')); ?></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('brand_logos')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/brands')); ?>">
                            <a href="<?php echo e(route('admin.brands')); ?>" aria-expanded="true"><i class="ti-control-forward"></i>
                                <span><?php echo e(__('Brand Logos')); ?></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('price_plan')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/price-plan')); ?>">
                            <a href="<?php echo e(route('admin.price.plan')); ?>" aria-expanded="true"><i
                                        class="ti-control-forward"></i>
                                <span><?php echo e(__('Price Plan')); ?></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('team_members')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/team-member')); ?>">
                            <a href="<?php echo e(route('admin.team.member')); ?>" aria-expanded="true"><i
                                        class="ti-control-forward"></i>
                                <span><?php echo e(__('Team Members')); ?></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('testimonial')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/testimonial')); ?>">
                            <a href="<?php echo e(route('admin.testimonial')); ?>" aria-expanded="true"><i
                                        class="ti-control-forward"></i>
                                <span><?php echo e(__('Testimonial')); ?></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('counterup')): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/counterup')); ?>">
                            <a href="<?php echo e(route('admin.counterup')); ?>" aria-expanded="true"><i
                                        class="ti-exchange-vertical"></i>
                                <span><?php echo e(__('Counterup')); ?></span></a>
                        </li>
                    <?php endif; ?>

                    <?php if(!empty(get_static_option('site_maintenance_mode'))): ?>
                        <li class="main_dropdown <?php echo e(active_menu('admin-home/maintains-page/settings')); ?>">
                            <a href="<?php echo e(route('admin.maintains.page.settings')); ?>"
                               aria-expanded="true">
                                <i class="ti-dashboard"></i>
                                <span><?php echo e(__('Maintain Page Manage')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                        <li class="main_dropdown <?php if(request()->is('admin-home/popup-builder/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)"
                               aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Popup Builder')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/popup-builder/all')); ?>"><a
                                            href="<?php echo e(route('admin.popup.builder.all')); ?>"><?php echo e(__('All Popup')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/popup-builder/new')); ?>"><a
                                            href="<?php echo e(route('admin.popup.builder.new')); ?>"><?php echo e(__('New Popup')); ?></a></li>
                            </ul>
                        </li>


                    <?php if(check_page_permission('general_settings')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/general-settings/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i>
                                <span><?php echo e(__('General Settings')); ?></span></a>
                            <ul class="collapse ">
                                <li class="<?php echo e(active_menu('admin-home/general-settings/site-identity')); ?>"><a
                                            href="<?php echo e(route('admin.general.site.identity')); ?>"><?php echo e(__('Site Identity')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/basic-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.basic.settings')); ?>"><?php echo e(__('Basic Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/typography-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.typography.settings')); ?>"><?php echo e(__('Typography Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/seo-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.seo.settings')); ?>"><?php echo e(__('SEO Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/scripts')); ?>"><a
                                            href="<?php echo e(route('admin.general.scripts.settings')); ?>"><?php echo e(__('Third Party Scripts')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/email-template')); ?>"><a
                                            href="<?php echo e(route('admin.general.email.template')); ?>"><?php echo e(__('Email Template')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/email-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.email.settings')); ?>"><?php echo e(__('Email Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/smtp-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.smtp.settings')); ?>"><?php echo e(__('SMTP Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/regenerate-image')); ?>"><a
                                            href="<?php echo e(route('admin.general.regenerate.thumbnail')); ?>"><?php echo e(__('Regenerate Media Image')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/permalink-flush')); ?>"><a
                                            href="<?php echo e(route('admin.general.permalink.flush')); ?>"><?php echo e(__('Permalink Flush')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/page-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.page.settings')); ?>"><?php echo e(__('Page Settings')); ?></a>
                                </li>
                                <?php if(!empty(get_static_option('site_payment_gateway'))): ?>
                                    <li class="<?php echo e(active_menu('admin-home/general-settings/payment-settings')); ?>"><a
                                                href="<?php echo e(route('admin.general.payment.settings')); ?>"><?php echo e(__('Payment Gateway Settings')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/custom-css')); ?>"><a
                                            href="<?php echo e(route('admin.general.custom.css')); ?>"><?php echo e(__('Custom CSS')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/custom-js')); ?>"><a
                                            href="<?php echo e(route('admin.general.custom.js')); ?>"><?php echo e(__('Custom JS')); ?></a></li>

                                <li class="<?php echo e(active_menu('admin-home/general-settings/cache-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.cache.settings')); ?>"><?php echo e(__('Cache Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/gdpr-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.gdpr.settings')); ?>"><?php echo e(__('GDPR Compliant Cookies Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/preloader-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.preloader.settings')); ?>"><?php echo e(__('Preloader Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/popup-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.popup.settings')); ?>"><?php echo e(__('Popup Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/module-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.module.settings')); ?>"><?php echo e(__('Module Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/sitemap-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.sitemap.settings')); ?>"><?php echo e(__('Sitemap Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/rss-settings')); ?>"><a
                                            href="<?php echo e(route('admin.general.rss.feed.settings')); ?>"><?php echo e(__('RSS Feed Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/license-setting')); ?>"><a
                                            href="<?php echo e(route('admin.general.license.settings')); ?>"><?php echo e(__('Licence Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('languages')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/languages/*') || request()->is('admin-home/languages') ): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.languages')); ?>" aria-expanded="true"><i class="ti-signal"></i>
                                <span><?php echo e(__('Languages')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\conference\@core\resources\views/backend/partials/_sidebar.blade.php ENDPATH**/ ?>