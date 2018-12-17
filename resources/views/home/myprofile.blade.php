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
			                    <input class="form-control" name="txtname" placeholder=" " value="{{$cus_data->cusfullname}}" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới tính</label>
			                    <div class="col-xs-12 col-md-12">
			                        <div class="form-group">
			                            <div class="col-xs-12 col-md-12">
			                                <label class="radio-inline">
			                                    <input type="radio" name="sex" value="0" 
			                                    @if($cus_data["sex"] == 0)
							                        checked="checked"
							                    @endif
			                                    > Nam
			                                </label>
			                                <label class="radio-inline">
			                                    <input type="radio" name="sex" value="1" 
			                                    @if($cus_data["sex"] == 1)
							                        checked="checked"
							                    @endif
			                                    > Nữ
			                                </label>                           
			                            </div>                    
			                        </div>
			                    </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Ngày sinh</label>
			                    <input class="form-control" name="birthday" type="date" value="{{$cus_data->birthday}}"/>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Số điện thoại</label>
			                    <input class="form-control" name="phone" placeholder=" " value="{{$cus_data->cusphone}}" />
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Địa chỉ</label>
			                    <input class="form-control" name="address" placeholder=" " value="{{$cus_data->cusaddress}}" />
		                  	</div>
		                  	<div class="form-group">
		                    	<label class="control-label">Học vấn(Cấp cao nhất)</label>
			                    <select class="form-control" name="nnHocVan" id="nn-hoc-van" required>
	                                <option value="">---Vui Lòng Chọn Học Vấn---</option>
	                                <option value="Cấp 3" 
	                                	@if($cus_data["education"]=="Cấp 3")
	                                	selected='selected'
	                                	@endif
	                                > Cấp 3 </option>
	                                <option value="Cao Đẳng"
	                                	@if($cus_data["education"]=="Cao Đẳng")
	                                	selected='selected'
	                                	@endif
	                                > Cao Đẳng </option>
	                                <option value="Đại học"
	                                	@if($cus_data["education"]=="Đại học")
	                                	selected='selected'
	                                	@endif
	                                > Đại học </option>
	                                <option value="Thạc sĩ"
	                                	@if($cus_data["education"]=="Thạc sĩ")
	                                	selected='selected'
	                                	@endif
	                                > Thạc sĩ </option>
	                            </select>
		                  	</div>
		                  	<div class="form-group">
		                    	<label class="control-label">Tiếng Nhật</label>
		                    	<select class="form-control w50" name="nnLanguageJP" id="nn-language-jp" required>
	                                <option value="">---Vui Lòng Chọn Cấp độ---</option>
	                                <option value="N1"
	                                	@if($cus_data["language_jp"]=="N1")
	                                	selected='selected'
	                                	@endif
	                                > N1 </option>
	                                <option value="N2"
	                                	@if($cus_data["language_jp"]=="N2")
	                                	selected='selected'
	                                	@endif
	                                > N2 </option>
	                                <option value="N3"
	                                	@if($cus_data["language_jp"]=="N3")
	                                	selected='selected'
	                                	@endif
	                                > N3 </option>
	                                <option value="N4"
	                                	@if($cus_data["language_jp"]=="N4")
	                                	selected='selected'
	                                	@endif
	                                > N4 </option>
	                                <option value="N5"
	                                	@if($cus_data["language_jp"]=="N5")
	                                	selected='selected'
	                                	@endif
	                                > N5 </option>
                            	</select>
			                    <div>
			                    	<label class="control-label">Ngoại Ngữ Khác</label>
			                    	<input class="form-control" name="nnLanguageOther" placeholder="Toeic 500" value="{{$cus_data->language_other}}" />
			                    </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Giới thiệu bản thân, kinh nghiệm làm việc</label>
			                    <div class="col-sx-12">
		                          <textarea name="nnIntroduce" class="form-control" rows="4">{!! old('nnIntroduce',isset($cus_data) ? $cus_data['introduce'] : null) !!}</textarea>
		                        </div>
		                  	</div>
		                  	<div class="form-group">
			                    <label class="control-label">Mong muốn</label>
			                    <div class="col-sx-12">
		                          <textarea name="nnDesire" class="form-control" rows="4">{!! old('nnDesire',isset($cus_data) ? $cus_data['desire'] : null) !!}</textarea>
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
@endsection