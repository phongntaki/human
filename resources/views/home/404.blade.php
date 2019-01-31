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
                            <h2 class="sub-title">Trang tìm kiếm không tìm thấy</h2>
                            <p>Trang tìm kiếm tạm thời không thể truy cập được,  đã di chuyển hoặc có khả năng đã bị xóa, </p>
                            <p class="back-button">
                                <a href="{{url('/')}}">Về trang chủ</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection
