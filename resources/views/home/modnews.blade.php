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
                <!-- BEGIN .content-panel -->
                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h1 class="panel-title"><a href="{{ url('loai-tin/'.$modnew->slug) }}">
                            @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                {!! $modnew->modname !!}
                            @elseif(Session::get('website_language') === 'jp')
                                {!! $modnew->modname_jp !!}
                            @elseif(Session::get('website_language') === 'en')
                                {!! $modnew->modname_en !!}
                            @endif
                        </a></h1>
                        <ul class="panel-title-submenu">
                            @foreach($modnew->listnew_inmod($modnew->id) as $cat_mod)
                            <li class="submenu-item">
                                <a href="{{ url('loai-tin/'.$cat_mod->slug) }}">
                                    @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                        {!! $cat_mod->listname !!}
                                    @elseif(Session::get('website_language') === 'jp')
                                        {!! $cat_mod->listname_jp !!}
                                    @elseif(Session::get('website_language') === 'en')
                                        {!! $cat_mod->listname_en !!}
                                    @endif
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <?php
                        $item = $modnew->top_news_item($modnew->id)->take(3);
                     ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            @foreach($item as $news)
                            <li class="item">
                                <a href="{{url('/chi-tiet/'.$news->slug)}}">
                                    <div class="item-lead">
                                        <h3 class="item-title">
                                            @if(Session::get('website_language')==='vi' || Session::get('website_language')===null)
                                                {!! $news->newsname !!}
                                            @elseif(Session::get('website_language') === 'jp')
                                                {!! $news->newsname_jp !!}
                                            @elseif(Session::get('website_language') === 'en')
                                                {!! $news->newsname_en !!}
                                            @endif
                                        </h3>
                                        <p class="item-date">{{$news->created_at->format('Y/m/d')}}</p>
                                    </div>
                                    <div class="item-image">
                                        <img src="{{url('public/img/news/800x800/'.$news['newimg'])}}" alt="{{$news->created_at}}" />
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- BEGIN .content-panel -->
                {{-- tin moi trong mod          --}}
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                        <h2 class="panel-title">{{trans('modnews.new_news_in_the_section')}}</h2>
                    </div>
                    <div class="content-panel-body" id="content_pro">
                        @include('home.content_news_ajax')
                    </div>
                </div>

                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#">{{trans('modnews.loading')}}</p>
                </div>

                <!-- BIGIN ReadMore -->
                <div class="read-more" @if($total <=9) style="display: none;" @endif>
                    <a class="btn-more" id="load_more" base_url="{{url('')}}" modid="{{$modnew->id}}" skip="10" take="5" total="{{$total}}"  role="button">
                        <i class="fas fa-angle-right"></i>
                         {{trans('modnews.see_more')}}
                    </a>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
             @include('home.sitebar_right')
        </div>
    </div>
</div>

<script type="text/javascript">
        $("#load_more").click(function(e){
          e.preventDefault()
          base_url = $(this).attr('base_url');
          modid = $(this).attr('modid');
          skip = $(this).attr('skip');
          take = $(this).attr('take');
          total = $(this).attr('total');
          $.ajax(
                {
                    url: base_url+'/loadmoremod',
                    type: 'GET',
                    data: {
                        "modid" : modid,
                        "skip" : skip,
                        "take" : take,
                    },
                    beforeSend: function()
                    {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data)
                {
                    if(data.html == " "){
                        $('.ajax-load').html("Không có kết quả nào !");
                        return;
                    }
                    $('.ajax-load').hide();
                    $("#content_pro").append(data);
                    $('#load_more').attr('skip', parseInt(skip) +5);
                    skip = $('#load_more').attr('skip');

                    if (parseInt(skip) >= parseInt(total)) {
                        $('#load_more').css('display', 'none');
                    }
                    // console.log(data);

                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                      alert('server not responding...');
                });
        });
    </script>

@endsection
