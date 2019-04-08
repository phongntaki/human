<ul class="panel-items">
    <?php $__currentLoopData = $listnews_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="item">
        <a href="<?php echo e(url('chi-tiet/'.$hot->slug)); ?>">
            <div class="item-lead">
                <h3 class="item-title">
                    <!-- <?php echo e($hot->newsname); ?> -->
                    <?php if(Session::get('website_language') === 'vi' || Session::get('website_language')===null): ?>
                        <?php echo $hot->newsname; ?>

                    <?php elseif(Session::get('website_language') === 'jp'): ?>
                        <?php echo $hot->newsname_jp; ?>

                    <?php elseif(Session::get('website_language') === 'en'): ?>
                        <?php echo $hot->newsname_en; ?>

                    <?php endif; ?>
                </h3>
                <p class="item-desc">
                    <!-- <?php echo $hot->newintro; ?> -->
                    <?php if(Session::get('website_language') === 'vi' || Session::get('website_language')===null): ?>
                        <?php echo $hot->newintro; ?>

                    <?php elseif(Session::get('website_language') === 'jp'): ?>
                        <?php echo $hot->newintro_jp; ?>

                    <?php elseif(Session::get('website_language') === 'en'): ?>
                        <?php echo $hot->newintro_en; ?>

                    <?php endif; ?>
                </p>
                <p class="comment-tag"><i class="fa fa-comment-o"></i><span class="fb-comments-count" data-href="<?php echo e(url('chi-tiet/'.$hot->slug)); ?>"></span></p>
                <p class="item-date"><?php echo e($hot->created_at->format('Y/m/d')); ?></p>
            </div>
            <div class="item-image">
                <img src="<?php echo e(url('public/img/news/800x800/'.$hot->newimg)); ?>" alt="<?php echo e($hot->newsname); ?>">
            </div>
        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
