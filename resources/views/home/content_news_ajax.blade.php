<ul class="panel-items">
    @foreach($modnews_cat as $hot)
    <li class="item">
        <a href="{{url('chi-tiet/'.$hot->slug)}}">
            <div class="item-lead">
                <h3 class="item-title">{{$hot->newsname}}</h3>
                <p class="item-desc">{!! $hot->newintro !!}</p>
                <p class="comment-tag"><i class="far fa-comment"></i><span class="fb-comments-count" data-href="{{url('chi-tiet/'.$hot->slug)}}"></span></p>
                <p class="item-date">{{$hot->created_at->format('Y/m/d')}}</p>
            </div>
            <div class="item-image">
                <img src="{{url('public/img/news/800x800/'.$hot->newimg)}}" alt="{{$hot->newsname}}">
            </div>
        </a>
    </li>
    @endforeach
</ul>
