<ul class="panel-items">
    <?php $__currentLoopData = $modnews_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="item">
        <a href="<?php echo e(url('chi-tiet/'.$hot->slug)); ?>">
            <div class="item-image">
                <img src="<?php echo e(url('public/img/news/800x800/'.$hot->newimg)); ?>" alt="<?php echo e($hot->newsname); ?>">
            </div>
            <div class="item-lead">
                <p class="item-date"><?php echo e($hot->created_at->format('Y/m/d')); ?></p>
                <h3 class="item-title"><?php echo e($hot->newsname); ?></h3>
                <p class="item-desc"><?php echo $hot->newintro; ?></p>
                <p class="comment-tag"><i class="far fa-comment"></i><span class="fb-comments-count" data-href="<?php echo e(url('chi-tiet/'.$hot->slug)); ?>"></span></p>
            </div>
        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
