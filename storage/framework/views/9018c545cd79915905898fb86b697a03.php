<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
        <img class="logo_light" src="/assets/images/logo_light.png" alt="logo">
        <img class="logo_dark" src="/assets/images/logo_dark.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
        <span class="ion-android-menu"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li>  <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::routeIs('home') ? 'active' : ''); ?>">Home</a> </li>
            <li>  <a href="<?php echo e(route('menu')); ?>" class="nav-link <?php echo e(Request::is('menu*') ? 'active' : ''); ?>">Menu</a> </li>
            <li>  <a href="<?php echo e(route('about')); ?>" class="nav-link <?php echo e(Request::routeIs('about') ? 'active' : ''); ?>">About</a> </li>
            <li> <a href="<?php echo e(route('contact')); ?>" class="nav-link <?php echo e(Request::routeIs('contact') ? 'active' : ''); ?>">Contact</a> </li>
            <?php if(Auth::check()): ?>
                <li> <a href="<?php echo e(route('admin.index')); ?>" class="nav-link">Admin Dashboard</a> </li>
                <li> <a  data-bs-toggle="modal" data-bs-target="#logoutModal" href="#" class="nav-link">Logout</a> </li>
            <?php endif; ?>


        </ul>

    </div>
    <ul class="navbar-nav attr-nav align-items-center">
        <li><a class="nav-link <?php echo e(Request::routeIs('cart') ? 'active' : ''); ?>" href="<?php echo e(route('customer.cart')); ?>" ><i class="linearicons-cart"></i><span class="cart_count" id="cart_count"><?php echo e($customer_total_cart_items); ?></span></a></li>
    </ul>
    <?php if($firstRestaurantPhoneNumber): ?>
    <div class="header_btn d-sm-block d-none">
        <a href="tel:<?php echo e($firstRestaurantPhoneNumber->phone_number); ?>" class="btn btn-default rounded-0 ml-2 btn-sm"><i class="fa fa-phone"></i> CALL US</a>
    </div>
    <?php endif; ?>

</nav>

<?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/partials/nav.blade.php ENDPATH**/ ?>