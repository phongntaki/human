
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

                <div class="content-panel">
                    <div class="content-panel-title">
                        <h1 class="panel-title"><?php echo e(trans('lienhe.lien_he')); ?></h1>
                    </div>

                    <form class="form-vertical" method="POST" action="" role="form">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group">
                            <label class="control-label" for="inquiry_name"><?php echo e(trans('home_master.hoten')); ?></label>
                            <div class="control-detail">
                                <input type="text" id="inquiry_name" class="form-control" name="inquiry_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inquiry-mail"><?php echo e(trans('home_master.mail')); ?></label>
                            <div class="control-detail">
                                <input type="text" id="inquiry_mail" class="form-control" name="inquiry_mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inquiry_tel"><?php echo e(trans('home_master.dien_thoai')); ?></label>
                            <div class="control-detail">
                                <input type="text" id="inquiry_tel" class="form-control" name="inquiry_tel">
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label" for="inquiry_text"><?php echo e(trans('home_master.noi_dung_thong_diep')); ?></label>
                            <div class="control-detail">
                                <textarea name="inquiry_text" id="inquiry_text" class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red"><?php echo e(trans('home_master.gui_di')); ?></button>
                            <button type="submit" class="form-button button-gray"><?php echo e(trans('home_master.nhap_lai')); ?></button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>