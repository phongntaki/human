<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>
<!-- BEGIN .wrapper -->
	<div class="wrapper">

		<!-- BEGIN .ot-breaking-news-body -->
		<div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
			<div class="ot-breaking-news-controls">
				<button class="right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
				<button class="right" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
				<strong><i class="fa fa-bar-chart"></i>Tin mới	</strong>
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
		<!-- END .ot-breaking-news-body -->
		</div>

		<div class="content-block has-sidebar">
			<!-- BEGIN .content-block-single -->
			<div class="content-block-single">
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><strong><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;">Cùng với lịch sử phát triển, trải qua thời gian dài phấn đấu và trưởng thành đã đánh dấu được một thương hiệu TTC Việt Nam năng động, sáng tạo, tiên phong trên thị trường xuất khẩu lao động tại Việt Nam.</span></span></strong></div>
    <div
        style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><br><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;">Với đội ngũ lãnh đạo giàu kinh nghiệm, chiến lược phát triển tốt, cán bộ công nhân viên được đào tạo chuyên ngành có năng lực, TTC Nhân Lực đã tiến bước vững chắc và phát triển liên tục để giữ vững uy tín và chất lượng xứng đáng với niềm tin yêu của người lao động.</span></span>
	</div>
	<div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;</div>
	<div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;">Tiền thân là một doanh nghiệp với số vốn ít ỏi. Ngày nay, Công ty đã phát triển thành một trong những doanh nghiệp xuất khẩu lao động lớn nhất cả nước.</span></span><br>&nbsp;</div>
	<div
	    style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: center;"><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;"><img alt="" src="https://japan.net.vn/images/uploads/2016/02/20/DSC00147.jpg" style="border: 0px; width: 560px; height: 420px;"><br><br><span style="color: rgb(0, 0, 205);"><em>Chất lượng nguồn lao động luôn được TTC Việt Nam quan tâm lên hàng đầu</em></span></span>
	    </span>
    </div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;</div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><span style="font-family: &quot;times new roman&quot;, times, serif; font-size: 14px;">Công ty cổ phần nhân lực TTC Việt Nam luôn nằm trong trong top 10 doanh nghiệp có số lượng lao động xuất khẩu lớn nhất cả nước, điều này đã góp phần không nhỏ trong công tác đào tạo nghề và giải quyết việc làm cho nhiều lao động.</span>
    </div>
    <div
        style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;
    </div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: center;"><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;"><img alt="" src="https://japan.net.vn/images/uploads/2015/12/22/_TER2571.JPG" style="border: 0px; width: 560px; height: 372px;"></span></span>
    </div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;</div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: center;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;"><em>TTC Nhân Lực đã khẳng định tên tuổi bằng tâm huyết của từng cán bộ công nhân viên, chất lượng dịch vụ và sự tin tưởng của người lao động.</em>&nbsp;</span></span>
        </span>
    </div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;</div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><span style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;">Lấy sự hài lòng của người lao động làm trọng tâm cho mọi hoạt động, TTC Nhân Lực luôn tiên phong trong việc mang đến những giá trị tốt nhất cho lao động. Luôn tự đòi hỏi cao hơn ở chính mình, chúng tôi đã và đang không ngừng nỗ lực mở rộng và khai thác những thị trường lao động mới, hướng đến những giá trị tốt nhất cho người lao động</span></span>
    </div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">&nbsp;</div>
    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><span style="font-family: &quot;times new roman&quot;, times, serif; font-size: 14px;">Để đạt được thành công hôm nay, bên cạnh việc thực hiện tốt các chiến lược và kế hoạch phát triển đúng đắn, thì một trong những yếu tố quan trọng là sự tin tưởng của người lao động với thương hiệu TTC Nhân Lực. Chính vì thế chúng tôi luôn muốn đáp lại những cảm tình quý giá đó bằng việc thể hiện trách nhiệm với người lao động thông qua những chính sách hỗ trợ&nbsp;</span>
        <span
            style="font-size: 14px;"><span style="font-family: &quot;times new roman&quot;, times, serif;">tối đa cho người lao động.</span></span>
    </div>
	    <?php $index_count = 0; $ads = 0;?> <?php $__currentLoopData = $modnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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