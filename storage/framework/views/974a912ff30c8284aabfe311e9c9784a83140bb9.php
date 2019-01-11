<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>
<!-- BEGIN .wrapper -->
    <div class="wrapper">

        <!-- BEGIN .ot-breaking-news-body -->
<!--
        <div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
            <div class="ot-breaking-news-controls">
                <button class="right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
                <button class="right" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
                <strong><i class="fa fa-bar-chart"></i>Tin mới  </strong>
            </div>
            <div class="ot-breaking-news-content">
                <div class="ot-breaking-news-content-wrap">
                    <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <strong><a href="<?php echo e(url('/chi-tiet/'.$item_km->slug)); ?>"><?php echo e($item_km->newsname); ?></a></strong>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
-->
        <!-- END .ot-breaking-news-body -->
<!--        </div>-->

        <h1>登録ページ</h1>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('fullname') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">FullName</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="<?php echo e(old('fullname')); ?>" required autofocus>

                                <!-- <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <!-- <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <!-- <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php $index_count = 0; $ads = 0;?>
                <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- BEGIN .content-panel -->

                <?php $index_count = $index_count +1; ?>
                <!-- END .content-panel -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- END .content-block-single -->
            <!-- BEGIN .sidebar -->
            <aside class="sidebar sticky_column">
                <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END .sidebar -->
            </aside>
        </div>
        <!-- BEGIN .content-panel -->
        <div class="content-panel">
            <div class="content-panel-body do-space">
                <?php if($adverts_main[$ads]->code != ""): ?>
                    <?php echo e($adverts_main[$ads]->code); ?>

                <?php else: ?>
                <a href="<?php echo e($adverts_main[$ads]->link); ?>" target="_blank">
                    <img src="<?php echo e(url('public/img/images_bn/'.$adverts_main[$ads]->img)); ?>" alt="No image" width="100%" style="object-fit: contain; max-height: 150px; display: block;overflow:hidden; margin-bottom: 20px;" />
                </a>
                <?php endif; ?>
            </div>
        <!-- END .content-panel -->
        </div>

    <!-- END .wrapper -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>