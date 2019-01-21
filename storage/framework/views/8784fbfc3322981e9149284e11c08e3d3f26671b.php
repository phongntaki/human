<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

    <div class="boxed active slider-sec">
        <div class="wrapper">
            <!-- BEGIN .main-slider -->
            <div class="main-slider">
                <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(url('/chi-tiet/'.$item_km->slug)); ?>">
                        <div class="item-lead">
                            <p class="item-date"><?php echo e($item_km->created_at->format('Y/m/d')); ?></p>
                            <h3 class="item-title"><?php echo e($item_km->newsname); ?></h3>
                            <p class="item-desc"><?php echo e($item_km->newintro); ?></p>
                        </div>
                        <div class="item-image">
                            <img class="object-fit-img" src="<?php echo e(url('public/img/news/800x800/'.$item_km['newimg'])); ?>">
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="boxed active">
    <div class="wrapper">
        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
            <?php $index_count = 0; $ads = 0;?>
            <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2 class="panel-title"><a href="<?php echo e(url('loai-tin/'.$index_mod->slug)); ?>"><?php echo e($index_mod->modname); ?></a></h2>
                        <ul class="panel-title-submenu">
                            <?php $__currentLoopData = $index_mod->listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="submenu-item"><a href="<?php echo e(url('/loai-tin/'.$itemlist->slug)); ?>"><?php echo e($itemlist->listname); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php
                        $item = $index_mod->news_in_mod($index_mod->id)->take(6);
                    ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <a href="<?php echo e(url('/chi-tiet/'.$news->slug)); ?>">
                                    <div class="item-image">
                                        <img class="object-fit-img" src="<?php echo e(url('public/img/news/800x800/'.$news['newimg'])); ?>" alt="<?php echo e($news->created_at); ?>" />
                                    </div>
                                    <div class="item-lead">
                                        <p class="item-date"><?php echo e($news->created_at->format('Y/m/d')); ?></p>
                                        <h3 class="item-title"><?php echo e($news->newsname); ?></h3>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="read-more top-index">
                        <a class="btn-more" href="<?php echo e(url('loai-tin/'.$index_mod->slug)); ?>" role="button"><i class="fas fa-angle-right"></i>Xem thêm</a>
                    </div>
                </div>

                <?php $index_count = $index_count +1; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>