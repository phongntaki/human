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

                <div class="register-form">
                    <h1 class="panel-title">Register</h1>

                    <form class="form-vertical" method="POST" action="" role="form">
                        {{ csrf_field() }}
                        <!-- @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">
                            <p>{{Session::get('message')}}</p>
                        </div>
                        @endif -->
                        @include('flash::message')
                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label class="control-label" for="fullname">FullName</label>
                            <div class="control-detail">
                                <input type="text" id="fullname" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                <!-- @if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong>
</span>
@endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="register-email">E-Mail</label>
                            <div class="control-detail">
                                <input type="email" id="register-email" class="form-control" name="email" value="{{ old('email') }}" required>

                                <!-- @if ($errors->has('email'))
<span class="help-block">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label" for="register-password">Password</label>
                            <div class="control-detail">
                                <input type="password" id="register-password" class="form-control" name="password" required>

                                <!-- @if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password-confirmation">Confirm Password</label>
                            <div class="control-detail">
                                <input type="password" id="password-confirmation" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="form-button button-red">Register</button>
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

