<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="<?php echo e(config('site.name')); ?>" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Best restaurant experience, don't miss out on <?php echo e(config('site.name')); ?>.">
<meta name="keywords" content="African food, Fast Food, cafe, bar, BBQ, restaurant, sushi, steakhouse, pizza, Mexican Food, menu, meat, Breakfast, Lunch, Dinner, Delicious, Tasty, Snack, Wine, Cola">

<!-- SITE TITLE -->
<title><?php echo e(config('site.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon_io/favicon.ico" />

<?php echo $__env->yieldPushContent('styles'); ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>

<!-- LOADER -->
<div id="preloader">
	<div class="loader_wrap">
        <div class="sk-chase">
          <div class="sk-chase-dot"></div>
          <div class="sk-chase-dot"></div>
          <div class="sk-chase-dot"></div>
          <div class="sk-chase-dot"></div>
          <div class="sk-chase-dot"></div>
          <div class="sk-chase-dot"></div>
        </div>
    </div>
</div>
<!-- END LOADER --> 
 <?php echo $__env->yieldContent('header'); ?>

 <?php echo $__env->yieldContent('content'); ?>
 
 <?php echo $__env->make('partials.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->yieldPushContent('scripts'); ?>

<?php if($liveChatScript && $liveChatScript->script_code): ?>
    <?php echo $liveChatScript->script_code; ?>

<?php endif; ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/layouts/main-site.blade.php ENDPATH**/ ?>