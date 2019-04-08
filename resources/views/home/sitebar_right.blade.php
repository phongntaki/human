<aside class="sidebar sticky_column">

    <div class="widget-wrap">
        <div class="widget widget-info">
            <h3 class="widget-title">{{trans('sitebar_right.direct_consult')}}</h3>
            {{-- tin moi nhat --}}
            <p>{{trans('sitebar_right.hay_lien_lac_voi_chung_toi_khi_ban_co_van_de_can_giai_dap')}}</p>
            <ul class="widget-article-lists" >
                <li class="item info-phone">
                    <span class="hidden">{{trans('sitebar_right.phone')}}: </span>012-345-6789<br>
                    <span class="hidden">{{trans('sitebar_right.time')}}: </span><span class="info-phone-time">9:00-18:00</span>
                </li>
                <li class="item info-mail"><span class="hidden">{{trans('sitebar_right.email')}}: </span>info@enzi.vn</li>
            </ul>
        </div>

        <div class="widget widget-weather">
            <div class="weather-block">
                <a class="weatherwidget-io" href="https://forecast7.com/en/35d69139d69/tokyo/" data-label_1="TOKYO" data-mode="Current" data-theme="mountains" >TOKYO</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>
        </div>
    </div>

    <div class="widget-wrap">
        {{-- tin moi nhat --}}
        <div class="widget widget-news">
            <h3 class="widget-title">{{trans('sitebar_right.tin_moi_nhat')}}</h3>
            <ul class="widget-article-lists">
                <?php $count =0; ?>
                @foreach($lasted_news as $item_lt)
                @if($count < 5)
                               <li class="item">
                <a href="{{url('chi-tiet/'.$item_lt->slug)}}">
                    <div class="item-image">
                        <img src="{{url('/public/img/news/300x300/'.$item_lt->newimg)}}" alt="{{$item_lt->newsname}}" />
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title">
                            @if(Session::get('website_language') === 'vi')
                                {!! $item_lt->newsname !!}
                            @elseif(Session::get('website_language') === 'jp')
                                {!! $item_lt->newsname_jp !!}
                            @elseif(Session::get('website_language') === 'en')
                                {!! $item_lt->newsname_en !!}
                            @endif
                        </h4>
                        <p class="item-date">
<!--                        <i class="fa fa-clock-o"></i>-->
                        {{$item_lt->created_at->format('Y/m/d')}}</p>
                    </div>
                </a>
                </li>
            @endif
            <?php  $count = $count +1; ?>
            @endforeach
            </ul>
        </div>

{{-- doc nhieu nhat --}}
    <div class="widget widget-ranking">
        <h3 class="widget-title">{{trans('sitebar_right.doc_nhieu_nhat')}}</h3>
        <ul class="widget-article-lists">
        <?php $count =1; ?>
        @foreach($most_news as $item_most)
            @if($count <6)
            <li class="item">
                <a href="{{url('chi-tiet/'.$item_most->slug)}}">
                    <div class="item-image">
                        <p class="item-counter">{{$count}}</p>
                        <div class="item-image-inner">
                            <img src="{{url('/public/img/news/300x300/'.$item_most->newimg)}}" alt="{{$item_most->newsname}}" />
                        </div>
                    </div>
                    <div class="item-lead">
                        <h4 class="item-title">
                            @if(Session::get('website_language') === 'vi')
                                {!! $item_most->newsname !!}
                            @elseif(Session::get('website_language') === 'jp')
                                {!! $item_most->newsname_jp !!}
                            @elseif(Session::get('website_language') === 'en')
                                {!! $item_most->newsname_en !!}
                            @endif
                        </h4>
                        <p class="item-date">
                        {{$item_most->created_at->format('Y/m/d')}}</p>
                    </div>
                </a>
                </li>
            @endif
            <?php  $count = $count +1; ?>
            @endforeach
            </ul>
        </div>
    </div>
</aside>
