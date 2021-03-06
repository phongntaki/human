
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

                <!-- BEGIN .content-panel post-content -->
                <div class="content-panel post-content">
                    <!-- BEGIN .post-header -->
                    <div class="post-header">
                        <h1 class="post-title">
                            <!-- <?php echo e($itemnews->newsname); ?> -->
                            <?php if(Session::get('website_language') === 'vi' || Session::get('website_language')===null): ?>
                                <?php echo $itemnews->newsname; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $itemnews->newsname_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $itemnews->newsname_en; ?>

                            <?php endif; ?>
                        </h1>
                        <p class="post-date"><?php echo e($itemnews->created_at->format('Y/m/d')); ?></p>
                        <div class="post-header-meta">
                            <p class="post-category">
                                <?php if($itemnews->idlistnew !=""): ?>
                                <a href="<?php echo e(url('loai-tin/'.$itemnews->list_name($itemnews->idlistnew)['slug'])); ?>">
                                    <!-- <?php echo e($itemnews->list_name($itemnews->idlistnew)['listname']); ?> -->
                                    <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                        <?php echo $itemnews->list_name($itemnews->idlistnew)['listname']; ?>

                                    <?php elseif(Session::get('website_language') === 'jp'): ?>
                                        <?php echo $itemnews->list_name($itemnews->idlistnew)['listname_jp']; ?>

                                    <?php elseif(Session::get('website_language') === 'en'): ?>
                                        <?php echo $itemnews->list_name($itemnews->idlistnew)['listname_en']; ?>

                                    <?php endif; ?>
                                </a>
                                <?php elseif($itemnews->idmodnew !=""): ?>
                                <a href="<?php echo e(url('loai-tin/'.$itemnews->mod_name($itemnews->idmodnew)['slug'])); ?>">
                                    <!-- <?php echo e($itemnews->mod_name($itemnews->idmodnew)['modname']); ?> -->
                                    <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                        <?php echo $itemnews->mod_name($itemnews->idmodnew)['modname']; ?>

                                    <?php elseif(Session::get('website_language') === 'jp'): ?>
                                        <?php echo $itemnews->mod_name($itemnews->idmodnew)['modname_jp']; ?>

                                    <?php elseif(Session::get('website_language') === 'en'): ?>
                                        <?php echo $itemnews->mod_name($itemnews->idmodnew)['modname_en']; ?>

                                    <?php endif; ?>
                                </a>
                                <?php endif; ?>
                            </p>
                            <p class="post-share">
                                <a href="#comments" class="meta-comment"><i class="fas fa-comment"></i><span class="fb-comments-count" data-href="<?php echo e(url()->current()); ?>"></span> <?php echo e(trans('news.comment')); ?></a>
                                <a href="#" class="meta-view"><i class="fas fa-chart-bar"></i><?php echo e($itemnews->view_count); ?> <?php echo e(trans('news.viewers')); ?></a>
                            </p>
                        </div>
                    </div>

                    <!-- BEGIN .post-body -->
                    <div class="post-body">
                        <div class="post-body-inner">
                            <!-- <?php echo $itemnews->newcontent; ?> -->
                            <?php if(Session::get('website_language')==='vi' || Session::get('website_language')===null): ?>
                                <?php echo $itemnews->newcontent; ?>

                            <?php elseif(Session::get('website_language') === 'jp'): ?>
                                <?php echo $itemnews->newcontent_jp; ?>

                            <?php elseif(Session::get('website_language') === 'en'): ?>
                                <?php echo $itemnews->newcontent_en; ?>

                            <?php endif; ?>
                        </div>

                        <?php if(Session::get('logined_cus') != 1): ?>
                        <div class="no-information">
                            <p class="noinfo-text">
                                <span class="nowrap"><?php echo e(trans('home_master.ban_nen_dang_ky_thong_tin_ca')); ?></span> <span class="nowrap"><?php echo e(trans('home_master.nhan_de_chung_toi_co')); ?></span> <span class="nowrap"><?php echo e(trans('home_master.the_chon_ra_cong_viec')); ?></span> <span class="nowrap"><?php echo e(trans('home_master.tot_nhat_phu_hop_voi_ban')); ?></span> <span class="nowrap"><?php echo e(trans('home_master.chua_co_tai_khoan')); ?></span><span class="btn-noinfo nowrap"><a href="<?php echo e(url('/register')); ?>" style="color: #81F7F3"><?php echo e(trans('home_master.dang_ky_ngay')); ?></a></span>
                            </p>
                        </div>
                            <?php endif; ?>
                    </div>

                    <!-- BEGIN .post-footer-meta -->
                    <div class="post-footer-meta">
                        <!-- social button -->
                        <div class="post-sns">
                            <p class="share-title"><i class="fas fa-share-alt"></i><?php echo e(trans('news.share')); ?>:</p>
                            <div class="fb-share-button"
                                 data-href="<?php echo e(url()->current()); ?>"
                                 data-layout="button_count">
                            </div>
                            <div class="g-plus" data-action="share" data-annotation="bubble" data-height="24" data-href="<?php echo e(url()->current()); ?>"></div>
                        </div>
                        <!-- post-tag -->
                        <div class="post-tags">
                            <p class="tags-title"><i class="fas fa-tags"></i><?php echo e(trans('news.tags')); ?>:</p>
                            <?php
                            if($itemnews->newtag !=""){
                                $tags = explode(", ", $itemnews->newtag);
                            }
                            ?>
                            <?php if(!empty($tags)): ?>
                            <?php for($count=0; $count < count($tags);$count ++ ): ?>
                            <a class="tag-item" href="<?php echo e(url('/tags/'.$tags[$count])); ?>"><?php echo e($tags[$count]); ?></a>
                            <?php endfor; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- BEGIN .content-panel facebook-panel -->
                <div class="content-panel fb-comment">
                    <div class="content-panel-title">
                        <h2> <?php echo e(trans('news.your_opinion')); ?></h2>
                    </div>
                    <div class="content-panel-body">
                        <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-width="100%" data-numposts="5"></div>
                    </div>
                <!-- END .content-panel -->
                </div>

                <!-- BEGIN .content-panel carousel-type-->
                <?php if($new_in_list_active->count()>0): ?>
                <div class="content-panel carousel-type">
                    <div class="content-panel-title">
                        <h2><?php echo e(trans('news.continue_reading')); ?></h2>
                    </div>
                    <div class="content-panel-body">
                       <ul class="panel-items">
                           <?php $__currentLoopData = $new_in_list_active; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="item">
                               <a href="<?php echo e(url('chi-tiet/'.$item_lt->slug)); ?>">
                                   <div class="item-image">
                                       <img class="object-fit--img" src="<?php echo e(url('/public/img/news/100x100/'.$item_lt->newimg)); ?>" alt="<?php echo e($item_lt->newsname); ?>">
                                   </div>
                                   <div class="item-lead">
                                       <p class="item-date"><?php echo e($item_lt->created_at->format('Y/m/d')); ?></p>
                                       <h3 class="item-title"><?php echo e($item_lt->newsname); ?></h3>
                                   </div>
                               </a>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- BEGIN .sidebar -->
            <?php echo $__env->make('home.sitebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>