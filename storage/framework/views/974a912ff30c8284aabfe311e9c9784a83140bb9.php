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

                <div class="register-form">
                    <h1 class="panel-title"><?php echo e(trans('home_register.register')); ?></h1>

                    <form class="form-vertical" method="POST" action="" role="form">
                        <?php echo e(csrf_field()); ?>

                        <!-- <?php if(Session::has('flag')): ?>
                        <div class="alert alert-<?php echo e(Session::get('flag')); ?>">
                            <p><?php echo e(Session::get('message')); ?></p>
                        </div>
                        <?php endif; ?> -->
                        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="form-group<?php echo e($errors->has('fullname') ? ' has-error' : ''); ?>">
                            <label class="control-label" for="fullname"><?php echo e(trans('home_register.fullname')); ?></label>
                            <div class="control-detail">
                                <input type="text" id="fullname" class="form-control" name="fullname" value="<?php echo e(old('fullname')); ?>" required autofocus>

                                <!-- <?php if($errors->has('name')): ?>
<span class="help-block">
<strong><?php echo e($errors->first('name')); ?></strong>
</span>
<?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="control-label" for="register-email"><?php echo e(trans('home_register.email')); ?></label>
                            <div class="control-detail">
                                <input type="email" id="register-email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <!-- <?php if($errors->has('email')): ?>
<span class="help-block">
<strong><?php echo e($errors->first('email')); ?></strong>
</span>
<?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="control-label" for="register-password"><?php echo e(trans('home_register.password')); ?></label>
                            <div class="control-detail">
                                <input type="password" id="register-password" class="form-control" name="password" required>

                                <!-- <?php if($errors->has('password')): ?>
<span class="help-block">
<strong><?php echo e($errors->first('password')); ?></strong>
</span>
<?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password-confirmation"><?php echo e(trans('home_register.confirm_password')); ?></label>
                            <div class="control-detail">
                                <input type="password" id="password-confirmation" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="form-button button-red"><?php echo e(trans('home_register.register')); ?></button>
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