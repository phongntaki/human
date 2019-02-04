
<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>
<div class="boxed active">
    <div class="wrapper">

        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <!-- BEGIN .content-panel -->
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                    <?php if(isset($key)): ?>
                        <h1 class="panel-title">Kết quả tìm kiếm : <span class="search-text"><?php echo e($key); ?></span></h1>
                    <?php else: ?>
                        <h1 class="panel-title">Các tin tức với tags : <span class="search-text"><?php echo e($tags); ?></span></h2>
                    <?php endif; ?>
                    </div>

                    <div class="content-panel-body">
                        
                        <ul class="panel-items">
                            <?php $i=0; ?>
                            <?php $__currentLoopData = $news_serch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_serch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <a href="<?php echo e(url('chi-tiet/'.$item_serch->slug)); ?>">
                                    <div class="item-lead">
                                        <h3 class="item-title"><?php echo e($item_serch->newsname); ?></h3>
                                        <p class="item-desc"><?php echo e($item_serch->newintro); ?></p>

                                        <div class="item-meta">
                                            <p class="item-date"><?php echo e($item_serch->created_at->format('Y/m/d')); ?></p>
                                            <p class="category">
                                                <?php if($item_serch->list_name($item_serch->idlistnew)['listname'] !=""): ?>
                                                <?php echo e($item_serch->list_name($item_serch->idlistnew)['listname']); ?>

                                                <?php else: ?>
                                                <?php echo e($item_serch->mod_name($item_serch->idmodnew)['modname']); ?>

                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <img src="<?php echo e(url('/public/img/news/100x100/'.$item_serch->newimg)); ?>" alt="">
                                    </div>
                                </a>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>