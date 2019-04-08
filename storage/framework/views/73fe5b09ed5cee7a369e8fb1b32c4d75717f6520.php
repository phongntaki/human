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

               <div class="login-form">
                    <h1 class="panel-title"><?php echo e(trans('home_login.login')); ?></h1>
                   <form class="form-vertical" action="" method="POST" role="form">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="form-group detail-email">
                            <!-- <?php if(Session::has('flag')): ?>
                            <div class="alert alert-<?php echo e(Session::get('flag')); ?>">
                                <p><?php echo e(Session::get('message')); ?></p>
                            </div>
                            <?php endif; ?> -->
                            <label class="control-label" for="login-email"><?php echo e(trans('home_login.email')); ?></label>
                            <div class="control-detail">
                                <input type="email" id="login-email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group detail-password">
                            <label  class="control-label" for="login-password"><?php echo e(trans('home_login.password')); ?></label>
                            <div class="control-detail">
                                <input type="password" id="login-password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="password-message">
                            <a class="message-text" href="<?php echo e(route('send-mail-reset-pass')); ?>"><?php echo e(trans('home_login.forgotten_password')); ?></a>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red"><?php echo e(trans('home_login.login')); ?></button>
                            <a href="<?php echo e(url('/login_social/facebook/gioi-thieu')); ?>" class="form-button"><?php echo e(trans('home_login.facebook_login')); ?></a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>