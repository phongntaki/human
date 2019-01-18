@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')
<div class="boxed active">
    <div class="wrapper">

        <h1>検索結果ページ</h1>

        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <!-- BEGIN .content-panel -->
                <div class="content-panel">
                    <div class="content-panel-title">
                    @if(isset($key))
                        <h2>Kết quả tìm kiếm : {{ $key}}</h2>
                    @else
                        <h2>Các tin tức với tags : {{ $tags}}</h2>
                    @endif
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                                <div class=" article-list">
                                <div class="widget">
                                    {{-- {{dd($news_serch->count())}} --}}
                                    <div class="widget-article-list">
                                    <?php $i=0; ?>
                                    @foreach($news_serch as $item_serch)
                                        <div class="item">
                                            <div class="item-header">
                                                <a href="{{url('chi-tiet/'.$item_serch->slug)}}">
                                                    <img src="{{url('/public/img/news/100x100/'.$item_serch->newimg)}}" alt="no img" width="90" />
                                                </a>
                                            </div>
                                            <div class="item-content">
                                                <h4><a href="{{url('chi-tiet/'.$item_serch->slug)}}">{{$item_serch->newsname}}</a></h4>
                                                <div class="search_intro">
                                                    {{$item_serch->newintro}}
                                                </div>
                                                <span class="item-meta">
                                                    <a href="#"><i class="fa fa-clock-o"></i>{{$item_serch->created_at}}</a>
                                                    <a href="{{url('/loai-tin/'.$item_serch->list_name($item_serch->idlistnew)['slug'])}}">
                                                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                                                        @if($item_serch->list_name($item_serch->idlistnew)['listname'] !="")
                                                            {{ $item_serch->list_name($item_serch->idlistnew)['listname'] }}
                                                        @else
                                                            {{$item_serch->mod_name($item_serch->idmodnew)['modname']}}
                                                        @endif
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END .content-panel -->
                </div>

            <!-- END .content-block-single -->
            </div>
            <!-- BEGIN .sidebar -->
            @include('home.sitebar_right')
        </div>
    </div>
</div>
@endsection
