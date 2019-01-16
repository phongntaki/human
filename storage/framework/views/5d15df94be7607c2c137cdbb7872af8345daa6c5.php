
    <div class="widget widget-weather">
        <div class="weather-block">
            <a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
    </div>

    <!-- Lien he -->
    <div class="widget widget-news" style="background-color: #fceadd;">
        <h3 class="widget-title" style="color: red">Tư vấn trực tiếp</h3>
        <ul class="widget-article-lists" >
            <li class="item" style="color: #348AC9;">
                Mr Phong: 0123456789<br>
                Miss Đinh: 1234567890<br>
                Email: enzi@enzi.vn
            </li>
        </ul>
    </div>
    <!-- -->


    <div class="widget widget-news">
        <h3 class="widget-title">Tin mới nhất</h3>
        <ul class="widget-article-lists">
            <?php $count =0; ?>
            <?php $__currentLoopData = $lasted_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count < 5): ?>
            <li class="item">
                <a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>">
                    <div class="item-image">
                        <img src="<?php echo e(url('/public/img/news/100x100/'.$item_lt->newimg)); ?>" alt="<?php echo e($item_lt->newsname); ?>" />
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title"><?php echo e($item_lt->newsname); ?></h4>
                        <p class="item-date"><i class="fa fa-clock-o"></i><?php echo e($item_lt->created_at->format('Y/m/d')); ?></p>
                    </div>
                </a>
            </li>
        <?php endif; ?>
        <?php  $count = $count +1; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>


    <div class="widget widget-ranking">
        <h3 class="widget-title">Đọc nhiều nhất</h3>
        <ul class="widget-article-lists">
        <?php $count =1; ?>
        <?php $__currentLoopData = $most_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_most): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count <6): ?>
            <li class="item">
                <a href="<?php echo e(url('chi-tiet/'.$item_most->slug)); ?>">
                    <div class="item-image">
                        <p class="item-counter"><?php echo e($count); ?></p>
                        <img src="<?php echo e(url('/public/img/news/100x100/'.$item_most->newimg)); ?>" alt="<?php echo e($item_most->newsname); ?>" />
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title"><?php echo e($item_most->newsname); ?></h4>
                        <p class="item-date"><i class="fa fa-clock-o"></i><?php echo e($item_most->created_at->format('Y/m/d')); ?></p>
                    </div>
                </a>
            </li>
            <?php endif; ?>
        <?php  $count = $count +1; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    
    <div class="widget">
        <div class="social-widget">
            <div class="item">
                <div class="item-header">
                    <?php if($adverts_bottom[0]->code != ""): ?>
                    <?php echo e($adverts_bottom[0]->code); ?>

                    <?php else: ?>
                    <a href="<?php echo e($adverts_bottom[0]->link); ?>">
                        <img src="<?php echo e(url('public/img/images_bn/'.$adverts_bottom[0]->img)); ?>" alt="No image" />
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
    <div class="widget">
        <div class="social-widget">
            <div class="item">
                <div class="item-header">
                    <?php if($adverts_bottom[1]->code != ""): ?>
                        <?php echo e($adverts_bottom[1]->code); ?>

                    <?php else: ?>
                    <a href="<?php echo e($adverts_bottom[1]->link); ?>">
                        <img src="<?php echo e(url('public/img/images_bn/'.$adverts_bottom[1]->img)); ?>" alt="No image" />
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
