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
                <div class="content-panel">
                    <div class="content-panel-body big-message">
                        <div class="big-message-heading">
                            <h1 class="big-message-title"><?php echo e(trans('not_found_content.khong_tim_thay_noi_dung')); ?></h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title"><?php echo e(trans('not_found_content.chua_cap_nhat')); ?></h2>
                            <p><?php echo e(trans('not_found_content.trang_ban_dang_truy_cap_hien_khong_co_noi_dung')); ?></h2></p>
                            <p class="back-button">
                                <a href="<?php echo e(url('/')); ?>" class="back-button"><?php echo e(trans('not_found_content.ve_trang_chu')); ?></a>
                            </p>
                        </div>
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