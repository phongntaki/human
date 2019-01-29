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
                {{-- tin moi trong mod          --}}
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                        <h1 class="panel-title"><a href="{{ url('loai-tin/'.$listnew->slug) }}">{{ $listnew->listname }}</a></h1>
                    </div>
                    <div class="content-panel-body" id="content_pro">
                        @include('home.content_news_ajax_list')
                    </div>
                </div>


                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#">Đang tải</p>
                </div>
                <!-- BIGIN ReadMore -->
                <div class="text-center" @if($total <=10) style="display: none;" @endif>
                     <a class="btn btn-default btn-more-info" id="load_more" base_url="{{url('')}}" listid="{{$listnew->id}}" skip="10" take="5" total="{{$total}}"  role="button">
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
        listid = $(this).attr('listid');
        skip = $(this).attr('skip');
        take = $(this).attr('take');
        total = $(this).attr('total');
        $.ajax(
            {
                url: base_url+'/loadmorelist',
                type: 'GET',
                data: {
                    "listid" : listid,
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
