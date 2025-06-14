<?php $__env->startPush('styles'); ?>
    
    
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">	
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- DatePicker CSS -->
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    <!-- TimePicker CSS -->
    <link href="assets/css/mdtimepicker.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="assets/color/theme-red.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
 
    <!-- Latest jQuery --> 
    <script src="assets/js/jquery-1.12.4.min.js"></script> 
    <!-- Latest compiled and minified Bootstrap --> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
    <!-- owl-carousel min js  --> 
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
    <!-- magnific-popup min js  --> 
    <script src="assets/js/magnific-popup.min.js"></script> 
    <!-- waypoints min js  --> 
    <script src="assets/js/waypoints.min.js"></script> 
    <!-- parallax js  --> 
    <script src="assets/js/parallax.js"></script> 
    <!-- countdown js  --> 
    <script src="assets/js/jquery.countdown.min.js"></script> 
    <!-- jquery.countTo js  -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!-- imagesloaded js --> 
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js --> 
    <script src="assets/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- DatePicker js -->
    <script src="assets/js/datepicker.min.js"></script>
    <!-- TimePicker js -->
    <script src="assets/js/mdtimepicker.min.js"></script>
    <!-- scripts js --> 
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('title', 'Blog'); ?>


<?php $__env->startSection('header'); ?>
    <!-- START HEADER -->
        <header class="header_wrap fixed-top header_with_topbar light_skin main_menu_uppercase">
        <div class="container">
            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </header>
    <!-- END HEADER -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

 <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/blog_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Blog</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

    <!-- START SECTION BLOG-->
    <div class="section">
        <div class="container">


            <form action="<?php echo e(route('blogs')); ?>" method="GET" class="mb-5">

                <div class="form-group">
                    <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="<?php echo e(request('search')); ?>">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-sm btn-danger"  ><i class="linearicons-magnifier"></i> Search</button>
                      </div>
                    </div>
                  </div>
      
                  <?php if(request('search')): ?>
                  <div class="alert alert-info mt-3">
                    <strong>Search Results:</strong>
                    We found <strong><?php echo e($blogs->total()); ?></strong> 
                    <?php echo e($blogs->total() === 1 ? 'result' : 'results'); ?> for your query 
                    <em>"<?php echo e(request('search')); ?>"</em>.
                    <hr/>
                    <a href="<?php echo e(route('blogs')); ?>" class="btn-sm btn btn-light">Return to Blogs</a>
                </div>
              <?php endif; ?>
                  
            </form>
 
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="d-flex col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="blog_post blog_style1 box_shadow1">
                            <div class="blog_img">
                                <a href="<?php echo e(route('blog.view', $blog->id)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="blog_small_img1">
                                </a>
                                <span class="post_date">
                                    <strong><?php echo e($blog->created_at->format('d')); ?></strong> <?php echo e($blog->created_at->format('M')); ?>

                                </span>
                            </div>
                            <div class="blog_content">
                                <div class="blog_text">
                                    <h5 class="blog_title"><a href="#"><?php echo e($blog->name); ?></a></h5>
                                    <p><?php echo e(Str::limit(strip_tags($blog->content), 50)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if(!request('search')): ?>
                        <div class="col-12">                   
                            <div class="alert alert-warning text-center" role="alert">
                                No blogs found.
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <?php echo e($blogs->links('vendor.pagination.custom')); ?>

           
            
        </div>
    </div> 
    <!-- END SECTION BLOG-->
<?php $__env->stopSection(); ?>



 
<?php echo $__env->make('layouts.main-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/main-site/blogs.blade.php ENDPATH**/ ?>