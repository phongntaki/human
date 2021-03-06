<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

    <!-- BEGIN sliderp-sec -->
    <div class="boxed active slider-sec">
        <div class="wrapper">
            <!-- BEGIN .main-slider -->
            <div class="main-slider">
                <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(url('/chi-tiet/'.$item_km->slug)); ?>">
                        <div class="item-lead">
                            <p class="item-date"><?php echo e($item_km->created_at->format('Y/m/d')); ?></p>
                            <h3 class="item-title">
                                <?php if(Session::get('website_language') === 'vi'): ?>
                                    <?php echo $item_km->newsname; ?>

                                <?php elseif(Session::get('website_language') === 'jp'): ?>
                                    <?php echo $item_km->newsname_jp; ?>

                                <?php elseif(Session::get('website_language') === 'en'): ?>
                                    <?php echo $item_km->newsname_en; ?>

                                <?php endif; ?>
                            </h3>
                            <p class="item-desc">
                                <?php if(Session::get('website_language') === 'vi'): ?>
                                    <?php echo $item_km->newintro; ?>

                                <?php elseif(Session::get('website_language') === 'jp'): ?>
                                    <?php echo $item_km->newintro_jp; ?>

                                <?php elseif(Session::get('website_language') === 'en'): ?>
                                    <?php echo $item_km->newintro_en; ?>

                                <?php endif; ?>
                            </p>
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

    <!-- BEGIN page-content -->
    <div class="boxed active">
    <div class="wrapper">
        <div class="content-block">
            <!-- BEGIN .content-block-single --><h1></h1>
            <div class="content-block-single">
            <?php $index_count = 0; $ads = 0;?>
            <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2 class=" panel-title">
                            <a href="<?php echo e(url('loai-tin/'.$index_mod->slug)); ?>">
                                <!-- <?php echo e($index_mod->modname); ?> -->
                                <?php if(Session::get('website_language') === 'vi'): ?>
                                    <?php echo $index_mod->modname; ?>

                                <?php elseif(Session::get('website_language') === 'jp'): ?>
                                    <?php echo $index_mod->modname_jp; ?>

                                <?php elseif(Session::get('website_language') === 'en'): ?>
                                    <?php echo $index_mod->modname_en; ?>

                                <?php endif; ?>
                            </a>
                        </h2>
                        <ul class="panel-title-submenu">
                            <?php $__currentLoopData = $index_mod->listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="submenu-item">
                                <a href="<?php echo e(url('/loai-tin/'.$itemlist->slug)); ?>">
                                <!-- <?php echo e($itemlist->listname); ?> -->
                                <?php if(Session::get('website_language') === 'vi'): ?>
                                    <?php echo $itemlist->listname; ?>

                                <?php elseif(Session::get('website_language') === 'jp'): ?>
                                    <?php echo $itemlist->listname_jp; ?>

                                <?php elseif(Session::get('website_language') === 'en'): ?>
                                    <?php echo $itemlist->listname_en; ?>

                                <?php endif; ?>
                                </a>
                            </li>
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
                                        <h3 class="item-title">
                                            <?php if(Session::get('website_language') === 'vi'): ?>
                                                <?php echo $news->newsname; ?>

                                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                                <?php echo $news->newsname_jp; ?>

                                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                                <?php echo $news->newsname_en; ?>

                                            <?php endif; ?>
                                        </h3>
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