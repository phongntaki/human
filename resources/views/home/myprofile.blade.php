@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

<div class="boxed active">
    <div class="wrapper">

        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <div class="content-panel">
                    <div class="content-panel-title">
                        <h1 class="panel-title">Đăng ký hồ sơ</h1>
                    </div>

                    <form class="form-vertical" method="POST" action="" enctype="multipart/form-data" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="control-label">Tên</label>
                            <div class="control-detail">
                                <input type="text" class="form-control" name="txtname" placeholder=" " value="{{$cus_data->cusfullname}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Giới tính</label>
                            <div class="control-detail">
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
                        <div class="form-group">
                            <label class="control-label">Ngày sinh</label>
                            <div class="control-detail">
                                <input class="form-control" name="birthday" type="date" value="{{$cus_data->birthday}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số điện thoại</label>
                            <div class="control-detail">
                                <input class="form-control" name="phone" placeholder=" " value="{{$cus_data->cusphone}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Địa chỉ</label>
                            <div class="control-detail">
                                <input class="form-control" name="address" placeholder=" " value="{{$cus_data->cusaddress}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Học vấn(Cấp cao nhất)</label>
                            <div class="control-detail">
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
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tiếng Nhật</label>
                            <div class="control-detail">
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
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ngoại Ngữ Khác</label>
                            <div class="control-detail">
                                <input class="form-control" name="nnLanguageOther" placeholder="Toeic 500" value="{{$cus_data->language_other}}" />
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label"><span class="nowrap">Giới thiệu bản thân,</span> <span class="nowrap">kinh nghiệm làm việc</span></label>
                            <div class="control-detail">
                                <textarea name="nnIntroduce" class="form-control" rows="6">{!! old('nnIntroduce',isset($cus_data) ? $cus_data['introduce'] : null) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label">Mong muốn</label>
                            <div class="control-detail">
                                <textarea name="nnDesire" class="form-control" rows="6">{!! old('nnDesire',isset($cus_data) ? $cus_data['desire'] : null) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group detail-photo">
                            <label for="hnnavatar" class="control-label">Hình ảnh<i class="far fa-image"></i></label>
                            <div class="control-detail">
                                <img id="hnnavatar"
                                @if($cus_data["cusimg"]=="no-img.png" && $cus_data["cusimg"]==null)
                                 src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png"
                                 @else
                                 src="{{ url('public/img/customers/'.$cus_data['cusimg']) }}"
                                 @endif
                                  alt="..." class="img-thumbnail" style="width: 50%;">
                                <input type="file" name="hnnavatarfile" id="hnnavatarfile" onchange="eshowimg(this);" style="display: none">
                                <input type="hidden" name="hnnimguserold" id="hnnimguserold">
                            </div>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red">Update</button>
                        </div>
                      </form>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>

@endsection
