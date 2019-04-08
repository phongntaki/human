
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
                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h1 class="panel-title"><a href="<?php echo e(url('loai-tin/'.$modnew->slug)); ?>">
                            <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                <?php echo $modnew->modname; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $modnew->modname_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $modnew->modname_en; ?>

                            <?php endif; ?>
                        </a></h1>
                        <ul class="panel-title-submenu">
                            <?php $__currentLoopData = $modnew->listnew_inmod($modnew->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="submenu-item">
                                <a href="<?php echo e(url('loai-tin/'.$cat_mod->slug)); ?>">
                                    <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                        <?php echo $cat_mod->listname; ?>

                                    <?php elseif(Session::get('website_language') === 'jp'): ?>
                                        <?php echo $cat_mod->listname_jp; ?>

                                    <?php elseif(Session::get('website_language') === 'en'): ?>
                                        <?php echo $cat_mod->listname_en; ?>

                                    <?php endif; ?>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <?php
                        $item = $modnew->top_news_item($modnew->id)->take(3);
                     ?>
                    <div class="content-panel-body">
                        <ul class="panel-items">
                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="item">
                                <a href="<?php echo e(url('/chi-tiet/'.$news->slug)); ?>">
                                    <div class="item-lead">
                                        <h3 class="item-title">
                                            <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                                <?php echo $news->newsname; ?>

                                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                                <?php echo $news->newsname_jp; ?>

                                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                                <?php echo $news->newsname_en; ?>

                                            <?php endif; ?>
                                        </h3>
                                        <p class="item-date"><?php echo e($news->created_at->format('Y/m/d')); ?></p>
                                    </div>
                                    <div class="item-image">
                                        <img src="<?php echo e(url('public/img/news/800x800/'.$news['newimg'])); ?>" alt="<?php echo e($news->created_at); ?>" />
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

                <!-- BEGIN .content-panel -->
                
                <div class="content-panel block-type">
                    <div class="content-panel-title">
                        <h2 class="panel-title"><?php echo e(trans('modnews.new_news_in_the_section')); ?></h2>
                    </div>
                    <div class="content-panel-body" id="content_pro">
                        <?php echo $__env->make('home.content_news_ajax', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>

                <!-- BEGIN Loading -->
                <div class="ajax-load text-center" style="display:none;z-index: 10000; opacity: 1;">
                    <p><img src="#"><?php echo e(trans('modnews.loading')); ?></p>
                </div>

                <!-- BIGIN ReadMore -->
                <div class="read-more" <?php if($total <=9): ?> style="display: none;" <?php endif; ?>>
                    <a class="btn-more" id="load_more" base_url="<?php echo e(url('')); ?>" modid="<?php echo e($modnew->id); ?>" skip="10" take="5" total="<?php echo e($total); ?>"  role="button">
                        <i class="fas fa-angle-right"></i>
                         <?php echo e(trans('modnews.see_more')); ?>

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
          modid = $(this).attr('modid');
          skip = $(this).attr('skip');
          take = $(this).attr('take');
          total = $(this).attr('total');
          $.ajax(
                {
                    url: base_url+'/loadmoremod',
                    type: 'GET',
                    data: {
                        "modid" : modid,
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