<ul class="panel-items">
    @foreach($listnews_cat as $hot)
    <li class="item">
        <a href="{{url('chi-tiet/'.$hot->slug)}}">
            <div class="item-lead">
                <h3 class="item-title">
                    <!-- {{$hot->newsname}} -->
                    @if(Session::get('website_language') === 'vi' || Session::get('website_language')===null)
                        {!! $hot->newsname !!}
                    @elseif(Session::get('website_language') === 'jp')
                        {!! $hot->newsname_jp !!}
                    @elseif(Session::get('website_language') === 'en')
                        {!! $hot->newsname_en !!}
                    @endif
                </h3>
                <p class="item-desc">
                    <!-- {!! $hot->newintro !!} -->
                    @if(Session::get('website_language') === 'vi' || Session::get('website_language')===null)
                        {!! $hot->newintro !!}
                    @elseif(Session::get('website_language') === 'jp')
                        {!! $hot->newintro_jp !!}
                    @elseif(Session::get('website_language') === 'en')
                        {!! $hot->newintro_en !!}
                    @endif
                </p>
                <p class="comment-tag"><i class="fa fa-comment-o"></i><span class="fb-comments-count" data-href="{{url('chi-tiet/'.$hot->slug)}}"></span></p>
                <p class="item-date">{{$hot->created_at->format('Y/m/d')}}</p>
            </div>
            <div class="item-image">
                <img src="{{url('public/img/news/800x800/'.$hot->newimg)}}" alt="{{$hot->newsname}}">
            </div>
        </a>
    </li>
    @endforeach
</ul>
