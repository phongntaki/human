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
                            <h1 class="big-message-title">Không tìm thấy nội dung</h1>
                        </div>
                        <div class="big-message-content">
                            <h2 class="sub-title">Chưa cập nhật</h2>
                            <p>Trang bạn đang truy cập hiện không có nội dung.</p>
                            <p class="back-button">
                                <a href="{{url('/')}}" class="back-button">Về trang chủ</a>
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
