
<!-- START FOOTER -->
<footer class="footer_dark pattern_top background_bg overlay_bg_80" data-img-src="assets/images/footer_bg.jpg">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="index-6.html"><img src="/assets/images/logo_light.png" alt="logo"></a>
                        </div>
                        <p>We’re committed to delivering Halal-certified meals you can trust. Whether you're dining with family or ordering on the go, our platform ensures every bite is pure, satisfying, and in line with your values all from the comfort of your home.</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white social_style1 rounded_social">
                                <?php $__currentLoopData = $socialMediaHandles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php if($handle->social_media === 'facebook'): ?>
                                        <a href="<?php echo e("https://www.facebook.com/" . $handle->handle); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                    <?php elseif($handle->social_media === 'instagram'): ?>
                                        <a href="<?php echo e("https://www.instagram.com/" . $handle->handle); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <?php elseif($handle->social_media === 'youtube'): ?>
                                        <a href="<?php echo e("https://www.youtube.com/" .$handle->handle); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                    <?php elseif($handle->social_media === 'tiktok'): ?>
                                        <a href="<?php echo e("https://www.tiktok.com/@" . $handle->handle); ?>" target="_blank"><i class="fa fa-globe"></i></a>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
        		</div>
                <div class="col-xl-3 col-md-3 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Links</h6>
                        <ul class="widget_links">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('menu')); ?>">Our Menu</a></li>
                            <li><a href="<?php echo e(route('about')); ?>">About us</a> </li>
                            <li><a href="<?php echo e(route('contact')); ?>">Contact us</a></li>

                            <?php if($whatsAppNumber): ?>
                            <li> <a href="https://wa.me/<?php echo e($whatsAppNumber->phone_number); ?>" target="_blank" ><i class="fa fa-whatsapp"></i> Chat us on Whatsapp</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <?php if($firstRestaurantAddress): ?> <li> <i class="ti-location-pin"></i> <p><?php echo e($firstRestaurantAddress->address); ?></p></li> <?php endif; ?>

                            <li><a href="">NomNomBites@gmail.com</a></li>

                            <?php if($firstRestaurantPhoneNumber): ?> <li> <i class="ti-mobile"></i> <p><?php echo e($firstRestaurantPhoneNumber->phone_number); ?></p></li> <?php endif; ?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bottom_footer border-top-tran">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0 text-center"><script>document.write(new Date().getFullYear());</script> &copy;   All Rights Reserved | <span class="text_default">NomNomBites</span></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-center text-md-right">
                                <li><a href="<?php echo e(route('privacy.policy')); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo e(route('terms.conditions')); ?>">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<?php /**PATH C:\xampp\htdocs\laravel-restaurant-main\resources\views/partials/footer.blade.php ENDPATH**/ ?>