
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
			                    <input class="form-control" name="name" placeholder=" " value="" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới tính</label>
			                    <div class="col-xs-12 col-md-12">
			                        <div class="form-group">
			                            <div class="col-xs-12 col-md-12">
			                                <label class="radio-inline">
			                                    <input type="radio" name="sex" value="0" > Nam
			                                </label>
			                                <label class="radio-inline">
			                                    <input type="radio" name="sex" value="1" checked> Nữ
			                                </label>                           
			                            </div>                    
			                        </div>
			                    </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Ngày sinh</label>
			                    <input class="form-control" name="birthday" type="date" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Số điện thoại</label>
			                    <input class="form-control" name="phone" placeholder=" " value="" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Địa chỉ</label>
			                    <input class="form-control" name="address" placeholder=" " value="" />
		                  	</div>
		                  	<div class="form-group">
		                    	<label class="control-label">Học vấn(Cấp cao nhất)</label>
			                    <select class="form-control" name="nnmodnews" id="nn-mod-news" required>
	                                <option value="">---Vui Lòng Chọn Học Vấn---</option>
	                                <option value="1"> Cấp 3 </option>
	                                <option value="2"> Cao Đẳng </option>
	                                <option value="3"> Đại học </option>
	                                <option value="4"> Thạc sĩ </option>
	                            </select>
		                  	</div>
		                  	<div class="form-group">
		                    	<label class="control-label">Tiếng Nhật</label>
		                    	<select class="form-control w50" name="nnmodnews" id="nn-mod-news" required>
	                                <option value="">---Vui Lòng Chọn Cấp độ---</option>
	                                <option value="1"> N1 </option>
	                                <option value="2"> N2 </option>
	                                <option value="3"> N3 </option>
	                                <option value="4"> N4 </option>
	                                <option value="5"> N5 </option>
                            	</select>
			                    <div>
			                    	<label class="control-label">Ngoại Ngữ Khác</label>
			                    	<input class="form-control" name="name" placeholder="Toeic 500" value="" />
			                    </div>
			                    <div class="form-group">
				                    <label class="control-label">Ngoại Ngữ Khác</label>
				                    <input class="form-control" name="mail" placeholder=" " value="" />
			                  	</div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới thiệu bản thân, kinh nghiệm làm việc</label>
			                    <div class="col-sx-12">
		                          <textarea name="nntomtatnew" class="form-control" rows="4"><?php echo old('nntomtatnew'); ?></textarea>
		                        </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Mong muốn</label>
			                    <div class="col-sx-12">
		                          <textarea name="nntomtatnew" class="form-control" rows="4"><?php echo old('nntomtatnew'); ?></textarea>
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