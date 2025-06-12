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

    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<?php $__env->stopPush(); ?>


<?php $__env->startSection('title', 'Checkout'); ?>


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
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/checkout_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Checkout</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<form method="post" action="<?php echo e(route('customer.proccess.checkout')); ?>">
<!-- CSRF Token for Security -->
<?php echo csrf_field(); ?>
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <?php echo $__env->make('partials.message-bag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
        <div class="row">
        	<div class="col-lg-6">
                <div  class="row">

                    <!-- Name -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Name *">
                    </div>

                    <!-- Email -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email Address *">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="tel" name="phone_number" value="<?php echo e(old('phone_number')); ?>" placeholder="Phone Number *">
                    </div>

                    <!-- Address -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="text" name="address" value="<?php echo e(old('address')); ?>" placeholder="Address *">
                    </div>

                    <!-- City -->
                    <div class="form-group col-md-6">
                        <input class="form-control" required type="text" name="city" value="<?php echo e(old('city')); ?>" placeholder="City / Town *">
                    </div>

                    <!-- State -->
                    <div class="form-group col-md-6">
                        <input class="form-control" required type="text" name="state" value="<?php echo e(old('state')); ?>" placeholder="State *">
                    </div>

                    <!-- County (Optional) -->
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="county" value="<?php echo e(old('county')); ?>" placeholder="County (Optional)">
                    </div>

                    <!-- Postcode -->
                    <div class="form-group col-md-6">
                        <input class="form-control" required type="text" name="postcode" value="<?php echo e(old('postcode')); ?>" placeholder="Postcode / ZIP *">
                    </div>

                    <!-- Additional Information -->
                    <div class="form-group mb-0 mt-2 col-md-12">
                        <div class="heading_s1">
                            <h4>Additional Information</h4>
                        </div>
                        <textarea rows="4" class="form-control" name="additional_info" placeholder="e.g., allergies or any other information you want to provide"><?php echo e(old('additional_info')); ?></textarea>
                    </div> 
                </div>
            
            </div>
            <div class="col-lg-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item['name']); ?> <span class="product-qty">x <?php echo e($item['quantity']); ?></span></td>
                                    <td><?php echo $site_settings->currency_symbol; ?><?php echo e(number_format($item['price'] * $item['quantity'], 2)); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td class="product-subtotal"><?php echo $site_settings->currency_symbol; ?><?php echo e(number_format($subtotal, 2)); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="heading_s1">
                            <h4>Payment</h4>
                        </div>
                        <div class="payment_option">
                
                   
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5" checked="">
                                <label class="form-check-label" for="exampleRadios5">Stribe Payment</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start">
                            <button onclick="window.location.href='<?php echo e(route('customer.cart')); ?>'" type="button" class="btn btn-secondary btn-block">Return to Cart</button>
                        </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-default btn-block">Place Order</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</form>

<?php $__env->stopSection(); ?>



 
<?php echo $__env->make('layouts.main-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/main-site/checkout.blade.php ENDPATH**/ ?>