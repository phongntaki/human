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
                <!-- BEGIN .content-panel post-content -->
                <div class="content-panel post-content">
                    <!-- BEGIN .post-header -->
                    <div class="post-header">
                        <h1 class="post-title"><?php echo e(trans('gioithieu.gioi_thieu_chung')); ?></h1>
                    </div>
                    <div class="post-body">
                        <p class="hero-image"><img src="<?php echo e(url('public/home/images/message.jpg')); ?>" alt=""></p>
                        <p class="desc">Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <h2>Văn bản mẫu của tiêu đề (H2)</h2>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <p class="hero-image"><img src="<?php echo e(url('public/home/images/message02.jpg')); ?>" alt=""></p>
                        <h3>Văn bản mẫu của tiêu đề (H3)</h3>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <h4>Văn bản mẫu của tiêu đề (H4)</h4>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
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