@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')

    <!-- BEGIN sliderp-sec -->
    <div class="boxed active slider-sec">
        <div class="wrapper">
            <!-- BEGIN .main-slider -->
            <div class="main-slider">
                @foreach($khuyenmai as $item_km)
                <div class="item">
                    <a href="{{url('/chi-tiet/'.$item_km->slug)}}">
                        <div class="item-lead">
                            <p class="item-date">{{ $item_km->created_at->format('Y/m/d')}}</p>
                            <h3 class="item-title">
                                @if(Session::get('website_language') === 'vi')
                                    {!! $item_km->newsname !!}
                                @elseif(Session::get('website_language') === 'jp')
                                    {!! $item_km->newsname_jp !!}
                                @elseif(Session::get('website_language') === 'en')
                                    {!! $item_km->newsname_en !!}
                                @endif
                            </h3>
                            <p class="item-desc">
                                @if(Session::get('website_language') === 'vi')
                                    {!! $item_km->newintro !!}
                                @elseif(Session::get('website_language') === 'jp')
                                    {!! $item_km->newintro_jp !!}
                                @elseif(Session::get('website_language') === 'en')
                                    {!! $item_km->newintro_en !!}
                                @endif
                            </p>
                        </div>
                        <div class="item-image">
                            <img class="object-fit-img" src="{{url('public/img/news/800x800/'.$item_km['newimg'])}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- BEGIN page-content -->
    <div class="boxed active">
    <div class="wrapper">
        <div class="content-block">
            <!-- BEGIN .content-block-single --><h1></h1>
            <div class="content-block-single">
            <?php $index_count = 0; $ads = 0;?>
            @foreach($modnews as $index_mod)

                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2 class=" panel-title">
                            <a href="{{ url('loai-tin/'.$index_mod->slug) }}">
                                <!-- {{ $index_mod->modname }} -->
                                @if(Session::get('website_language') === 'vi')
                                    {!! $index_mod->modname !!}
                                @elseif(Session::get('website_language') === 'jp')
                                    {!! $index_mod->modname_jp !!}
                                @elseif(Session::get('website_language') === 'en')
                                    {!! $index_mod->modname_en !!}
                                @endif
                            </a>
                        </h2>
                        <ul class="panel-title-submenu">
                            @foreach($index_mod->listnews as $itemlist)
                            <li class="submenu-item">
                                <a href="{{url('/loai-tin/'.$itemlist->slug)}}">
                                <!-- {{$itemlist->listname}} -->
                                @if(Session::get('website_language') === 'vi')
                                    {!! $itemlist->listname !!}
                                @elseif(Session::get('website_language') === 'jp')
                                    {!! $itemlist->listname_jp !!}
                                @elseif(Session::get('website_language') === 'en')
                                    {!! $itemlist->listname_en !!}
                                @endif
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <?php
                        $item = $index_mod->news_in_mod($index_mod->id)->take(6);
                    ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            @foreach($item as $news)
                            <li class="item">
                                <a href="{{url('/chi-tiet/'.$news->slug)}}">
                                    <div class="item-image">
                                        <img class="object-fit-img" src="{{url('public/img/news/800x800/'.$news['newimg'])}}" alt="{{$news->created_at}}" />
                                    </div>
                                    <div class="item-lead">
                                        <p class="item-date">{{$news->created_at->format('Y/m/d')}}</p>
                                        <h3 class="item-title">
                                            @if(Session::get('website_language') === 'vi')
                                                {!! $news->newsname !!}
                                            @elseif(Session::get('website_language') === 'jp')
                                                {!! $news->newsname_jp !!}
                                            @elseif(Session::get('website_language') === 'en')
                                                {!! $news->newsname_en !!}
                                            @endif
                                        </h3>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="read-more top-index">
                        <a class="btn-more" href="{{ url('loai-tin/'.$index_mod->slug) }}" role="button"><i class="fas fa-angle-right"></i>Xem thêm</a>
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
