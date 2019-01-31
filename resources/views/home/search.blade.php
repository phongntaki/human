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
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                    @if(isset($key))
                        <h1 class="panel-title">Kết quả tìm kiếm : <span class="search-text">{{ $key}}</span></h1>
                    @else
                        <h1 class="panel-title">Các tin tức với tags : <span class="search-text">{{ $tags}}</span></h2>
                    @endif
                    </div>

                    <div class="content-panel-body">
                        {{-- {{dd($news_serch->count())}} --}}
                        <ul class="panel-items">
                            <?php $i=0; ?>
                            @foreach($news_serch as $item_serch)
                            <li class="item">
                                <a href="{{url('chi-tiet/'.$item_serch->slug)}}">
                                    <div class="item-lead">
                                        <h3 class="item-title">{{$item_serch->newsname}}</h3>
                                        <p class="item-desc">{{$item_serch->newintro}}</p>

                                        <p class="item-date">{{$item_serch->created_at->format('Y/m/d')}}</p>
                                    </div>
                                    <div class="item-image">
                                        <img src="{{url('/public/img/news/100x100/'.$item_serch->newimg)}}" alt="">
                                    </div>
                                </a>
<!--
                                <div class="recruit-button">
                                    <a href="{{url('/loai-tin/'.$item_serch->list_name($item_serch->idlistnew)['slug'])}}">
                                        <i class="fas fa-list-ul"></i>
                                        @if($item_serch->list_name($item_serch->idlistnew)['listname'] !="")
                                        {{ $item_serch->list_name($item_serch->idlistnew)['listname'] }}
                                        @else
                                        {{$item_serch->mod_name($item_serch->idmodnew)['modname']}}
                                        @endif
                                    </a>
                                </div>
-->
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>

@endsection
