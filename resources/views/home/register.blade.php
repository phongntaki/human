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
        <div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
            <div class="ot-breaking-news-controls">
                <button class="right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
                <button class="right" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
                <strong><i class="fa fa-bar-chart"></i>Tin mới  </strong>
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
        <!-- END .ot-breaking-news-body -->
        </div>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">FullName</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                <!-- @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <!-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
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