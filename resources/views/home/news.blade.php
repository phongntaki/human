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
                        <h1 class="post-title">
                            <!-- {{$itemnews->newsname}} -->
                            @if(Session::get('website_language') === 'vi' || Session::get('website_language')===null)
                                {!! $itemnews->newsname !!}
                            @elseif(Session::get('website_language') === 'jp')
                                {!! $itemnews->newsname_jp !!}
                            @elseif(Session::get('website_language') === 'en')
                                {!! $itemnews->newsname_en !!}
                            @endif
                        </h1>
                        <p class="post-date">{{ $itemnews->created_at->format('Y/m/d')}}</p>
                        <div class="post-header-meta">
                            <p class="post-category">
                                @if($itemnews->idlistnew !="")
                                <a href="{{url('loai-tin/'.$itemnews->list_name($itemnews->idlistnew)['slug'])}}">
                                    <!-- {{ $itemnews->list_name($itemnews->idlistnew)['listname'] }} -->
                                    @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                        {!! $itemnews->list_name($itemnews->idlistnew)['listname'] !!}
                                    @elseif(Session::get('website_language') === 'jp')
                                        {!! $itemnews->list_name($itemnews->idlistnew)['listname_jp'] !!}
                                    @elseif(Session::get('website_language') === 'en')
                                        {!! $itemnews->list_name($itemnews->idlistnew)['listname_en'] !!}
                                    @endif
                                </a>
                                @elseif($itemnews->idmodnew !="")
                                <a href="{{url('loai-tin/'.$itemnews->mod_name($itemnews->idmodnew)['slug'])}}">
                                    <!-- {{ $itemnews->mod_name($itemnews->idmodnew)['modname'] }} -->
                                    @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                        {!! $itemnews->mod_name($itemnews->idmodnew)['modname'] !!}
                                    @elseif(Session::get('website_language') === 'jp')
                                        {!! $itemnews->mod_name($itemnews->idmodnew)['modname_jp'] !!}
                                    @elseif(Session::get('website_language') === 'en')
                                        {!! $itemnews->mod_name($itemnews->idmodnew)['modname_en'] !!}
                                    @endif
                                </a>
                                @endif
                            </p>
                            <p class="post-share">
                                <a href="#comments" class="meta-comment"><i class="fas fa-comment"></i><span class="fb-comments-count" data-href="{{url()->current()}}"></span> {{trans('news.comment')}}</a>
                                <a href="#" class="meta-view"><i class="fas fa-chart-bar"></i>{{ $itemnews->view_count }} {{trans('news.viewers')}}</a>
                            </p>
                        </div>
                    </div>

                    <!-- BEGIN .post-body -->
                    <div class="post-body">
                        <div class="post-body-inner">
                            <!-- {!! $itemnews->newcontent !!} -->
                            @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                {!! $itemnews->newcontent !!}
                            @elseif(Session::get('website_language') === 'jp')
                                {!! $itemnews->newcontent_jp !!}
                            @elseif(Session::get('website_language') === 'en')
                                {!! $itemnews->newcontent_en !!}
                            @endif
                        </div>

                        @if (Session::get('logined_cus') != 1)
                        <div class="no-information">
                            <p class="noinfo-text">
                                <span class="nowrap">{{trans('home_master.ban_nen_dang_ky_thong_tin_ca')}}</span> <span class="nowrap">{{trans('home_master.nhan_de_chung_toi_co')}}</span> <span class="nowrap">{{trans('home_master.the_chon_ra_cong_viec')}}</span> <span class="nowrap">{{trans('home_master.tot_nhat_phu_hop_voi_ban')}}</span> <span class="nowrap">{{trans('home_master.chua_co_tai_khoan')}}</span><span class="btn-noinfo nowrap"><a href="{{ url('/register') }}" style="color: #81F7F3">{{trans('home_master.dang_ky_ngay')}}</a></span>
                            </p>
                        </div>
                            @endif
                    </div>

                    <!-- BEGIN .post-footer-meta -->
                    <div class="post-footer-meta">
                        <!-- social button -->
                        <div class="post-sns">
                            <p class="share-title"><i class="fas fa-share-alt"></i>{{trans('news.share')}}:</p>
                            <div class="fb-share-button"
                                 data-href="{{url()->current()}}"
                                 data-layout="button_count">
                            </div>
                            <div class="g-plus" data-action="share" data-annotation="bubble" data-height="24" data-href="{{url()->current()}}"></div>
                        </div>
                        <!-- post-tag -->
                        <div class="post-tags">
                            <p class="tags-title"><i class="fas fa-tags"></i>{{trans('news.tags')}}:</p>
                            <?php
                            if($itemnews->newtag !=""){
                                $tags = explode(", ", $itemnews->newtag);
                            }
                            ?>
                            @if(!empty($tags))
                            @for($count=0; $count < count($tags);$count ++ )
                            <a class="tag-item" href="{{url('/tags/'.$tags[$count])}}">{{$tags[$count]}}</a>
                            @endfor
                            @endif
                        </div>
                    </div>
                </div>

                <!-- BEGIN .content-panel facebook-panel -->
                <div class="content-panel fb-comment">
                    <div class="content-panel-title">
                        <h2> {{trans('news.your_opinion')}}</h2>
                    </div>
                    <div class="content-panel-body">
                        <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%" data-numposts="5"></div>
                    </div>
                <!-- END .content-panel -->
                </div>

                <!-- BEGIN .content-panel carousel-type-->
                @if($new_in_list_active->count()>0)
                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2>{{trans('news.continue_reading')}}</h2>
                    </div>
                    <div class="content-panel-body">
                       <ul class="panel-items">
                           @foreach($new_in_list_active as $item_lt )
                           <li class="item">
                               <a href="{{url('chi-tiet/'.$item_lt->slug)}}">
                                   <div class="item-image">
                                       <img class="object-fit--img" src="{{url('/public/img/news/100x100/'.$item_lt->newimg)}}" alt="{{$item_lt->newsname}}">
                                   </div>
                                   <div class="item-lead">
                                       <p class="item-date">{{$item_lt->created_at->format('Y/m/d')}}</p>
                                       <h3 class="item-title">{{$item_lt->newsname}}</h3>
                                   </div>
                               </a>
                           </li>
                           @endforeach
                       </ul>
                    </div>
                </div>
                @endif
            </div>

            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>

    </div>
</div>
@endsection
