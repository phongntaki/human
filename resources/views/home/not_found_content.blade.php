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

                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-body big-message">
                        <div class="big-message-heading">
                            <h1 class="big-message-title">{{trans('not_found_content.khong_tim_thay_noi_dung')}}</h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title">{{trans('not_found_content.chua_cap_nhat')}}</h2>
                            <p>{{trans('not_found_content.trang_ban_dang_truy_cap_hien_khong_co_noi_dung')}}</h2></p>
                            <p class="back-button">
                                <a href="{{url('/')}}" class="back-button">{{trans('not_found_content.ve_trang_chu')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>

    </div>
</div>

@endsection
