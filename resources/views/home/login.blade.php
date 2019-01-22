@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

<div class="boxed active">
    <div class="wrapper">

        <h1>ログインページ</h1>

        <div class="content-block">
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
            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>

@endsection
