
<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>
<div class="boxed active">
    <div class="wrapper">

        <h1>検索結果ページ</h1>

        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-title">
                    <?php if(isset($key)): ?>
                        <h2>Kết quả tìm kiếm : <?php echo e($key); ?></h2>
                    <?php else: ?>
                        <h2>Các tin tức với tags : <?php echo e($tags); ?></h2>
                    <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class=" article-list">
                                <div class="widget">
                                    
                                    <div class="widget-article-list">
                                    <?php $i=0; ?>
                                    <?php $__currentLoopData = $news_serch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_serch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <div class="item-header">
                                                <a href="<?php echo e(url('chi-tiet/'.$item_serch->slug)); ?>">
                                                    <img src="<?php echo e(url('/public/img/news/100x100/'.$item_serch->newimg)); ?>" alt="no img" width="90" />
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4><a href="<?php echo e(url('chi-tiet/'.$item_serch->slug)); ?>"><?php echo e($item_serch->newsname); ?></a></h4>
                                                <div class="search_intro">
                                                    <?php echo e($item_serch->newintro); ?>

                                                </div>
                                                <span class="item-meta">
                                                    <a href="#"><i class="fa fa-clock-o"></i><?php echo e($item_serch->created_at); ?></a>
                                                    <a href="<?php echo e(url('/loai-tin/'.$item_serch->list_name($item_serch->idlistnew)['slug'])); ?>">
                                                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                                                        <?php if($item_serch->list_name($item_serch->idlistnew)['listname'] !=""): ?>
                                                            <?php echo e($item_serch->list_name($item_serch->idlistnew)['listname']); ?>

                                                        <?php else: ?>
                                                            <?php echo e($item_serch->mod_name($item_serch->idmodnew)['modname']); ?>

                                                        <?php endif; ?>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END .content-panel -->
                </div>

            <!-- END .content-block-single -->
            </div>
            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>