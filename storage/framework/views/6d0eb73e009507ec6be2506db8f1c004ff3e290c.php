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
                            <h1 class="big-message-title">Không tìm thấy nội dung</h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title">Chưa cập nhật</h2>
                            <p>Trang bạn đang truy cập hiện không có nội dung.</p>
                            <p class="back-button">
                                <a href="<?php echo e(url('/')); ?>" class="back-button">Về trang chủ</a>
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