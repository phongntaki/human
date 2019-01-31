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
                <!-- BEGIN .content-panel post-content -->
                <div class="content-panel post-content">
                    <!-- BEGIN .post-header -->
                    <div class="post-header">
                        <h1 class="post-title">Giới thiệu chung</h1>
                    </div>
                    <div class="post-body">
                        <table class="date-table">
                            <tbody>
                                <tr>
                                    <th>企業名</th>
                                    <td>株式会社エンジ</td>
                                </tr>
                                <tr>
                                    <th>代表取締役社長</th>
                                    <td>髙梨 海</td>
                                </tr>
                                <tr>
                                    <th>設立</th>
                                    <td>2019年00月00日</td>
                                </tr>
                                <tr>
                                    <th>資本金</th>
                                    <td>500万円</td>
                                </tr>
                                <tr>
                                    <th>事業内容</th>
                                    <td>住宅設備施工事業、IT事業</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>沿革</h2>
                        <p>Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.Đây là văn bản mẫu. Cân bằng ký tự được nhập để xem số lượng dòng.</p>
                    </div>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>

@endsection
