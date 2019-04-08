<aside class="sidebar sticky_column">

    <div class="widget-wrap">
        <div class="widget widget-info">
            <h3 class="widget-title"><?php echo e(trans('sitebar_right.direct_consult')); ?></h3>
            
            <p><?php echo e(trans('sitebar_right.hay_lien_lac_voi_chung_toi_khi_ban_co_van_de_can_giai_dap')); ?></p>
            <ul class="widget-article-lists" >
                <li class="item info-phone">
                    <span class="hidden"><?php echo e(trans('sitebar_right.phone')); ?>: </span>012-345-6789<br>
                    <span class="hidden"><?php echo e(trans('sitebar_right.time')); ?>: </span><span class="info-phone-time">9:00-18:00</span>
                </li>
                <li class="item info-mail"><span class="hidden"><?php echo e(trans('sitebar_right.email')); ?>: </span>info@enzi.vn</li>
            </ul>
        </div>

        <div class="widget widget-weather">
            <div class="weather-block">
                <a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>
        </div>
    </div>

    <div class="widget-wrap">
        
        <div class="widget widget-news">
            <h3 class="widget-title"><?php echo e(trans('sitebar_right.tin_moi_nhat')); ?></h3>
            <ul class="widget-article-lists">
                <?php $count =0; ?>
                <?php $__currentLoopData = $lasted_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count < 5): ?>
                               <li class="item">
                <a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>">
                    <div class="item-image">
                        <img src="<?php echo e(url('/public/img/news/300x300/'.$item_lt->newimg)); ?>" alt="<?php echo e($item_lt->newsname); ?>" />
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title">
                            <?php if(Session::get('website_language') === 'vi'): ?>
                                <?php echo $item_lt->newsname; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $item_lt->newsname_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $item_lt->newsname_en; ?>

                            <?php endif; ?>
                        </h4>
                        <p class="item-date">
<!--                        <i class="fa fa-clock-o"></i>-->
                        <?php echo e($item_lt->created_at->format('Y/m/d')); ?></p>
                    </div>
                </a>
                </li>
            <?php endif; ?>
            <?php  $count = $count +1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>


    <div class="widget widget-ranking">
        <h3 class="widget-title"><?php echo e(trans('sitebar_right.doc_nhieu_nhat')); ?></h3>
        <ul class="widget-article-lists">
        <?php $count =1; ?>
        <?php $__currentLoopData = $most_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_most): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count <6): ?>
            <li class="item">
                <a href="<?php echo e(url('chi-tiet/'.$item_most->slug)); ?>">
                    <div class="item-image">
                        <p class="item-counter"><?php echo e($count); ?></p>
                        <div class="item-image-inner">
                            <img src="<?php echo e(url('/public/img/news/300x300/'.$item_most->newimg)); ?>" alt="<?php echo e($item_most->newsname); ?>" />
                        </div>
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title">
                            <?php if(Session::get('website_language') === 'vi'): ?>
                                <?php echo $item_most->newsname; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $item_most->newsname_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $item_most->newsname_en; ?>

                            <?php endif; ?>
                        </h4>
                        <p class="item-date">
                        <?php echo e($item_most->created_at->format('Y/m/d')); ?></p>
                    </div>
                </a>
                </li>
            <?php endif; ?>
            <?php  $count = $count +1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</aside>
