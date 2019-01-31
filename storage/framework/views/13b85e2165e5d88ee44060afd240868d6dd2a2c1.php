
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
                        <h1 class="panel-title">Liên hệ</h1>
                    </div>

                    <form class="form-vertical" action="" role="form">
                        <div class="form-group">
                            <label class="control-label" for="inquiry-name">Tên</label>
                            <div class="control-detail">
                                <input type="text" id="inquiry-name" class="form-control" name="inquiry-name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inquiry-mail">E-Mail</label>
                            <div class="control-detail">
                                <input type="text" id="inquiry-mail" class="form-control" name="inquiry-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="inquiry-tel">Số điện thoại</label>
                            <div class="control-detail">
                                <input type="text" id="inquiry-tel" class="form-control" name="inquiry-tel">
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label" for="inquiry-text">Nội dung thông điệp</label>
                            <div class="control-detail">
                                <textarea name="inquiry-text" id="inquiry-text" class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red">Gửi đi</button>
                            <button type="submit" class="form-button button-gray">Nhập lại</button>
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