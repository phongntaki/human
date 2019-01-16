<ul class="panel-items">
    @foreach($modnews_cat as $hot)
    <li class="item">
        <a href="{{url('chi-tiet/'.$hot->slug)}}">
            <div class="item-image">
                <p class="comment-tag"><i class="fa fa-comment-o"></i><span class="fb-comments-count" data-href="{{url('chi-tiet/'.$hot->slug)}}"></span><i></i></p>
                <p class="read-more-wrapper"><span class="read-more">Đọc thêm +<i></i></span></p>
                <img src="{{url('public/img/news/800x800/'.$hot->newimg)}}" alt="{{$hot->newsname}}">
            </div>
            <div class="item-lead">
                <h3 class="item-title">{{$hot->newsname}}</h3>
                <p class="item-desc">{!! $hot->newintro !!}</p>
                <p class="item-date">{{$hot->created_at->format('Y/m/d')}}</p>

            </div>
        </a>
    </li>
    @endforeach
</ul>




<!--
<?php $i=0; ?>
@foreach($modnews_cat as $item)
@if($modnew->type ==0)
@if($i ==0 || $i ==7 ||$i ==0 ||$i ==13)

<?php
    echo $i;
?>
    <div class="visible-xs col-xs-12">
        <div class="mobile_hot_img">
            <a href="{{url('/chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}">
                <img src="{{url('public/img/news/300x300/'.$item->newimg)}} " alt="{{$item->newimg}}">
            </a>
        </div>
        <div class="mobile_title">
            <a href="{{url('/chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}"><h1>{{$item->newsname}}</h1></a>
        </div>
    </div>
@elseif($i<20)
    <div class="visible-xs col-xs-6 padding4">
        <div class="mobile_img">
            <a href="{{url('/chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}">
                <img src="{{url('public/img/news/300x300/'.$item->newimg)}}" alt="{{$item->newsname}}">
            </a>
        </div>
        <div class="mobile_title">
            <a href="{{url('/chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}"><h1>{{$item->newsname}}</h1></a>
        </div>
    </div>
@else
    <div class="item">
        <div class="item-header">
            <a href="{{url('chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}">
                <b>{{$count}}</b>  <img src="{{url('public/img/news/300x300/'.$item->newimg)}} " alt="no img" width="50">
            </a>
        </div>
        <div class="item-content">
            <h4><a href="{{url('chi-tiet/'.$item->slug)}}" title="{{$item->newsname}}">{{$item->newsname}}</a></h4>
            <span class="item-meta">
                <a href="#"><i class="fa fa-clock-o"></i>{{$item->created_at}}</a>
            </span>
        </div>
    </div>
@endif
<?php $i = $i+1; ?>
@else
<div class="widget visible-xs">
    <div class="widget-article-list visible-xs">
        <div class="item">
            <div class="item-header">
                <a href="{{url('chi-tiet/'.$item->slug)}}">
                    <img src="{{url('/public/img/news/100x100/'.$item->newimg)}}" alt="no img" width="80">
                </a>
            </div>
            <div class="item-content">
                <h4><a href="{{url('chi-tiet/'.$item->slug)}}">{{$item->newsname}}</a></h4>
                <span class="item-meta">
                    <a href="#"><i class="fa fa-clock-o"></i>{{$item->created_at}}</a>
                </span>
            </div>
        </div>
        <div class="clearfix">

        </div>
    </div>
</div>
@endif


@endforeach
-->

