@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

<div class="boxed active top-slider">
    <div class="wrapper">
        <!-- BEGIN .ot-breaking-news-body -->
        <div class="ot-breaking-news-body" data-breaking-timeout="4000" data-breaking-autostart="true">
            <div class="ot-breaking-news-controls">
                <button class="slider-button right" data-break-dir="right"><i class="fa fa-angle-right"></i></button>
                <button class="slider-button left" data-break-dir="left"><i class="fa fa-angle-left"></i></button>
            </div>
            <div class="ot-breaking-news-content">
                <div class="ot-breaking-news-content-wrap">
                @foreach($khuyenmai as $item_km)
                    <div class="item">
                        <a href="{{url('/chi-tiet/'.$item_km->slug)}}">
                            <div class="item-lead">
                                <p class="item-date">{{ $item_km->created_at->format('Y/m/d')}}</p>
                                <h3 class="item-title">{{ $item_km->newsname}}</h3>
                                <p class="item-desc">{{ $item_km->newintro}}</p>
                            </div>
                            <div class="item-image">
                                <img src="{{url('public/img/news/300x300/'.$item_km['newimg'])}}">
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        <!-- END .ot-breaking-news-body -->
        </div>
    </div>
</div>
<div class="boxed active">
    <div class="wrapper">
        <div class="content-block has-sidebar">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">
            <?php $index_count = 0; $ads = 0;?>
            @foreach($modnews as $index_mod)

                <div class="content-panel">
                    <div class="content-panel-title">
                        <h2 class="panel-title"><a href="{{ url('loai-tin/'.$index_mod->slug) }}">{{ $index_mod->modname }}</a></h2>
                        <ul class="panel-title-submenu">
                            @foreach($index_mod->listnews as $itemlist)
                            <li class="submenu-item"><a href="{{url('/loai-tin/'.$itemlist->slug)}}"><i class="fa fa-angle-right"></i>{{$itemlist->listname}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <?php
                        $item = $index_mod->news_in_mod($index_mod->id)->take(4);
                    ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            @foreach($item as $news)
                            <li class="item">
                                <a href="{{url('/chi-tiet/'.$news->slug)}}">
                                    <div class="item-image">
                                        <img src="{{url('public/img/news/300x300/'.$news['newimg'])}}" alt="{{$news->created_at}}" />
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

                <?php $index_count = $index_count +1; ?>
                @endforeach

            </div>
            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>

@endsection
