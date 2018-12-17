<?php $__env->startSection('title','workflow management - customer'); ?>
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo e(trans("admin.info")); ?> <?php echo e(trans("admin.candidate")); ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row info alert-info" style="padding: 15px 0;">         
           <div class="col-xs-6">                        
              <div class="form-group">
                <label for="nn-name-cus" class="col-xs-3 control-label"><i class="fa fa-id-badge"></i> <?php echo e(trans("admin.name")); ?>:</label>
                <div class="col-xs-9">
                    <p><b><?php echo e($customer->cusfullname ? $customer->cusfullname : '###############'); ?></b></p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-address-cus" class="col-xs-3 control-label"><i class="fa fa-map-marker"></i> <?php echo e(trans("admin.address")); ?>:</label>
                <div class="col-xs-9">
                  <p><?php echo e($customer->cusaddress ? $customer->cusaddress : '###############'); ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-phone-cus" class="col-xs-3 control-label"><i class="fa fa-phone"></i> <?php echo e(trans("admin.phone")); ?>:</label>
                <div class="col-xs-9">
                  <p><?php echo e($customer->cusphone ? $customer->cusphone : '###############'); ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="nn-mail-cus" class="col-xs-3 control-label"><i class="fa fa-envelope-o"></i> <?php echo e(trans("admin.email")); ?>:</label>
                <div class="col-xs-9">
                    <p><?php echo e($customer->cusemail ? $customer->cusemail : '###############'); ?></p>
                </div>
              </div>                      
              <div class="form-group">
                <label for="nn-key-cus" class="col-xs-3 control-label"><i class="fa fa-image"></i> image:</label>
                <div class="col-xs-9">
                        <img style="width: 100%;" <?php if($customer->idloginsocial==null): ?> src="<?php echo e(asset('public/img/customers/'.$customer->cusimg)); ?>" <?php else: ?> src="<?php echo e($customer->cusimg); ?>" <?php endif; ?> >
                </div>
              </div>                  
           </div>
           <div class="col-xs-6">
                <div class="form-group">
                    <label for="nn-phone-cus" class="col-xs-3 control-label"><i class="fa fa-clock-o"></i> <?php echo e(trans("admin.group")); ?>:</label>
                    <div class="col-xs-9">
                      <p><?php echo e($customer->listgr->listname ? $customer->listgr->listname  : '###############'); ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nn-note-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> <?php echo e(trans("admin.education")); ?>:</label>
                    <div class="col-xs-9">
                      <p>   <?php echo e($customer->education); ?>

                      </p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nn-note-cus" class="col-xs-3 control-label"><i class="fa  fa-comments-o"></i> <?php echo e(trans("admin.introduce")); ?>:</label>
                    <div class="col-xs-9">
                      <p>   <?php echo e($customer->introduce); ?>

                      </p>
                    </div>
                </div>

              <div class="form-group">
                <label for="nn-phone-cus" class="col-xs-4 control-label"><i class="fa fa-ravelry"></i> <?php echo e(trans("admin.desire")); ?>:</label>
                <div class="col-xs-8" >
                  <p><?php echo e($customer->desire); ?></p>
                </div>
              </div>
               
           </div>   
    </div>
</div>   
          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>