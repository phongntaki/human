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
                        <h1 class="panel-title">Đăng ký hồ sơ</h1>
                    </div>

                    <form role="form" class="form-vertical" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <fieldset>
                            <div class="form-group">
                                <label class="control-label">Tên</label>
                                <div class="control-detail">
                                    <input class="form-control" name="txtname" placeholder=" " value="<?php echo e($cus_data->cusfullname); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Giới tính</label>
                                <div class="control-detail">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="0"
                                               <?php if($cus_data["sex"] == 0): ?>
                                               checked="checked"
                                               <?php endif; ?>
                                               > Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="1"
                                               <?php if($cus_data["sex"] == 1): ?>
                                               checked="checked"
                                               <?php endif; ?>
                                               > Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ngày sinh</label>
                                <div class="control-detail">
                                    <input class="form-control" name="birthday" type="date" value="<?php echo e($cus_data->birthday); ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Số điện thoại</label>
                                <div class="control-detail">
                                    <input class="form-control" name="phone" placeholder=" " value="<?php echo e($cus_data->cusphone); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Địa chỉ</label>
                                <div class="control-detail">
                                    <input class="form-control" name="address" placeholder=" " value="<?php echo e($cus_data->cusaddress); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Học vấn(Cấp cao nhất)</label>
                                <div class="control-detail">
                                    <select class="form-control" name="nnHocVan" id="nn-hoc-van" required>
                                        <option value="">---Vui Lòng Chọn Học Vấn---</option>
                                        <option value="Cấp 3"
                                            <?php if($cus_data["education"]=="Cấp 3"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > Cấp 3 </option>
                                        <option value="Cao Đẳng"
                                            <?php if($cus_data["education"]=="Cao Đẳng"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > Cao Đẳng </option>
                                        <option value="Đại học"
                                            <?php if($cus_data["education"]=="Đại học"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > Đại học </option>
                                        <option value="Thạc sĩ"
                                            <?php if($cus_data["education"]=="Thạc sĩ"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > Thạc sĩ </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tiếng Nhật</label>
                                <div class="control-detail">
                                    <select class="form-control w50" name="nnLanguageJP" id="nn-language-jp" required>
                                        <option value="">---Vui Lòng Chọn Cấp độ---</option>
                                        <option value="N1"
                                            <?php if($cus_data["language_jp"]=="N1"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > N1 </option>
                                        <option value="N2"
                                            <?php if($cus_data["language_jp"]=="N2"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > N2 </option>
                                        <option value="N3"
                                            <?php if($cus_data["language_jp"]=="N3"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > N3 </option>
                                        <option value="N4"
                                            <?php if($cus_data["language_jp"]=="N4"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > N4 </option>
                                        <option value="N5"
                                            <?php if($cus_data["language_jp"]=="N5"): ?>
                                            selected='selected'
                                            <?php endif; ?>
                                        > N5 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ngoại Ngữ Khác</label>
                                <div class="control-detail">
                                    <input class="form-control" name="nnLanguageOther" placeholder="Toeic 500" value="<?php echo e($cus_data->language_other); ?>" />
                                </div>
                            </div>
                            <div class="form-group detail-textarea">
                                <label class="control-label"><span class="nowrap">Giới thiệu bản thân,</span> <span class="nowrap">kinh nghiệm làm việc</span></label>
                                <div class="control-detail">
                                    <textarea name="nnIntroduce" class="form-control" rows="6"><?php echo old('nnIntroduce',isset($cus_data) ? $cus_data['introduce'] : null); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group detail-textarea">
                                <label class="control-label">Mong muốn</label>
                                <div class="control-detail">
                                    <textarea name="nnDesire" class="form-control" rows="6"><?php echo old('nnDesire',isset($cus_data) ? $cus_data['desire'] : null); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group detail-photo">
                                <label for="hnnavatar" class="control-label">Hình ảnh<i class="far fa-image"></i></label>
                                <div class="control-detail">
                                    <img id="hnnavatar"
                                    <?php if($cus_data["cusimg"]=="no-img.png" && $cus_data["cusimg"]==null): ?>
                                     src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png"
                                     <?php else: ?>
                                     src="<?php echo e(url('public/img/customers/'.$cus_data['cusimg'])); ?>"
                                     <?php endif; ?>
                                      alt="..." class="img-thumbnail" style="width: 50%;">
                                    <input type="file" name="hnnavatarfile" id="hnnavatarfile" onchange="eshowimg(this);" style="display: none">
                                    <input type="hidden" name="hnnimguserold" id="hnnimguserold">
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="form-button">Update</button>
                            </div>
                        </fieldset>
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