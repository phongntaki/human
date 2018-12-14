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
                <label for="nn-name-cus" class="col-xs-3 control-label"><i class="fa fa-id-badge"></i> {{ trans("admin.name") }}:</label>
                <div class="col-xs-9">
                    <p><b>{{ $customer->cusfullname ? $customer->cusfullname : '###############'  }}</b></p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-address-cus" class="col-xs-3 control-label"><i class="fa fa-map-marker"></i> {{ trans("admin.address") }}:</label>
                <div class="col-xs-9">
                  <p>{{ $customer->cusaddress ? $customer->cusaddress : '###############'  }}</p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-phone-cus" class="col-xs-3 control-label"><i class="fa fa-phone"></i> {{ trans("admin.phone") }}:</label>
                <div class="col-xs-9">
                  <p>{{ $customer->cusphone ? $customer->cusphone : '###############' }}</p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-mail-cus" class="col-xs-3 control-label"><i class="fa fa-envelope-o"></i> {{ trans("admin.email") }}:</label>
                <div class="col-xs-9">
                    <p>{{ $customer->cusemail ? $customer->cusemail : '###############'  }}</p>
                </div>
              </div>                      
              <div class="form-group">
                <label for="nn-key-cus" class="col-xs-3 control-label"><i class="fa fa-image"></i> image:</label>
                <div class="col-xs-9">
                        <img style="width: 100%;" @if($customer->idloginsocial==null) src="{{ asset('public/img/customers/'.$customer->cusimg) }}" @else src="{{ $customer->cusimg }}" @endif >
                </div>
              </div>                  
           </div>
           <div class="col-xs-6">
                <div class="form-group">
                    <label for="nn-phone-cus" class="col-xs-3 control-label"><i class="fa fa-clock-o"></i> {{ trans("admin.group") }}:</label>
                    <div class="col-xs-9">
                      <p>{{ $customer->listgr->listname ? $customer->listgr->listname  : '###############'}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nn-note-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.education") }}:</label>
                    <div class="col-xs-9">
                      <p>   {{$customer->education}}
                      </p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nn-note-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> {{ trans("admin.introduce") }}:</label>
                    <div class="col-xs-9">
                      <p>   {{$customer->introduce}}
                      </p>
                    </div>
                </div>

              <div class="form-group">
                <label for="nn-phone-cus" class="col-xs-4 control-label"><i class="fa fa-ravelry"></i> {{ trans("admin.desire") }}:</label>
                <div class="col-xs-8" >
                  <p>{{$customer->desire}}</p>
                </div>
              </div>
               
           </div>   
    </div>
</div>   
          
@endsection()