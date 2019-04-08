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
                        <h1 class="panel-title">{{trans('myprofile.register_profile')}}</h1>
                    </div>

                    <form class="form-vertical" method="POST" action="" enctype="multipart/form-data" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.name')}}</label>
                            <div class="control-detail">
                                <input type="text" class="form-control" name="txtname" placeholder=" " value="{{$cus_data->cusfullname}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.sex')}}</label>
                            <div class="control-detail">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="0"
                                           @if($cus_data["sex"] == 0)
                                           checked="checked"
                                           @endif
                                           > {{trans('myprofile.male')}}
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" value="1"
                                           @if($cus_data["sex"] == 1)
                                           checked="checked"
                                           @endif
                                           > {{trans('myprofile.female')}}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.birthday')}}</label>
                            <div class="control-detail">
                                <input class="form-control" name="birthday" type="date" value="{{$cus_data->birthday}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.phone')}}</label>
                            <div class="control-detail">
                                <input class="form-control" name="phone" placeholder=" " value="{{$cus_data->cusphone}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.address')}}</label>
                            <div class="control-detail">
                                <input class="form-control" name="address" placeholder=" " value="{{$cus_data->cusaddress}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.education')}}</label>
                            <div class="control-detail">
                                <select class="form-control" name="nnHocVan" id="nn-hoc-van" required>
                                    <option value="">---{{trans('myprofile.choose_education')}}---</option>
                                    <option value="Cấp 3"
                                        @if($cus_data["education"]=="Cấp 3")
                                        selected='selected'
                                        @endif
                                    > {{trans('myprofile.high_school')}} </option>
                                    <option value="Cao Đẳng"
                                        @if($cus_data["education"]=="Cao Đẳng")
                                        selected='selected'
                                        @endif
                                    > {{trans('myprofile.colleges')}} </option>
                                    <option value="Đại học"
                                        @if($cus_data["education"]=="Đại học")
                                        selected='selected'
                                        @endif
                                    > {{trans('myprofile.university')}} </option>
                                    <option value="Thạc sĩ"
                                        @if($cus_data["education"]=="Thạc sĩ")
                                        selected='selected'
                                        @endif
                                    > {{trans('myprofile.master')}} </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{trans('myprofile.japanese')}}</label>
                            <div class="control-detail">
                                <select class="form-control w50" name="nnLanguageJP" id="nn-language-jp" required>
                                    <option value="">---{{trans('myprofile.choose_level')}}---</option>
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
                            <label class="control-label">{{trans('myprofile.other_language')}}</label>
                            <div class="control-detail">
                                <input class="form-control" name="nnLanguageOther" placeholder="Toeic 500" value="{{$cus_data->language_other}}" />
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label"><span class="nowrap">{{trans('myprofile.self_introduce')}}</span> <span class="nowrap">{{trans('myprofile.work_experience')}}</span></label>
                            <div class="control-detail">
                                <textarea name="nnIntroduce" class="form-control" rows="6">{!! old('nnIntroduce',isset($cus_data) ? $cus_data['introduce'] : null) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group detail-textarea">
                            <label class="control-label">{{trans('myprofile.desire')}}</label>
                            <div class="control-detail">
                                <textarea name="nnDesire" class="form-control" rows="6">{!! old('nnDesire',isset($cus_data) ? $cus_data['desire'] : null) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group detail-photo">
                            <label for="hnnavatar" class="control-label">{{trans('myprofile.avatar')}}<i class="far fa-image"></i></label>
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
                            <button type="submit" class="form-button button-red">{{trans('myprofile.update')}}</button>
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
