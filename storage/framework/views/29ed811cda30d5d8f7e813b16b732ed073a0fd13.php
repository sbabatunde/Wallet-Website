<?php
$content = content('howitwork.content');
$elements = element('howitwork.element')->take(8);
?>

<section id="how-start" class="s-pt-100 s-pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="sp_site_header">
                    <h2 class="sp_site_title"><?php echo e(__(@$content->data->title)); ?></h2>
                </div>
            </div>
        </div>

        <div class="row gy-5 work-wrapper">
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="work-box">
                        <div class="icon">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="content">
                            <h3 class="title"><?php echo e(__(@$element->data->title)); ?></h3>
                            <p><?= clean($element->data->short_description) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\review\safeassetsunion.com\public_html\core\resources\views/theme2/sections/howitwork.blade.php ENDPATH**/ ?>