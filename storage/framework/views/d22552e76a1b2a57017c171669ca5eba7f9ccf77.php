<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>
<!-- BEGIN .wrapper -->
	<div class="wrapper">
			<!-- BEGIN .ot-breaking-news-body -->
		<div class="content-block has-sidebar">
			<!-- BEGIN .content-block-single -->
			<div class="content-block-single">
				
				<form role="form" class="form-vertical" action="" method="POST">
					<div class="col-lg-8" style="padding-bottom:70px"> 
		              	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		                <fieldset>
		                  	<div class="form-group">
			                    <label class="control-label">Tên</label>
			                    <input class="form-control" name="txtname" placeholder=" " value="<?php echo e($cus_data->cusfullname); ?>" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới tính</label>
			                    <div class="col-xs-12 col-md-12">
			                        <div class="form-group">
			                            <div class="col-xs-12 col-md-12">
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
			                    </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Ngày sinh</label>
			                    <input class="form-control" name="birthday" type="date" value="<?php echo e($cus_data->birthday); ?>"/>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Số điện thoại</label>
			                    <input class="form-control" name="phone" placeholder=" " value="<?php echo e($cus_data->cusphone); ?>" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Địa chỉ</label>
			                    <input class="form-control" name="address" placeholder=" " value="<?php echo e($cus_data->cusaddress); ?>" />
		                  	</div>
		                  	<div class="form-group">
		                    	<label class="control-label">Học vấn(Cấp cao nhất)</label>
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
		                  	<div class="form-group">
		                    	<label class="control-label">Tiếng Nhật</label>
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
			                    <div>
			                    	<label class="control-label">Ngoại Ngữ Khác</label>
			                    	<input class="form-control" name="nnLanguageOther" placeholder="Toeic 500" value="<?php echo e($cus_data->language_other); ?>" />
			                    </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới thiệu bản thân, kinh nghiệm làm việc</label>
			                    <div class="col-sx-12">
		                          <textarea name="nnIntroduce" class="form-control" rows="4"><?php echo old('nnIntroduce',isset($cus_data) ? $cus_data['introduce'] : null); ?></textarea>
		                        </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Mong muốn</label>
			                    <div class="col-sx-12">
		                          <textarea name="nnDesire" class="form-control" rows="4"><?php echo old('nnDesire',isset($cus_data) ? $cus_data['desire'] : null); ?></textarea>
		                        </div>
		                  	</div>
		                  	<br>
		                  	<br>
		                  	<button type="submit" class="btn btn-orange">Update</button>
		                </fieldset>
	            	</div>
              	</form>

			<!-- END .content-block-single -->
			</div>


		</div>
		

	<!-- END .wrapper -->
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>