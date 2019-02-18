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
            <div class="content-panel access-panel">

               <div class="login-form" style="display: block;">
                    <h1 class="panel-title">Quên mật khẩu</h1>
                   <form class="form-vertical" action="" method="POST" role="form">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group detail-email">
                            <?php if(Session::has('flag')): ?>
                            <div class="alert alert-<?php echo e(Session::get('flag')); ?>">
                                <p><?php echo e(Session::get('message')); ?></p>
                            </div>
                            <?php endif; ?>
                            <label class="control-label" for="login-email">E-Mail</label>
                            <div class="control-detail">
                                <input type="email" id="login-email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red">Cấp lại mật khẩu</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>