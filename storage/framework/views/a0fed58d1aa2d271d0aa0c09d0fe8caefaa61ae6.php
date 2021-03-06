
<?php $__env->startSection('title','Tin Tức'); ?>
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tin Tức</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".nn-modal-add-news" id="nn-add-job">+ Thêm Tin Tức</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php if(session('thongbao')): ?>
                            <div class="alert-tb alert alert-success">
                                <span class="fa fa-check"> </span> <?php echo e(session('thongbao')); ?>

                            </div>
                        <?php endif; ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên bài viết</th>
                                        <th>Thể loại</th>
                                        <th>Loại tin</th>
                                        <th>Trạng thái</th>
                                        <th>Hình ảnh</th>
                                        <th>Người viết</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $lnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX info">
                                        <td><?php echo e($new->id); ?></td>
                                        <td><?php echo e($new->newsname); ?></td>
                                        <td ><?php echo e($new->mod_name($new->idmodnew)['modname']); ?></td>
                                        <td ><?php echo e($new->list_name($new->idlistnew)['listname']); ?></td>
                                        <td>
                                            <?php if($new->status ==2): ?>
                                                <strong class="text-success">Nổi bật</strong>
                                            <?php elseif($new->status ==1): ?>
                                                <strong class="text-info">Đang Hiện</strong>
                                            <?php else: ?>
                                                <strong class="text-danger">Đang Ẩn</strong>
                                            <?php endif; ?>
                                        </td>
                                        <td class="center">
                                            <img src="<?php echo e(asset('public/img/news/100x100/'.$new->newimg)); ?>" style="width: 55px"> 
                                        </td>
                                        <td class="center info">Nguyễn Nam</td>                                        
                                        <td>
                                            <i class="nneditnew btn btn-info fa fa-edit" id="ennnew<?php echo e($new->id); ?>"  
                                            idlistnew="<?php echo e($new->idlistnew); ?>" 
                                            idmod="<?php echo e($new->idmodnew); ?>" 
                                                    editid="<?php echo e($new->id); ?>" name="<?php echo e($new->newsname); ?>" name_jp="<?php echo e($new->newsname_jp); ?>" name_en="<?php echo e($new->newsname_en); ?>" dangky="<?php echo e($new->dangky); ?>" imgo="<?php echo e($new->newimg); ?>" num="<?php echo e($new->newnumber); ?>" intro="<?php echo e($new->newintro); ?>" intro_jp="<?php echo e($new->newintro_jp); ?>" intro_en="<?php echo e($new->newintro_en); ?>" newvideo="<?php echo e($new->newvideo); ?>" newcontent="<?php echo e($new->newcontent); ?>" newcontent_jp="<?php echo e($new->newcontent_jp); ?>" newcontent_en="<?php echo e($new->newcontent_en); ?>" newkeywords="<?php echo e($new->newkeywords); ?>" newtag="<?php echo e($new->newtag); ?>" > Sửa</i>
                                            <i class="nndeditnew btn btn-danger fa fa-trash" imgo="<?php echo e($new->newimg); ?>" editid="<?php echo e($new->id); ?>" name="<?php echo e($new->newsname); ?>"> Xóa </i>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
<!-- model -->

