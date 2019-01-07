
    <div class="widget widget-weather">
        <div class="weather-block">
            <a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        </div>
    </div>

{{-- tin moi nhat --}}
    <div class="widget">
        <h3 class="widget-title">Tin mới nhất</h3>
<!--
        <div class="widget-article-lists">
        <?php $count =0; ?>
        @foreach($lasted_news as $item_lt)
            @if($count <5)
            <div class="item">
                <div class="item-header">
                    <a href="{{url('chi-tiet/'.$item_lt->slug)}}">
                        <img src="{{url('/public/img/news/100x100/'.$item_lt->newimg)}}" alt="no img" width="80" />
                    </a>
                </div>
                <div class="item-content">
                    <h4><a href="{{url('chi-tiet/'.$item_lt->slug)}}">{{$item_lt->newsname}}</a></h4>
                    <span class="item-meta">
                        <a href="#"><i class="fa fa-clock-o"></i>{{$item_lt->created_at}}</a>
                    </span>
                </div>
            </div>
            @endif
        <?php  $count = $count +1; ?>
        @endforeach
        </div>
-->
        <ul class="widget-article-lists">
            <?php $count =0; ?>
            @foreach($lasted_news as $item_lt)
            @if($count < 5)
            <li class="item">
                <a href="{{url('chi-tiet/'.$item_lt->slug)}}">
                    <img src="{{url('/public/img/news/100x100/'.$item_lt->newimg)}}" class="item-img" alt="{{$item_lt->newsname}}" />
                    <div class="item-content">
                        <h4 class="item-title">{{$item_lt->newsname}}</h4>
                        <p class="item-meta">
                            <i class="fa fa-clock-o"></i>{{$item_lt->created_at->format('Y/m/d')}}
                        </p>
                    </div>
                </a>
            </li>
        @endif
        <?php  $count = $count +1; ?>
        @endforeach
        </ul>
    </div>

{{-- quang cao 1 --}}
<div class="widget">
        <div class="social-widget">
            <div class="item">
                <div class="item-header">
                    @if($adverts_bottom[0]->code != "")
                            {{$adverts_bottom[0]->code}}
                    @else
                    <a href="{{$adverts_bottom[0]->link}}">
                        <img src="{{url('public/img/images_bn/'.$adverts_bottom[0]->img)}}" alt="No image" />
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

{{-- doc nhieu nhat --}}
<div class="widget">
    <h3>Đọc nhiều nhất</h3>
    <div class="widget-article-list">
    <?php $count =1; ?>
    @foreach($most_news as $item_most)
        @if($count <6)
        <div class="item">
            <div class="item-header">
                <a href="{{url('chi-tiet/'.$item_most->slug)}}" title="{{$item_most->newsname}}">
                    <b>{{$count}}</b>  <img src="{{url('/public/img/news/100x100/'.$item_most->newimg)}}" alt="no img" width="80" />
                </a>
            </div>
            <div class="item-content">
                <h4><a href="{{url('chi-tiet/'.$item_most->slug)}}" title="{{$item_most->newsname}}">{{$item_most->newsname}}</a></h4>
                <span class="item-meta">
                    <a href="#"><i class="fa fa-clock-o"></i>{{$item_most->created_at}}</a>
                </span>
            </div>
        </div>
        <div class="clearfix">

        </div>
        @endif
    <?php  $count = $count +1; ?>
    @endforeach
    </div>
</div>
{{-- quang cao 2 --}}
<div class="widget">
    <div class="social-widget">
        <div class="item">
            <div class="item-header">
                @if($adverts_bottom[1]->code != "")
                    {{$adverts_bottom[1]->code}}
                @else
                <a href="{{$adverts_bottom[1]->link}}">
                    <img src="{{url('public/img/images_bn/'.$adverts_bottom[1]->img)}}" alt="No image" />
                </a>
                @endif
            </div>
        </div>
        <div class="clearfix">

        </div>
    </div>
</div>
