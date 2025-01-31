<?php
$content = content('contact.content');
?>

<section class="s-pt-100 s-pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
               
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <form action="<?php echo e(route('contact')); ?>" method="post" role="form" class="php ">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>

                    <div class="mt-3">
                        <button class="sp_theme_btn w-100" type="submit"><?php echo e(__('Send Message')); ?></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact-info-wrapper mt-5">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <div class="contact-info-box-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="contact-info-box-content">
                            <h4 class="title"><?php echo e(__('Location')); ?>:</h4>
                            <p><?php echo e(__(@$content->data->location)); ?></p>

                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <div class="contact-info-box-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="contact-info-box-content">
                            <h4 class="title"><?php echo e(__('Email')); ?>:</h4>
                            <p><?php echo e(__(@$content->data->email)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <div class="contact-info-box-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info-box-content">
                            <h4 class="title"><?php echo e(__('Call')); ?>:</h4>
                            <p><?php echo e(__(@$content->data->phone)); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
<div class="map-area">
    <iframe class="map" src="<?php echo e(@$general->map_link); ?>" frameborder="0" allowfullscreen></iframe>
</div>
<?php /**PATH /home/safeasse/domains/safeassetsunion.com/public_html/core/resources/views/frontend/sections/contact.blade.php ENDPATH**/ ?>