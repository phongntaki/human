
<?php $__env->startSection('title', (!empty($contact)?$contact->seo_title:"")); ?>
<?php $__env->startSection('seo_keyword', (!empty($contact)?$contact->seo_keyword:"")); ?>
<?php $__env->startSection('seo_description', (!empty($contact)?$contact->seo_description:"")); ?>
<?php $__env->startSection('seo_image', (!empty($contact)?asset($contact->seo_image):"")); ?>
<?php $__env->startSection('seo_url', url()->current()); ?>
<?php $__env->startSection('content'); ?>

<div class="boxed active">
    <div class="wrapper">

        <div class="content-block">
            <!-- BEGIN .content-block-single -->
            <div class="content-block-single">

                <!-- BEGIN .content-panel -->
                
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                        <h1 class="panel-title"><a href="<?php echo e(url('loai-tin/'.$listnew->slug)); ?>">
                            <!-- <?php echo e($listnew->listname); ?> -->
                            <?php if(Session::get('website_language') === 'vi' || Session::get('website_language')===null): ?>
                                <?php echo $listnew->listname; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $listnew->listname_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $listnew->listname_en; ?>

                            <?php endif; ?>
                        </a></h1>
                    </div>
                    <div class="content-panel-body" id="content_pro">
                        <?php echo $__env->make('home.content_news_ajax_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>


                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#"><?php echo e(trans('listnews.loading')); ?></p>
                </div>
                <!-- BIGIN ReadMore -->
                <div class="text-center" <?php if($total <=10): ?> style="display: none;" <?php endif; ?>>
                     <a class="btn btn-default btn-more-info" id="load_more" base_url="<?php echo e(url('')); ?>" listid="<?php echo e($listnew->id); ?>" skip="10" take="5" total="<?php echo e($total); ?>"  role="button">
                        <i class="fa fa-refresh" aria-hidden="true"></i> <?php echo e(trans('listnews.xem_them')); ?>

                    </a>
                </div>
            </div>

            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>