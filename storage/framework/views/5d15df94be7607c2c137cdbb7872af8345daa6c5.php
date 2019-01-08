
    <div class="widget widget-weather">
        <div class="weather-block">
            <a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
    </div>


    <div class="widget">
        <h3 class="widget-title">Tin mới nhất</h3>
<!--
        <div class="widget-article-lists">
        <?php $count =0; ?>
        <?php $__currentLoopData = $lasted_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count <5): ?>
            <div class="item">
                <div class="item-header">
                    <a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>">
                        <img src="<?php echo e(url('/public/img/news/100x100/'.$item_lt->newimg)); ?>" alt="no img" width="80" />
                    </a>
                </div>
                <div class="item-content">
                    <h4><a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>"><?php echo e($item_lt->newsname); ?></a></h4>
                    <span class="item-meta">
                        <a href="#"><i class="fa fa-clock-o"></i><?php echo e($item_lt->created_at); ?></a>
                    </span>
                </div>
            </div>
            <?php endif; ?>
        <?php  $count = $count +1; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
-->
        <ul class="widget-article-lists">
            <?php $count =0; ?>
            <?php $__currentLoopData = $lasted_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count < 5): ?>
            <li class="item">
                <a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>">
                    <img src="<?php echo e(url('/public/img/news/100x100/'.$item_lt->newimg)); ?>" class="item-img" alt="<?php echo e($item_lt->newsname); ?>" />
                    <div class="item-content">
                        <h4 class="item-title"><?php echo e($item_lt->newsname); ?></h4>
                        <p class="item-meta">
                            <i class="fa fa-clock-o"></i><?php echo e($item_lt->created_at->format('Y/m/d')); ?>

                        </p>
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
    <h3>Đọc nhiều nhất</h3>
    <div class="widget-article-list">
    <?php $count =1; ?>
    <?php $__currentLoopData = $most_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_most): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($count <6): ?>
        <div class="item">
            <div class="item-header">
                <a href="<?php echo e(url('chi-tiet/'.$item_most->slug)); ?>" title="<?php echo e($item_most->newsname); ?>">
                    <b><?php echo e($count); ?></b>  <img src="<?php echo e(url('/public/img/news/100x100/'.$item_most->newimg)); ?>" alt="no img" width="80" />
                </a>
            </div>
            <div class="item-content">
                <h4><a href="<?php echo e(url('chi-tiet/'.$item_most->slug)); ?>" title="<?php echo e($item_most->newsname); ?>"><?php echo e($item_most->newsname); ?></a></h4>
                <span class="item-meta">
                    <a href="#"><i class="fa fa-clock-o"></i><?php echo e($item_most->created_at); ?></a>
                </span>
            </div>
        </div>
        <div class="clearfix">

        </div>
        <?php endif; ?>
    <?php  $count = $count +1; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <div class="clearfix">

        </div>
    </div>
</div>
