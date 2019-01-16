<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

<div class="boxed active">
    <div class="wrapper">

        <h1>ログインページ</h1>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <form role="form" class="form-vertical" action="" method="POST">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <fieldset>
                  <div class="control-group">
                  <?php if(Session::has('flag')): ?>
                        <div class="alert alert-<?php echo e(Session::get('flag')); ?>"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <label  class="control-label">E-Mail Address:</label>
                    <div class="controls">
                      <input type="email" name="email" class="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label">Password:</label>
                    <div class="controls">
                      <input type="password" name="password"  class="">
                    </div>
                  </div>
                  <a class="" href="#">Forgotten Password</a>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-orange">Login</button>

                    <a href="<?php echo e(url('/login_social/facebook/gioi-thieu')); ?>" class="btn btn-primary">Facebook Login</a>
                </fieldset>
              </form>
                <?php $index_count = 0; $ads = 0;?>
                <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- BEGIN .content-panel -->

                <?php $index_count = $index_count +1; ?>
                <!-- END .content-panel -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>