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
            <div class="content-panel access-panel">

               <div class="login-form">
                    <h1 class="panel-title">{{trans('home_login.login')}}</h1>
                   <form class="form-vertical" action="" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @include('flash::message')
                        <div class="form-group detail-email">
                            <!-- @if(Session::has('flag'))
                            <div class="alert alert-{{Session::get('flag')}}">
                                <p>{{Session::get('message')}}</p>
                            </div>
                            @endif -->
                            <label class="control-label" for="login-email">{{trans('home_login.email')}}</label>
                            <div class="control-detail">
                                <input type="email" id="login-email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group detail-password">
                            <label  class="control-label" for="login-password">{{trans('home_login.password')}}</label>
                            <div class="control-detail">
                                <input type="password" id="login-password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="password-message">
                            <a class="message-text" href="{{route('send-mail-reset-pass')}}">{{trans('home_login.forgotten_password')}}</a>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="form-button button-red">{{trans('home_login.login')}}</button>
                            <a href="{{ url('/login_social/facebook/gioi-thieu')}}" class="form-button">{{trans('home_login.facebook_login')}}</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection
