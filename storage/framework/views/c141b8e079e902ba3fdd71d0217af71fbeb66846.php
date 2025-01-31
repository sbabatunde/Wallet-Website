<?php
$content = content('blog.content');
$blogs = element('blog.element')->take(6);
?>

<section class="s-pt-100 s-pb-100 separator-bg">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="sp_site_header">
                    <h2 class="sp_site_title"><?php echo e(__(@$content->data->title)); ?></h2>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $comment = App\Models\Comment::where('blog_id', $blog->id)->count();
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-box">
                        <div class="blog-box-thumb">
                            <img src="<?php echo e(getFile('blog', @$blog->data->image)); ?>" alt="image">
                        </div>
                        <div class="blog-box-content">
                            <span class="blog-category"><?php echo e(@$blog->data->tag); ?></span>
                            <h3 class="title"><a
                                    href="<?php echo e(route('blog', [@$blog->id, Str::slug(@$blog->data->title)])); ?>"><?php echo e(@$blog->data->title); ?></a>
                            </h3>
                            <ul class="blog-meta">
                                <li><i class="fas fa-clock"></i> <?php echo e(@$blog->created_at->diffforhumans()); ?></li>
                                <li><i class="fas fa-comment"></i> <?php echo e($comment); ?> <?php echo e(__('comments')); ?></li>
                            </ul>
                            <p class="mb-0 mt-3"><?php echo e(@$blog->data->short_description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
</section>
<?php /**PATH /home/safeasse/domains/safeassetsunion.com/public_html/core/resources/views/theme2/sections/blog.blade.php ENDPATH**/ ?>