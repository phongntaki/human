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
                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-body big-message">
                        <div class="big-message-heading">
                            <i class="far fa-file"></i>
                            <h1 class="big-message-title">404 not found.</h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title">{{trans('404.trang_tim_kiem_khong_tim_thay')}}</h2>
                            <p>{{trans('404.trang_tim_kiem_tam_thoi_khong_the_truy_cap')}}</p>
                            <p class="back-button">
                                <a href="{{url('/')}}">{{trans('404.ve_trang_chu')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection
