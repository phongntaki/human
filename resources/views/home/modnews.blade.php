@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

<div class="boxed active">
    <div class="wrapper">

        <h1>カテゴリトップ／アーカイブページ2</h1>

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-title">
                        <ul class="sub_menu">
                            <li class="active"><a href="{{ url('loai-tin/'.$modnew->slug) }}">{{ $modnew->modname }}</a></li>
                            @foreach($modnew->listnew_inmod($modnew->id) as $cat_mod)
                                <li>
                                    <a href="{{ url('loai-tin/'.$cat_mod->slug) }}">{{ $cat_mod->listname }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <?php
                        $item = $modnew->top_news_item($modnew->id);
                        $hot = $item->shift();
                     ?>
                    <div class="row">
                        <div class="hidden-xs col-md-7 nopadding">
                            <div class="content-panel-body article-list">

                                <div class="item" data-color-top-slider="#867eef">
                                    <div class="item-header">
                                        <a href="{{url('chi-tiet/'.$hot->slug)}}">
                                            <span class="comment-tag"><i class="fa fa-comment-o"></i><span class="fb-comments-count" data-href="{{url('chi-tiet/'.$hot->slug)}}"></span><i></i></span>
                                            <span class="read-more-wrapper"><span class="read-more">Đọc thêm +<i></i></span></span>
                                            <img src="{{url('public/img/news/300x300/'.$hot->newimg)}}" alt="No image" />
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3><a href="{{url('chi-tiet/'.$hot->slug)}}">{{$hot->newsname}}</a></h3>
                                        <span class="item-meta">
                                            <a href="#"><i class="fa fa-clock-o"></i>{{$hot->created_at}}</a>
                                        </span>
                                        <p>{!! $hot->newintro !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-md-5 nopadding">
                            <div class="content-panel-body article-list">
                                <ul>
                                    @foreach($item as $news)
                                    <li>
                                        <a href="{{url('/chi-tiet/'.$news->slug)}}" title="{{$news->newsname}}"><b class="fa fa-angle-right" aria-hidden="true"></b> <b>{{$news->newsname}}</b> </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="visible-xs col-xs-12">
                            <div class="mobile_hot_img">
                                <a href="{{url('/chi-tiet/'.$hot->slug)}}" title="{{$hot->newsname}}">
                                    <img class="img-responsive" src="{{url('public/img/news/300x300/'.$hot->newimg)}}" alt="{{$hot->newimg}}">
                                </a>
                            </div>
                            <div class="mobile_title">
                                <a href="{{url('/chi-tiet/'.$hot->slug)}}" title="{{$hot->newsname}}"><h1>{{$hot->newsname}}</h1></a>
                            </div>
                        </div>
                        @foreach($item as $m_item)
                        <div class="visible-xs col-xs-6 padding4">
                            <div class="mobile_img">
                                <a href="{{url('/chi-tiet/'.$m_item->slug)}}" title="{{$m_item->newsname}}"><img class="img-responsive" src="{{url('public/img/news/300x300/'.$m_item['newimg'])}}" alt=""></a>
                            </div>
                            <div class="mobile_title">
                                <a href="{{url('/chi-tiet/'.$m_item->slug)}}" title="{{$m_item->newsname}}"><h1>{{$m_item->newsname}}</h1></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- END .content-panel -->
            {{-- tin moi trong mod          --}}
                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-title">
                        <ul class="sub_menu">
                            <li class="active"><a>Tin mới trong mục</a></li>
                        </ul>
                    </div>
                    <div class="row" id="content_pro">
                        @include('home.content_news_ajax')
                    </div>
                </div>
                <!-- END .content-panel -->

                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#">Đang tải</p>
                </div>

                <!-- BIGIN ReadMore -->
                <div class="text-center" @if($total <=10) style="display: none;" @endif>
                     <a class="btn btn-default btn-more-info" id="load_more" base_url="{{url('')}}" modid="{{$modnew->id}}" skip="10" take="5" total="{{$total}}"  role="button">
                        <i class="fa fa-refresh" aria-hidden="true"></i> Xem thêm
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
