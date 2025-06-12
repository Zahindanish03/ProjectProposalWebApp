<!-- resources/views/home.blade.php -->



<?php $__env->startPush('styles'); ?>


    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- DatePicker CSS -->
    <link href="/assets/css/datepicker.min.css" rel="stylesheet">
    <!-- TimePicker CSS -->
    <link href="/assets/css/mdtimepicker.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="/assets/color/theme-red.css">


    <!-- FancyBox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
<?php $__env->stopPush(); ?>


<?php $__env->startPush('scripts'); ?>
    <!-- Latest jQuery -->
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="/assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="/assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="/assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <!-- jquery.countTo js  -->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!-- imagesloaded js -->
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="/assets/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="/assets/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- DatePicker js -->
    <script src="/assets/js/datepicker.min.js"></script>
    <!-- TimePicker js -->
    <script src="/assets/js/mdtimepicker.min.js"></script>
    <!-- scripts js -->
    <script src="/assets/js/scripts.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<?php if(session('success') || session('error')): ?>
<script>
    $(document).ready(function() {
        $.fancybox.open({
            src: '<div class="row" style="width:350px; position: relative;">' +
                    <?php if(session('success')): ?>
                        '<div class="alert alert-success" role="alert">' +
                            '<i class="fa fa-check-circle" style="font-size: 20px;"></i> <?php echo e(session('success')); ?>' +
                        '</div>' +
                    <?php elseif(session('error')): ?>
                        '<div class="alert alert-danger" role="alert">' +
                            '<i class="fa fa-exclamation-circle" style="font-size: 20px;"></i> <?php echo e(session('error')); ?>' +
                        '</div>' +
                    <?php endif; ?>
                    '<button type="button" class="btn-close" aria-label="Close" style="position: absolute; top: 10px; right: 10px; border: none; background: transparent;">' +
                        '<i class="fa fa-times" style="font-size: 20px;"></i>' +
                    '</button>' +
                 '</div>',
            type: 'html',
            opts: {
                padding: 20,
                width: 'auto',
                height: 'auto',
                maxWidth: 500,
                maxHeight: 'auto',
                modal: false,
                clickOutside: true,
                afterShow: function(instance, current) {
                    $('.btn-close').on('click', function() {
                        $.fancybox.close();
                    });
                }
            }
        });
    });
</script>
<?php endif; ?>




<?php $__env->stopPush(); ?>


<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('header'); ?>
    <!-- START HEADER -->
    <header class="header_wrap fixed-top light_skin sticky_light_skin main_menu_uppercase transparent_header dd_light_skin">

     <!--   <header class="header_wrap fixed-top header_with_topbar dark_skin main_menu_uppercase" style="background-color:black;"> -->

        <div class="container">

            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </header>
    <!-- END HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<!-- START SECTION BANNER -->
<div class="banner_section full_screen staggered-animation-wrap pattern_banner_bottom">
    <div id="carouselExampleControls" class="carousel slide carousel-fade carousel_style2 light_arrow" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_40" data-img-src="/assets/images/banner5.jpg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="banner_content2 text_white">
                                    <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">Tasty Halal Delights</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">Discover bold, delicious flavors at NOMNOMBite food made with passion and precision. <br class="d-none d-md-block" /> Where every bite reflects our Halal heritage and brings joy to your table.</p>
                                    <a class="btn btn-default rounded-0 staggered-animation" href="<?php echo e(route('menu')); ?>" data-animation="fadeInUp" data-animation-delay="0.6s">Order Online</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="/assets/images/banner2.jpg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                                <div class="banner_content2 text_white">
                                    <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">Choose & Savor</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">The finest Halal meals, prepared with care and delivered to your door. <br class="d-none d-md-block" /> Authentic, Halal, and made for moments that matter.</p>
                                    <a class="btn btn-default rounded-0 staggered-animation" href="<?php echo e(route('menu')); ?>" data-animation="fadeInUp" data-animation-delay="0.6s">Order Online</a>
                                    <a class="btn btn-white rounded-0 staggered-animation" href="<?php echo e(route('contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.6s">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_40" data-img-src="/assets/images/banner6.jpg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-md-end">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="banner_content2 text_white">
                                    <h4 class="staggered-animation text_default" data-animation="fadeInUp" data-animation-delay="0.2s">Are You Ready</h4>
                                    <h2 class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.2s">Enjoy Every Bite</h2>
                                    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s">From trusted Halal kitchens, crafted for your comfort and satisfaction. <br class="d-none d-md-block" /></p>
                                    <a class="btn btn-default rounded-0 staggered-animation" href="<?php echo e(route('menu')); ?>" data-animation="fadeInUp" data-animation-delay="0.6s">Order Online</a>
                                    <a class="btn btn-white rounded-0 staggered-animation" href="<?php echo e(route('contact')); ?>" data-animation="fadeInUp" data-animation-delay="0.6s">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- END SECTION BANNER -->




    <!-- START SECTION OUR MENU -->
    <div class="section pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="heading_s1 animation text-center" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="sub_heading font_style1">Special Food</div>
                        <h2>from Our Menu</h2>
                    </div>
                    <div class="small_divider clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="row">


                        <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                        <div class="d-flex col-lg-3 col-sm-6">
                            <div class="single_product">
                                <a href="<?php echo e(route('menu.item',$menu->id)); ?>">
                                <div class="menu_product_img">
                                    <img src="<?php echo e(asset('storage/' . $menu->image)); ?>" alt="<?php echo e($menu->name); ?> img" >
                                </div>
                                </a>
                                <div class="menu_product_info">
                                    <div class="title">
                                        <h5><a href="<?php echo e(route('menu.item',$menu->id)); ?>"> <?php echo e($menu->name); ?></a></h5>
                                    </div>
                                    <p><?php echo $site_settings->currency_symbol; ?><?php echo e(number_format($menu->price, 2)); ?></p>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <b> No Menu available. </b>
                        <?php endif; ?>



                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION OUR MENU -->

