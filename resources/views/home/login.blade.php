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

        <h1>ログインページ</h1>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <form role="form" class="form-vertical" action="" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                <fieldset>
                  <div class="control-group">
                  @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <label  class="control-label">E-Mail Address:</label>
                    <div class="controls">
                      <input type="email" name="email" class="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label">Password:</label>
                    <div class="controls">
                      <input type="password" name="password"  class="">
                    </div>
                  </div>
                  <a class="" href="#">Forgotten Password</a>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-orange">Login</button>

                    <a href="{{ url('/login_social/facebook/gioi-thieu')}}" class="btn btn-primary">Facebook Login</a>
                </fieldset>
              </form>
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
