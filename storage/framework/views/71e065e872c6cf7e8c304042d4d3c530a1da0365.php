
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
				
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content-panel-body article-header">
						Trân trọng cảm ơn Quý khách hàng đã quan tâm tới sự liên hệ này. Xin vui lòng gửi thông tin hoặc liên hệ trực tiếp, công ty sẵn sàng đáp ứng kịp thời, hiệu quả những nhu cầu của Quý khách hàng trong thời gian sớm nhất.
					</div>
				<!-- END .content-panel -->
				</div>
				
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content_news">
						<div class="share_news">
							<div class="fb-share-button" 
							    data-href="<?php echo e(url()->current()); ?>" 
							    data-mobile_iframe="true"
							    data-layout="button">
							 </div> <hr style="margin: 5px;">
							 <!-- Đặt thẻ này vào nơi bạn muốn nút chia sẻ kết xuất. -->
						<div class="g-plus" data-action="share" data-annotation="bubble" data-height="24" data-href="<?php echo e(url()->current()); ?>"></div>
						</div>
					</div>
					
					<div class="text-center">
						Trụ sở chính - văn phòng tư vấn, tiếp nhận hồ sơ:<br><br>

CÔNG TY CP NHÂN LỰC ENZI VIỆT NAM<br><br>

Địa Chỉ: Đà Nẵng<br><br>

Hotline 0944 123 456 - 0985 123 456
Tel: 04 710 12345   Fax: 0473 123 456<br><br>
Skype: phongntaki<br><br>
Email: phongntaki@gmail.com<br><br>

Để liên lạc với chúng tôi, vui lòng điền đầy đủ thông tin bên dưới, chúng tôi sẽ hồi âm ngay khi nhận được thông tin của bạn. Xin cảm ơn! 
					</div>
				<!-- END .content-panel -->
				</div>
				<hr>
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content-panel-body article-main-share" style="line-height: 7px;">
						<span class="share-front"><i class="fa fa-share-alt"></i>Share</span>
						<div class="fb-share-button" 
						    data-href="<?php echo e(url()->current()); ?>" 
						    data-layout="button_count">
						  </div>	
						  <div class="g-plus" data-action="share" data-annotation="bubble" data-height="24" data-href="<?php echo e(url()->current()); ?>"></div>					
					</div>
				<!-- END .content-panel -->
				</div>
				
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content-panel-body article-main-tags">
						<span class="tags-front"><i class="fa fa-tags"></i>Tags</span>
					
					</div>
				<!-- END .content-panel -->
				</div>
				
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content-panel-body do-space">
						
					</div>
				<!-- END .content-panel -->
				</div>
				<!-- BEGIN .content-panel -->
				<div class="content-panel">
					<div class="content-panel-title">
						<h2> Ý kiến của bạn</h2>
					</div>
					<div class="content-panel-body comment-list">						
						<div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-width="100%" data-numposts="5"></div>
					</div>
				<!-- END .content-panel -->
				</div>
				<!-- BEGIN .content-panel -->

			<!-- END .content-block-single -->
			</div>


		</div>
		

	<!-- END .wrapper -->
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>