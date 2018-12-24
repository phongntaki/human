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
<!--
        <div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
            <div class="ot-breaking-news-controls">
                <button class="right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
                <button class="right" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
                <strong><i class="fa fa-bar-chart"></i>Tin mới    </strong>
            </div>
            <div class="ot-breaking-news-content">
                <div class="ot-breaking-news-content-wrap">
                    @foreach($khuyenmai as $item_km)
                    <div class="item">
                        <strong><a href="{{url('/chi-tiet/'.$item_km->slug)}}">{{ $item_km->newsname}}</a></strong>
                    </div>
                    @endforeach
                </div>
            </div>
-->
        <!-- END .ot-breaking-news-body -->
<!--        </div>-->

    <h1>紹介業種一覧</h1>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                    <div class="columnTitle" style="float: left; width: 682.75px; border-bottom: 2px solid rgb(255, 92, 46); font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 20px; font-style: italic; padding-bottom: 5px; color: rgb(56, 56, 56);">
                        <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                            <div>
                                <span style="font-size: 14px;">
                                    <span style="font-family: &quot;times new roman&quot;, times, serif;">Là một trong những đơn vị tiên phong hoạt động trong lĩnh vực xuất khẩu lao động tại Việt Nam,&nbsp;công ty cổ phần nhân lực TTC Việt Nam đã phát huy lợi thế, tăng cường các hoạt động tuyên truyền, tuyển chọn lao động, xây dựng thương hiệu trên cơ sở lòng tin của người lao động trong nước và của đối tác sử dụng lao động nước ngoài.&nbsp;
                                    </span>
                            </span><br>&nbsp;
                            </div>
                        <div style="text-align: center;">
                            <img alt="" src="https://japan.net.vn/images/uploads/2015/12/21/xuatkhaulaodong3.jpg" style="border: 0px; width: 560px; height: 327px;">
                        </div>
                        <div>&nbsp;</div>
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Trải qua hơn 50 năm hình thành và phát triển, dưới sự điều hành và chỉ đạo sâu sát của lãnh đạo công ty cũng như tinh thần đoàn kết, đồng lòng vì sự phát triển chung. Công ty cổ phần nhân lực TTC Việt Nam đã có những định hướng đúng đắn, khắc phục khó khăn, hoạt động ngày càng ổn định, từng bước chiếm lĩnh thị trường, tạo uy tín với đối tác trong và ngoài nước cũng như với người lao động.
                            </span>
                        </span><br><br>
                        <div style="text-align: center;">
                            <span style="font-size: 14px;">
                                <span style="font-family: &quot;times new roman&quot;, times, serif;"><img alt="" src="https://japan.net.vn/images/uploads/2015/12/21/xuatkhaulaodong2.jpg" style="border: 0px; width: 560px; height: 327px;">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">&nbsp;
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; text-align: center;">
                        <span style="color: rgb(0, 0, 205);">
                            <span style="font-family: &quot;times new roman&quot;, times, serif; font-size: 14px;"><em>Thương hiệu TTC Việt Nam trong XKLĐ&nbsp;đã được người lao động trên cả nước biết đến với sự tin tưởng cao, được nhiều đối tác nước ngoài tìm đến hợp tác</em>&nbsp;
                            </span>
                        </span>
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">&nbsp;</div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Công ty luôn đứng trong top 10 doanh nghiệp có số lượng lao động xuất khẩu lớn nhất cả nước, điều này đã đóng góp lớn trong công tác đào tạo nghề và giải quyết việc làm cho người lao động
                            </span>
                        </span>
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">&nbsp;</div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Để đẩy mạnh công tác xuất khẩu lao động, TTC Việt Nam đã Liên kết với các Ban chỉ đạo xuất khẩu lao động, cơ sở dạy nghề, trường đào tạo nghề để tuyển chọn và đào tạo lao động có chất lượng, đáp ứng yêu cầu của đối tác.&nbsp;
                            </span>
                        </span>
                        <br>&nbsp;
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; text-align: center;">
                        <div class="embed-container"><iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/B29PGmoUvsg?showinfo=0" width="560"></iframe>
                        </div>
                        <div>
                            <span style="font-size: 14px;">
                                <span style="font-family: &quot;times new roman&quot;, times, serif;">&nbsp;&nbsp;</span>
                            </span>
                        </div>
                        <div>
                            <span style="color: rgb(0, 0, 205);"><em>
                                <span style="font-size: 14px;">
                                    <span style="font-family: &quot;times new roman&quot;, times, serif;">Chất lượng lao động luôn được công ty đặt lên hàng đầu</span>
                                </span></em>
                            </span>
                        </div>
                        <div>&nbsp;</div>
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Khi lao động đã sang đến nước sở tại, công ty vẫn tiếp tục quan tâm và giải quyết các phát sinh của lao động, đề ra nhiều giải pháp khắc phục tình trạng lao động bỏ trốn và bảo vệ quyền lợi chính đáng cho người lao động... Để làm tốt việc này, TTC Việt Nam luôn duy trì văn phòng đại diện tại các nước có đông lao động sang làm việc như Nhật Bản, Đài Loan, Malaysia.
                            </span>
                        </span><br>&nbsp;
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Thời gian tới, để thúc đẩy và nâng cao chất lượng công tác dạy nghề, xuất khẩu lao động, công ty sẽ bồi dưỡng nâng cao chuyên môn, nghiệp vụ cho cán bộ nhân viên, xây dựng ý thức trách nhiệm, tác phong làm việc chuyên nghiệp, sáng tạo, mở rộng quan hệ hợp tác với các đối tác trong nước, nước ngoài với nguồn cung ứng lao động xuất khẩu có uy tín và chất lượng.&nbsp;
                            </span>
                        </span>
                    </div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">&nbsp;</div>
                    <div style="color: rgb(48, 48, 48); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal;">
                        <span style="font-size: 14px;">
                            <span style="font-family: &quot;times new roman&quot;, times, serif;">Bên cạnh đó, để đáp ứng và cung cấp mọi thông tin chính xác nhất tới người lao động, TTC Việt Nam sẽ tiếp nhận hồ sơ lao động, tư vấn và tuyển dụng tại các xã, phường. Ngoài ra, công ty sẽ đặc biệt quan tâm, trú trọng đến công tác đào tạo lao động trước khi xuất cảnh để nâng cao chất lượng lao động, đáp ứng nhu cầu thị trường và nâng cao uy tín của công ty
                            </span>
                        </span>
                    </div>
                    </div>
                </div>
                <?php $index_count = 0; $ads = 0;?>
                @foreach($modnews as $index_mod)
                <!-- BEGIN .content-panel -->

                <?php $index_count = $index_count +1; ?>
                <!-- END .content-panel -->
                @endforeach
            </div>
            <!-- END .content-block-single -->
            <!-- BEGIN .sidebar -->
            <aside class="sidebar sticky_column">
                @include('home.sitebar_right')
            <!-- END .sidebar -->
            </aside>
        </div>
        <!-- BEGIN .content-panel -->
        <div class="content-panel">
            <div class="content-panel-body do-space">
                @if($adverts_main[$ads]->code != "")
                    {{$adverts_main[$ads]->code}}
                @else
                <a href="{{$adverts_main[$ads]->link}}" target="_blank">
                    <img src="{{url('public/img/images_bn/'.$adverts_main[$ads]->img)}}" alt="No image" width="100%" style="object-fit: contain; max-height: 150px; display: block;overflow:hidden; margin-bottom: 20px;" />
                </a>
                @endif
            </div>
        <!-- END .content-panel -->
        </div>

    <!-- END .wrapper -->
    </div>
@endsection
