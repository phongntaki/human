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
            <div class="content-panel login-panel">
                <div class="login-form">
                    <h1>Login</h1>
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
                            <div class="password-message">
                                <a class="" href="#">Forgotten Password</a>
                            </div>
                            <div class="login-submit">
                                <button type="submit" class="btn btn-orange">Login</button>
                                <a href="{{ url('/login_social/facebook/gioi-thieu')}}" class="btn btn-primary">Facebook Login</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <?php $index_count = 0; $ads = 0;?>
                @foreach($modnews as $index_mod)
                <!-- BEGIN .content-panel -->

                <?php $index_count = $index_count +1; ?>
                <!-- END .content-panel -->
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
