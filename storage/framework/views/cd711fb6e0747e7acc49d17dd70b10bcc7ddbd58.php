
<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

<div class="boxed active">
    <div class="wrapper">

        <div class="content-block">
                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-body big-message">
                        <div class="big-message-heading">
                            <i class="far fa-file"></i>
                            <h1 class="big-message-title">404 not found.</h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title"><?php echo e(trans('404.trang_tim_kiem_khong_tim_thay')); ?></h2>
                            <p><?php echo e(trans('404.trang_tim_kiem_tam_thoi_khong_the_truy_cap')); ?></p>
                            <p class="back-button">
                                <a href="<?php echo e(url('/')); ?>"><?php echo e(trans('404.ve_trang_chu')); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>