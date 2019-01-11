
<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

        <!-- BEGIN .ot-breaking-news-body -->
<div class="boxed active top-slider">
    <div class="wrapper">
        <div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
            <div class="ot-breaking-news-controls">
                <button class="slider-button right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
                <button class="slider-button left" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
            </div>
            <div class="ot-breaking-news-content">
                <div class="ot-breaking-news-content-wrap">
                <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <a href="<?php echo e(url('/chi-tiet/'.$item_km->slug)); ?>">
                            <div class="item-lead">
                                <p class="item-date"><?php echo e($item_km->created_at->format('Y/m/d')); ?></p>
                                <h3 class="item-title"><?php echo e($item_km->newsname); ?></h3>
                                <p class="item-desc"><?php echo e($item_km->newintro); ?></p>
                            </div>
                            <div class="item-image">
                                <img src="<?php echo e(url('public/img/news/300x300/'.$item_km['newimg'])); ?>">
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <!-- END .ot-breaking-news-body -->
        </div>
    </div>
</div>
<div class="boxed active">
    <div class="wrapper">
        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
            <?php $index_count = 0; $ads = 0;?>
            <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-title">
                        <h2 class="panel-title"><a href="<?php echo e(url('loai-tin/'.$index_mod->slug)); ?>"><?php echo e($index_mod->modname); ?></a></h2>
                        <ul class="panel-title-submenu">
                            <?php $__currentLoopData = $index_mod->listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="submenu-item"><a href="<?php echo e(url('/loai-tin/'.$itemlist->slug)); ?>"><i class="fa fa-angle-right"></i><?php echo e($itemlist->listname); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php
                        $item = $index_mod->news_in_mod($index_mod->id)->take(4);
                    ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <a href="<?php echo e(url('/chi-tiet/'.$news->slug)); ?>">
                                    <div class="item-image">
                                        <img src="<?php echo e(url('public/img/news/300x300/'.$news['newimg'])); ?>" alt="<?php echo e($news->created_at); ?>" />
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

<!--
                    
                    <?php if($index_count == 4): ?>
                    <div class="content-panel">
                        <div class="content-panel-body do-space">
                        <?php if($adverts_main[$ads]->code != ""): ?>
                            <?php echo e($adverts_main[$ads]->code); ?>

                        <?php else: ?>
                            <a href="<?php echo e($adverts_main[$ads]->link); ?>" target="_blank">
                                <img src="<?php echo e(url('public/img/images_bn/'.$adverts_main[$ads]->img)); ?>" alt="No image" width="100%" style="object-fit: contain; max-height: 150px; display: block;overflow:hidden; margin-bottom: 20px;" />
                            </a>
                        <?php endif; ?>
                        </div>
                    <?php $ads = $ads +1; ?>
-->
                    <!--END .content-panel-->
<!--
                    </div>
                    <?php endif; ?>
-->

                <!-- END .content-panel -->
                </div>
                <?php $index_count = $index_count +1; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- END .content-block-single -->
            </div>

            <!-- BEGIN .sidebar -->
            <aside class="sidebar sticky_column">
                <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END .sidebar -->
            </aside>

        <!-- END .content-block -->
        </div>

        <!-- BEGIN .content-panel -->
        <div class="content-panel">
            <div class="content-panel-body do-space">
                <?php if($adverts_main[$ads]->code != ""): ?>
                    <?php echo e($adverts_main[$ads]->code); ?>

                <?php else: ?>
                <a href="<?php echo e($adverts_main[$ads]->link); ?>" target="_blank">
                    <img src="<?php echo e(url('public/img/images_bn/'.$adverts_main[$ads]->img)); ?>" alt="No image" width="100%" style="object-fit: contain; max-height: 150px; display: block;overflow:hidden; margin-bottom: 20px;" />
                </a>
                <?php endif; ?>
            </div>
        <!-- END .content-panel -->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>