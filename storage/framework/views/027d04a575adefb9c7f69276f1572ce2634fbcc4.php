   <?php
       $content = content('about.content');
   ?>

   <section class="about-section s-pt-100 s-pb-100 dark-bg">
       <div class="shape-el">
           <img src="<?php echo e(getFile('about', 'flow-chart.png')); ?>" alt="image">
       </div>
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <div class="about-thumb">
                       <div class="about-thumb-inner">
                           <img src="<?php echo e(getFile('about', @$content->data->image)); ?>" alt="image">
                           <div class="about-thumb-line about-thumb-line-one"></div>
                           <div class="about-thumb-line about-thumb-line-two"></div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6">
                   <h2 class="site-title"><?php echo e(__(@$content->data->title)); ?></h2>
                   <p class="text-white text-justifys descripton-root">
                       <?php
                       echo clean(@$content->data->description);
                       ?>
                   </p>
                   <a href="<?php echo e(__(@$content->data->button_text_link)); ?>" class="sp_theme_btn mt-4"><?php echo e(__(@$content->data->button_text)); ?></a>
               </div>
           </div>

       </div>
   </section><?php /**PATH /home/safeasse/domains/safeassetsunion.com/public_html/core/resources/views/frontend/sections/about.blade.php ENDPATH**/ ?>