<div class="modal fade nn-modal-add-news" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top: -3%;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Tin Tức</h4>
          </div>
          <form class="form-horizontal" method="post" action="list" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
          <div class="modal-body">
            <div class="row">
                <?php if(count($errors)>0): ?>
                    <div class="alert-tb alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <i class="fa fa-exclamation-circle"></i> <?php echo e($err); ?><br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label for="nnmodnews" class="control-label"><i class="fa  fa-font"></i> Thể Loại:</label>
                            <select class="form-control" name="nnmodnews" id="nn-mod-news" required>
                                <option value="">---Vui Lòng Chọn Thể loại---</option>
                                <?php $__currentLoopData = $modulepro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $ls->id; ?>"> <?php echo e($ls->modname); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label for="nnlistnew" class="control-label"><i class="fa  fa-font"></i> Loại Tin:</label>
                            <select class="form-control" name="nnlistnew" id="nn-list-new">
                                <option value="">---Vui Lòng Chọn Thể loại---</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label for="newsname" class="control-label"><i class="fa  fa-newspaper-o"></i> Tiêu đề:</label>
                            <input name="newsname_checkbox" id="newsname_checkbox_jp" type="checkbox" value="jp" onclick="newsname_checkbox_jp_function()">Tiếng Nhật
                            <input name="newsname_checkbox" id="newsname_checkbox_en" type="checkbox" value="en" onclick="newsname_checkbox_en_function()">Tiếng Anh
                            <input type="text" class="form-control" name="newsname" id="nntitlenew" placeholder="tiêu đề bài viết" value="<?php echo old('newsname'); ?>">
                            <input type="text" style="display: none;" class="form-control" name="newsname_jp" id="nntitlenew_jp" placeholder="tiêu đề bài viết bằng tiếng Nhật" value="<?php echo old('newsname_jp'); ?>">
                            <input type="text" style="display: none;" class="form-control" name="newsname_en" id="nntitlenew_en" placeholder="tiêu đề bài viết bằng tiếng Anh" value="<?php echo old('newsname_en'); ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-md-12 text-center">
                                <label class="radio-inline">
                                    <input type="radio" name="nnhide" value="2" > Nổi bật 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="nnhide" value="1" checked> Bình thường 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="nnhide" value="0"> Ẩn 
                                </label>                                
                            </div>                    
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label for="nnavatar" class="control-label"><i class="fa  fa-picture-o"></i> Hình ảnh</label> <br>
                            <img id="nnavatar" src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="..." class="img-thumbnail" style="width: 50%;">
                            <input type="file" name="nnavatarfile" id="nnavatarfile" onchange="showimg(this);">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="form-group">
                            <label for="nntagnew" class="control-label"><i class="fa  fa-note"></i> Tag:</label>
                            <div>
                              <textarea class="form-control" rows="1" name="nntagnew"><?php echo old('nntagnew'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="nntomtatnew" class="control-label"><i class="fa  fa-note"></i> Tóm tắt:</label>
                        <input name="nntomtatnew_checkbox_jp" id="nntomtatnew_checkbox_jp" type="checkbox" value="jp" onclick="nntomtatnew_checkbox_jp_function()">Tiếng Nhật
                        <input name="nntomtatnew_checkbox_en" id="nntomtatnew_checkbox_en" type="checkbox" value="en" onclick="nntomtatnew_checkbox_en_function()">Tiếng Anh
                        <div class="col-sx-12 col-md-12">
                          <textarea name="nntomtatnew" class="form-control" rows="4" placeholder="Tóm tắt bằng tiếng Việt"><?php echo old('nntomtatnew'); ?></textarea>
                          <textarea name="nntomtatnew_jp" id="nntomtatnew_jp" class="form-control" rows="4" placeholder="Tóm tắt bằng tiếng Nhật" style="display: none;"><?php echo old('nntomtatnew_jp'); ?></textarea>
                          <textarea name="nntomtatnew_en" id="nntomtatnew_en" class="form-control" rows="4" placeholder="Tóm tắt bằng tiếng Anh" style="display: none;"><?php echo old('nntomtatnew_en'); ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="nncontentnew" class="control-label"><i class="fa  fa-note"></i> Nội Dung:</label>
                        <input name="nncontentnew_checkbox_jp" id="nncontentnew_checkbox_jp" type="checkbox" value="jp" onclick="nncontentnew_checkbox_jp_function()">Tiếng Nhật
                        <input name="nncontentnew_checkbox_en" id="nncontentnew_checkbox_en" type="checkbox" value="en" onclick="nncontentnew_checkbox_en_function()">Tiếng Anh
                        <div class="col-sx-12 col-md-12">
                          <textarea placeholder="Nội dung bằng tiếng Việt" name="nncontentnew" class="form-control" rows="5" ><?php echo old('nncontentnew'); ?></textarea>
                          <script type="text/javascript">ckeditor("nncontentnew")</script>
                          <div id="nncontentnew_jp_id" style="display: none;">
                              <textarea name="nncontentnew_jp" id="nncontentnew_jp" class="form-control" rows="5" placeholder="Nội dung bằng tiếng Nhật"><?php echo old('nncontentnew_jp'); ?></textarea>
                              <script type="text/javascript">ckeditor("nncontentnew_jp") </script>
                          </div>
                          <div id="nncontentnew_en_id" style="display: none;">
                              <textarea name="nncontentnew_en" id="nncontentnew_en" class="form-control" rows="5" placeholder="Nội dung bằng tiếng Anh"><?php echo old('nncontentnew_en'); ?></textarea>
                              <script type="text/javascript">ckeditor("nncontentnew_en") </script>
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng cửa sổ</button>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
    <!-- end modal -->
<div class="modal fade nn-modal-edit-news" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top: -3%;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Sửa Tin Tức</h4>
          </div>
          <form class="form-horizontal" method="post" action="list/edit" enctype="multipart/form-data">
          <input type="hidden" name="ennidnews" id="ennidnews" />
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
          <div class="modal-body">
            <div class="row">
                <?php if(count($errors)>0): ?>
                    <div class="alert-tb alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <i class="fa fa-exclamation-circle"></i> <?php echo e($err); ?><br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="ennmodnews" class="control-label"><i class="fa  fa-font"></i> Thể Loại:</label>
                                <div class="col-xs-12 col-md-12">
                                    <select class="form-control" name="ennmodnews" id="enn-mod-news">
                                        <option value="">--Vui Lòng Chọn Thể loại--</option>
                                        <?php $__currentLoopData = $modulepro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo $mod->id; ?>"> <?php echo e($mod->modname); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="ennlistnew" class="control-label"><i class="fa  fa-font"></i> Loại Tin:</label>
                                <div class="col-xs-12 col-md-12">
                                    <select class="form-control" name="ennlistnew" id="enn-list-new">
                                        <option value="">--Vui Lòng Chọn Thể loại--</option>
                                        <?php $__currentLoopData = $typenews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo $ls->id; ?>"> <?php echo e($ls->listname); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="newsname" class="control-label"><i class="fa  fa-newspaper-o"></i> Tiêu đề:</label>
                                <input name="newsname_checkbox" id="ennnewsname_checkbox_jp" type="checkbox" value="jp" onclick="ennnewsname_checkbox_jp_function()">Tiếng Nhật
                                <input name="newsname_checkbox" id="ennnewsname_checkbox_en" type="checkbox" value="en" onclick="ennnewsname_checkbox_en_function()">Tiếng Anh
                                <div class="col-xs-12 col-md-12">
                                    <input type="text" class="form-control" name="newsname" id="enntitlenew" placeholder="Link bài viết" value="<?php echo old('newsname'); ?>">
                                    <input type="text" style="display: none;" class="form-control" name="ennnewsname_jp" id="enntitlenew_jp" placeholder="tiêu đề bài viết bằng tiếng Nhật" value="<?php echo old('ennnewsname_jp'); ?>">
                                    <input type="text" style="display: none;" class="form-control" name="ennnewsname_en" id="enntitlenew_en" placeholder="tiêu đề bài viết bằng tiếng Anh" value="<?php echo old('ennnewsname_en'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-sx-12 col-md-12">
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="ennhide" value="2" checked> Nổi bật 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ennhide" value="1" checked > Bình thường 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ennhide" value="0"> Ẩn 
                                </label>                  
                            </div>
                         </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="col-sx-12 col-md-12">
                            <div class="form-group">
                                <label for="ennavatar" class="control-label"><i class="fa  fa-picture-o"></i> Hình ảnh</label>
                                <div class="col-xs-12 col-md-12">
                                    <img id="ennavatar" src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="..." class="img-thumbnail" style="width: 50%;">
                                    <input type="file" name="ennavatarfile" id="ennavatarfile" onchange="eshowimg(this);" style="display: none">
                                    <input type="hidden" name="ennimguserold" id="ennimguserold">
                                </div>
                            </div>
                        </div>
                        <div class="col-sx-12 col-md-12">
                            <div class="form-group">
                                <label for="enntagnew" class="control-label"><i class="fa  fa-note"></i> Tag:</label>
                                  <textarea class="form-control" rows="2" name="enntagnew" id="enntagnew"><?php echo old('enntagnew'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="enntomtatnew" class="control-label"><i class="fa  fa-note"></i> Tóm tắt:</label>
                            <input name="enntomtatnew_checkbox_jp" id="enntomtatnew_checkbox_jp" type="checkbox" value="jp" onclick="enntomtatnew_checkbox_jp_function()">Tiếng Nhật
                            <input name="enntomtatnew_checkbox_en" id="enntomtatnew_checkbox_en" type="checkbox" value="en" onclick="enntomtatnew_checkbox_en_function()">Tiếng Anh
                            <div class="col-xs-12 col-md-12">
                                <textarea name="enntomtatnew" class="form-control" rows="4" id="enntomtatnew"><?php echo old('enntomtatnew'); ?></textarea>
                                <textarea name="enntomtatnew_jp" id="enntomtatnew_jp" class="form-control" rows="4" placeholder="Tóm tắt bằng tiếng Nhật" style="display: none;"><?php echo old('enntomtatnew_jp'); ?></textarea>
                                <textarea name="enntomtatnew_en" id="enntomtatnew_en" class="form-control" rows="4" placeholder="Tóm tắt bằng tiếng Anh" style="display: none;"><?php echo old('enntomtatnew_en'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="enncontentnew" class="control-label"><i class="fa  fa-note"></i> Nội Dung:</label>
                            <input name="enncontentnew_checkbox_jp" id="enncontentnew_checkbox_jp" type="checkbox" value="jp" onclick="enncontentnew_checkbox_jp_function()">Tiếng Nhật
                            <input name="enncontentnew_checkbox_en" id="enncontentnew_checkbox_en" type="checkbox" value="en" onclick="enncontentnew_checkbox_en_function()">Tiếng Anh
                            <div class="col-xs-12 col-md-12">
                              <textarea id="enncontentnew" name="enncontentnew" class="form-control" rows="5"><?php echo old('enncontentnew'); ?></textarea>
                              <script type="text/javascript">ckeditor("enncontentnew")</script>
                              <div id="enncontentnew_jp_id" style="display: none;">
                                  <textarea name="enncontentnew_jp" id="enncontentnew_jp" class="form-control" rows="5" placeholder="Nội dung bằng tiếng Nhật"><?php echo old('enncontentnew_jp'); ?></textarea>
                                  <script type="text/javascript">ckeditor("enncontentnew_jp") </script>
                              </div>
                              <div id="enncontentnew_en_id" style="display: none;">
                                  <textarea name="enncontentnew_en" id="enncontentnew_en" class="form-control" rows="5" placeholder="Nội dung bằng tiếng Anh"><?php echo old('enncontentnew_en'); ?></textarea>
                                  <script type="text/javascript">ckeditor("enncontentnew_en") </script>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng cửa sổ</button>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
    <!-- end modal -->
<div class="modal fade nn-modal-delete-news" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Xóa Tin</h4>
          </div>
          <form class="form-horizontal" method="post" action="list/delete" enctype="multipart/form-data">
          <input type="hidden" name="dennidnew" id="dennidnew" /> 
          <input type="hidden" name="dennimgnew" id="dennimgnew" /> 
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
          <div class="modal-body">
            <div class="row">
                <h4 class="nnbodydelete">Bạn có chắc xóa tin <i id="deletename"></i></h4>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Đóng cửa sổ</button>
            <button type="submit" class="btn btn-warning">Xóa</button>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
    <!-- end modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('public/js/admin/news.js')); ?>"></script>
  <script type="text/javascript">
    <?php if(session('actionuser')=='add' && count($errors) > 0): ?>
        $('.nn-modal-add-news').modal('show');
    <?php endif; ?>
    <?php if(session('actionuser')=='edit' && count($errors) > 0): ?>
        $(document).ready(function(){
          $("#ennnew<?php echo e(session('editid')); ?>").trigger('click');
        });
    <?php endif; ?>

    //Start Them bai viet
    //Tieu de
    function newsname_checkbox_jp_function(){
        var newsname_checkbox_jp = document.getElementById("newsname_checkbox_jp");
        
        var nntitlenew_jp = document.getElementById("nntitlenew_jp");

        if (newsname_checkbox_jp.checked == true) {
            nntitlenew_jp.style.display = "block";
        }else{
            nntitlenew_jp.style.display = "none";
        } 
    }

    function newsname_checkbox_en_function(){
        var newsname_checkbox_en = document.getElementById("newsname_checkbox_en");
        var nntitlenew_en = document.getElementById("nntitlenew_en");

        if (newsname_checkbox_en.checked == true) {
            nntitlenew_en.style.display = "block";
        }else{
            nntitlenew_en.style.display = "none";
        }
    }

    //Tom tat
    function nntomtatnew_checkbox_jp_function(){
        var nntomtatnew_checkbox_jp = document.getElementById("nntomtatnew_checkbox_jp");
        var nntomtatnew_jp = document.getElementById("nntomtatnew_jp");

        if (nntomtatnew_checkbox_jp.checked == true) {
            nntomtatnew_jp.style.display = "block";
        }else{
            nntomtatnew_jp.style.display = "none";
        }
    }

    function nntomtatnew_checkbox_en_function(){
        var nntomtatnew_checkbox_en = document.getElementById("nntomtatnew_checkbox_en");
        var nntomtatnew_en = document.getElementById("nntomtatnew_en");

        if (nntomtatnew_checkbox_en.checked == true) {
            nntomtatnew_en.style.display = "block";
        }else{
            nntomtatnew_en.style.display = "none";
        }
    }

    //Noi dung
    function nncontentnew_checkbox_jp_function(){
        var nncontentnew_checkbox_jp = document.getElementById("nncontentnew_checkbox_jp");
        var nncontentnew_jp = document.getElementById("cke_nncontentnew_jp");
        var div = document.getElementById("nncontentnew_jp_id");

        if (nncontentnew_checkbox_jp.checked == true) {
            nncontentnew_jp.style.display = "block";
            div.style.display = "block";
        }else{
            nncontentnew_jp.style.display = "none";
            div.style.display = "none";
        }
    }

    function nncontentnew_checkbox_en_function(){
        var nncontentnew_checkbox_en = document.getElementById("nncontentnew_checkbox_en");
        var nncontentnew_en = document.getElementById("cke_nncontentnew_en");
        var div = document.getElementById("nncontentnew_en_id");

        if (nncontentnew_checkbox_en.checked == true) {
            nncontentnew_en.style.display = "block";
            div.style.display = "block";
        }else{
            nncontentnew_en.style.display = "none";
            div.style.display = "none";
        }
    }
    //End them bai viet

    //Start Sua bai viet
    //Tieu de
    function ennnewsname_checkbox_jp_function(){
        var ennnewsname_checkbox_jp = document.getElementById("ennnewsname_checkbox_jp");
        
        var enntitlenew_jp = document.getElementById("enntitlenew_jp");

        if (ennnewsname_checkbox_jp.checked == true) {
            enntitlenew_jp.style.display = "block";
        }else{
            enntitlenew_jp.style.display = "none";
        } 
    }

    function ennnewsname_checkbox_en_function(){
        var ennnewsname_checkbox_en = document.getElementById("ennnewsname_checkbox_en");
        var enntitlenew_en = document.getElementById("enntitlenew_en");

        if (ennnewsname_checkbox_en.checked == true) {
            enntitlenew_en.style.display = "block";
        }else{
            enntitlenew_en.style.display = "none";
        }
    }

    //Tom tat
    function enntomtatnew_checkbox_jp_function(){
        var enntomtatnew_checkbox_jp = document.getElementById("enntomtatnew_checkbox_jp");
        var enntomtatnew_jp = document.getElementById("enntomtatnew_jp");

        if (enntomtatnew_checkbox_jp.checked == true) {
            enntomtatnew_jp.style.display = "block";
        }else{
            enntomtatnew_jp.style.display = "none";
        }
    }

    function enntomtatnew_checkbox_en_function(){
        var enntomtatnew_checkbox_en = document.getElementById("enntomtatnew_checkbox_en");
        var enntomtatnew_en = document.getElementById("enntomtatnew_en");

        if (enntomtatnew_checkbox_en.checked == true) {
            enntomtatnew_en.style.display = "block";
        }else{
            enntomtatnew_en.style.display = "none";
        }
    }

    //Noi dung
    function enncontentnew_checkbox_jp_function(){
        var enncontentnew_checkbox_jp = document.getElementById("enncontentnew_checkbox_jp");
        var enncontentnew_jp = document.getElementById("cke_enncontentnew_jp");
        var div = document.getElementById("enncontentnew_jp_id");

        if (enncontentnew_checkbox_jp.checked == true) {
            enncontentnew_jp.style.display = "block";
            div.style.display = "block";
        }else{
            enncontentnew_jp.style.display = "none";
            div.style.display = "none";
        }
    }

    function enncontentnew_checkbox_en_function(){
        var enncontentnew_checkbox_en = document.getElementById("enncontentnew_checkbox_en");
        var enncontentnew_en = document.getElementById("cke_enncontentnew_en");
        var div = document.getElementById("enncontentnew_en_id");

        if (enncontentnew_checkbox_en.checked == true) {
            enncontentnew_en.style.display = "block";
            div.style.display = "block";
        }else{
            enncontentnew_en.style.display = "none";
            div.style.display = "none";
        }
    }

    //End Sua bai viet
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>