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
                        <h1 class="post-title"><?php echo e(trans('linhvuc.danh_sach_cac_nganh_cong_nghiep')); ?></h1>
                    </div>
                    <div class="post-body">
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <table class="date-table">
                            <tbody>
                                <tr>
                                    <th>建設業</th>
                                    <td>建設作業員、特殊作業員、土木作業員、鉄筋工、塗装工、溶接工、配管工、板金工、内装業、</td>
                                </tr>
                                <tr>
                                    <th>農業</th>
                                    <td>農耕作業員、養育作業員、植木職、造園師、その他</td>
                                </tr>
                                <tr>
                                    <th>漁業</th>
                                    <td>海面漁労作業員、漁船甲板員、水産養殖作業員、その他</td>
                                </tr>
                                <tr>
                                    <th>飲食業</th>
                                    <td>サンプル、サンプル、サンプル、サンプル、サンプル</td>
                                </tr>
                                <tr>
                                    <th>医療関係</th>
                                    <td>サンプル、サンプル、サンプル、サンプル、サンプル、サンプル、サンプル</td>
                                </tr>
                                <tr>
                                    <th>機械工学</th>
                                    <td>サンプル、サンプル、サンプル、サンプル、サンプル、サンプル、サンプル</td>
                                </tr>
                                <tr>
                                    <th>エレクトロニクス</th>
                                    <td>サンプル、サンプル、サンプル、サンプル、サンプル、サンプル、サンプル</td>
                                </tr>
                                <tr>
                                    <th>IT</th>
                                    <td>サンプル、サンプル、サンプル、サンプル、サンプル、サンプル、サンプル</td>
                                </tr>
                            </tbody>
                        </table>
<!--                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>-->
                        <h2>サポートサービスについて</h2>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
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