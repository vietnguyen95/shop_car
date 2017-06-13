<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
 
 <div id="page-wrapper">


    <div class="container-fluid">
        <div class="row">
            <form action="function/logo.php?lid=0" method="POST" data-toggle="validator" role="form" enctype="multipart/form-data">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Thêm logo sản phẩm
                    </h1>
                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm </button>
                        <a href="logo.php" onclick="return confirm('bạn có muốn quay lại không!')" class="btn btn-default colorr"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                    </div>
                </div>
                                <!-- /.col-lg-12 -->
                <div class="col-lg-10" style="padding-bottom:120px">
                    <div class="form-group">
                        <div class="col-md-3 text-center">
                            <input type="hidden" name="hinhanh1" id="hinhanh" value="" class="form-control" />
                            <img src="http://flatshop.org:3030/public/admin/img/no-image.jpg" alt="" class="img-responsive" id="anhtour" style="width:224px;height: 150px;border:1px solid #bbb;" />
                            <a href="javascript:void(0);" style="margin-top:5px;" class="btn btn-info btn-sm" onclick="BrowseServer();"><i class="fa fa-cloud-upload" aria-hidden="true"><input type="file" name="hinhanh" required=""></a></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>

	</div>
</div>
    <!-- /#wrapper -->

 

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>


