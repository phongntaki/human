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

                        <div class="big-message-inner">
                            <i class="fa fa-file-text-o"></i>
                            <h1>Page not found</h1>
                            <h2>記事がありません</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam rem libero quod officia quisquam hic id repudiandae quaerat excepturi ipsum facilis unde blanditiis, consequuntur itaque temporibus voluptatum, consequatur magnam, quos./p>
                            <a href="{{url('/')}}" class="back-button"><i class="fa fa-home"></i>Về trang chủ</a>
                        </div>

                    </div>
                <!-- END .content-panel -->
                </div>

            <!-- END .content-block-single -->
            </div>

        </div>

    </div>
</div>

@endsection
