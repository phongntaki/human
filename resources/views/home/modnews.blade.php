@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

<div class="boxed active pages">
    <div class="wrapper">

<!--        <h1>カテゴリトップ／アーカイブページ2</h1>-->

        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2 class="panel-title"><a href="{{ url('loai-tin/'.$modnew->slug) }}">{{ $modnew->modname }}</a></h2>
                        <ul class="panel-title-submenu">
                            @foreach($modnew->listnew_inmod($modnew->id) as $cat_mod)
                            <li class="submenu-item">
                                <a href="{{ url('loai-tin/'.$cat_mod->slug) }}">{{ $cat_mod->listname }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

<!--
                    <?php
                        $item = $modnew->top_news_item($modnew->id)->take(3);
//                        $hot = $item->shift();
                     ?>
-->
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            @foreach($item as $news)
                            <li class="item">
                                <a href="{{url('/chi-tiet/'.$news->slug)}}">
                                    <div class="item-image">
                                        <img src="{{url('public/img/news/800x800/'.$news['newimg'])}}" alt="{{$news->created_at}}" />
                                    </div>
                                    <div class="item-lead">
                                        <p class="item-date">{{$news->created_at->format('Y/m/d')}}</p>
                                        <h3 class="item-title">{{$news->newsname}}</h3>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- tin moi trong mod          --}}
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                        <h2 class="panel-title">Tin mới trong mục</h2>
                    </div>
                    <div class="content-panel-body" id="content_pro">
                        @include('home.content_news_ajax')
                    </div>
                </div>

                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#">Đang tải</p>
                </div>

                <!-- BIGIN ReadMore -->
                <div class="text-center" @if($total <=9) style="display: none;" @endif>
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
