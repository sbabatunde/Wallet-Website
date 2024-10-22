<?php
$content = content('contact.content');
$contentlink = content('footer.content');
$footersociallink = element('footer.element');
$serviceElements = element('service.element');

?>

<footer class="footer-section cover-image">
    <div class="footer-logo-portion">
        <div class="container">
            <div class="row gy-3 align-items-center">
             

                <div class="col-lg-12 text-center">
                    <a href="<?php echo e(route('home')); ?>" class="footer-logo">
                        <?php if(@$general->logo): ?>
                           <center> <img class="img-fluid rounded sm-device-img text-align"
                                src="<?php echo e(getFile('logo', @$general->logo)); ?>" width="100%" alt="pp"></center>
                        <?php else: ?>
                            <?php echo e(__('No Logo Found')); ?>

                        <?php endif; ?>
                    </a>
                </div>

              
            </div>
        </div>
    </div>

    <div class="footer-menu-portion">
        <div class="container">
            <div class="row gy-2">
               
                <div class="col-lg-12 text-center">
                    <p class="mb-0">
                       Copyright 2024. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /home/safeasse/domains/safeassetsunion.com/public_html/core/resources/views/theme2/layout/footer.blade.php ENDPATH**/ ?>