<!-- START SECTION CTA -->
<div class="section background_bg" data-img-src="/assets/images/cta_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 animation text-center" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="heading_s1 heading_light">
                    <span class="sub_heading font_style1">Experience True Flavor</span>
                    <h2>Where Every Bite Brings Us Together</h2>
                </div>
                <p class="text-white">Celebrate the joy of dining with authentic Halal dishes thoughtfully crafted to unite hearts, families, and friends at every meal.</p>
                <a class="btn btn-white rounded-0" href="<?php echo e(route('menu')); ?>">Order Now</a>
                <div class="large_divider clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION CTA -->


    <!-- START SECTION BOOK TABLE -->
    <div class="section pt-0 small_pb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overlap_table_box">
                        <div class="row align-content-end flex-row-reverse">
                            <div class="col-lg-7 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <div class="book_table">
                                    <div class="medium_divider clearfix"></div>
                                    <div class="heading_s1 mb-md-0">
                                        <span class="sub_heading font_style1">Reservations</span>
                                        <h2>Book A Table</h2>
                                    </div>
                                    <div class="small_divider clearfix"></div>
                                    <div class="field_form form_style1">
                                        <form method="post" action="<?php echo e(route('table.booking')); ?>" name="enq">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <div class="input_group">
                                                        <input required="required" placeholder="Name" class="form-control rounded-0" name="name" type="text">
                                                        <div class="input_icon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input_group">
                                                        <input required="required" placeholder="Email Address" class="form-control rounded-0" name="email" type="email">
                                                        <div class="input_icon">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input_group">
                                                        <input placeholder="Time" class="form-control rounded-0 timepicker" data-theme="red" name="time" type="text">
                                                        <div class="input_icon">
                                                            <i class="far fa-clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input_group">
                                                        <input required="required" placeholder="Mobile No." class="form-control rounded-0" name="phone" type="tel">
                                                        <div class="input_icon">
                                                            <i class="ti-mobile"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="input_group">
                                                        <input placeholder="Select Date" class="form-control rounded-0 datepicker" name="date" type="text">
                                                        <div class="input_icon">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="custom_select">
                                                        <select class="form-control rounded-0" name="persons">
                                                            <option value="">Select Person</option>
                                                            <option value="1">1 Person</option>
                                                            <option value="2">2 Persons</option>
                                                            <option value="3">3 Persons</option>
                                                            <option value="4">4 Persons</option>
                                                            <option value="5">5 Persons</option>
                                                            <option value="6">6 Persons</option>
                                                            <option value="7">7 Persons</option>
                                                            <option value="8">8 Persons</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" title="Submit Your Message!" class="btn btn-default rounded-0" name="submit" value="Submit">Book Now</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="medium_divider clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="chef_image">
                                    <img src="/assets/images/chef.png" alt="chef"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BOOK TABLE -->


<!-- START SECTION TESTIMONIAL -->
<div class="section bg_linen pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="heading_s1 text-center">
                    <span class="sub_heading font_style1">Testimonial</span>
                    <h2>Our Customers Say!</h2>
                </div>
                <p class="text-center leads">Hear what our happy customers have to say about their experience with us.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                <div class="testimonial_slider testimonial_style2 carousel_slider owl-carousel owl-theme" data-margin="10" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "3"}}'>

                    <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="testimonial_box">
                        <div class="author_info">
                            <div class="author_name">
                                <h5><?php echo e($testimony->name); ?></h5>
                             </div>
                        </div>
                        <div class="testimonial_desc">
                            <p><?php echo e(Str::limit($testimony->content, 300)); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/main-site/index.blade.php ENDPATH**/ ?>