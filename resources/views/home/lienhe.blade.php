@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')
<!-- BEGIN .wrapper -->
	<div class="wrapper">
			<!-- BEGIN .ot-breaking-news-body -->
		<div class="content-block has-sidebar">
			<!-- BEGIN .content-block-single -->
			<div class="content-block-single">
				
				<form role="form" class="form-vertical" action="" method="POST">
					<div class="col-lg-8" style="padding-bottom:70px"> 
		              	<input type="hidden" name="_token" value="{{csrf_token()}}">
		                <fieldset>
		                  <div class="form-group">
		                    <label class="control-label">Tên</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Giới tính</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Ngày sinh</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Số điện thoạiz</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Địa chỉ</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Mail</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Trình độ</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Ngoại ngữ</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Học vấn(Cấp cao nhất)</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Giới thiệu bản thân, kinh nghiệm làm việc</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <div class="form-group">
		                    <label class="control-label">Mong muốn</label>
		                    <input class="form-control" name="name" placeholder=" " value="" />
		                  </div>
		                  <br>
		                  <br>
		                  <button type="submit" class="btn btn-orange">Login</button>
		                </fieldset>
	            	</div>
              	</form>

			<!-- END .content-block-single -->
			</div>


		</div>
		

	<!-- END .wrapper -->
	</div>
@endsection