@extends('master')
@section('title','workflow management - customer')
@section('content')
<div id="page-wrapper">
	<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans("admin.info") }} {{ trans("admin.candidate") }}</h1>
    </div>
        <!-- /.col-lg-12 -->
  </div>
    <!-- /.row -->
    <div class="row info alert-info" style="padding: 15px 0;">         
      <div class="col-xs-6">                        
        <div class="form-group">
          <label for="nn-name-cus" class="col-xs-3 control-label"><i class="fa fa-id-badge"></i> {{ trans("admin.name") }}: </label>
          <div class="col-xs-9">
            <p><b>{{ $customer->cusfullname ? $customer->cusfullname : '###############'  }}</b></p>
          </div>
        </div>
        <div class="form-group">
          <label for="nn-sex-cus" class="col-xs-3 control-label"><i class="fa fa-id-badge"></i> {{ trans("admin.sex") }}: </label>
          <div class="col-xs-9">
            <p><b>@if($customer->sex=='0')
              Nam
              @else
              Nữ
              @endif
            </b></p>
          </div>
        </div>
        <div class="form-group">
          <label for="nn-birthday-cus" class="col-xs-3 control-label"><i class="fa fa-map-marker"></i> {{ trans("admin.birthday") }}:</label>
          <div class="col-xs-9">
            <p>{{ $customer->birthday ? $customer->birthday : '###############'  }}</p>
          </div>
        </div>
        <div class="form-group">
          <label for="nn-mail-cus" class="col-xs-3 control-label"><i class="fa fa-envelope-o"></i> {{ trans("admin.email") }}:</label>
          <div class="col-xs-9">
            <p>{{ $customer->cusemail ? $customer->cusemail : '###############'  }}</p>
          </div>
        </div> 
        <div class="form-group">
          <label for="nn-phone-cus" class="col-xs-3 control-label"><i class="fa fa-phone"></i> {{ trans("admin.phone") }}:</label>
          <div class="col-xs-9">
            <p>{{ $customer->cusphone ? $customer->cusphone : '###############' }}</p>
          </div>
        </div>
        <div class="form-group">
          <label for="nn-address-cus" class="col-xs-3 control-label"><i class="fa fa-map-marker"></i> {{ trans("admin.address") }}:</label>
          <div class="col-xs-9">
            <p>{{ $customer->cusaddress ? $customer->cusaddress : '###############'  }}</p>
          </div>
        </div>                
        <div class="form-group">
          <label for="nn-key-cus" class="col-xs-3 control-label"><i class="fa fa-image"></i> image:</label>
          <div class="col-xs-9">
            <img style="width: 20%;height:20%;" @if($customer->idloginsocial==null) src="{{ asset('public/img/customers/'.$customer->cusimg) }}" @else src="{{ $customer->cusimg }}" @endif >
          </div>
        </div>                  
      </div>
       <div class="col-xs-6">
          <div class="form-group">
            <label for="nn-languagejp-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.language_jp") }}:</label>
            <div class="col-xs-9">
              <p>   {{$customer->language_jp}}
              </p>
            </div>
          </div>
          <div class="form-group">
            <label for="nn-languageother-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.language_other") }}:</label>
            <div class="col-xs-9">
              <p>   {{$customer->language_other}}
              </p>
            </div>
          </div>
          <div class="form-group">
            <label for="nn-education-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.education") }}:</label>
            <div class="col-xs-9">
              <p>   {{$customer->education}}
              </p>
            </div>
          </div>

          <div class="form-group">
            <label for="nn-introduce-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.introduce") }}:</label>
            <div class="col-xs-9">
              <p>   {{$customer->introduce}}
              </p>
            </div>
          </div>
          <div class="form-group">
            <label for="nn-desire-cus" class="col-xs-3 control-label"><i class="fa fa-ravelry"></i> {{ trans("admin.desire") }}:</label>
            <div class="col-xs-9" >
              <p>{{$customer->desire}}</p>
            </div>
          </div>
          <div class="form-group">
            <label for="nn-desire-cus" class="col-xs-3 control-label"><i class="fa fa-ravelry"></i> {{ trans("admin.facebook") }}:</label>
            <div class="col-xs-9" >
              <p>{{$customer->cusface}}</p>
            </div>
          </div>
      </div>   
    </div>
</div>   
          
@endsection()