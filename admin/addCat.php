<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
 
 <div id="page-wrapper">


    <div class="container-fluid">
        <div class="row">
            <form action="function/catAdd.php" method="POST" data-toggle="validator" role="form">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Thêm danh mục sản phẩm
                    </h1>
                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm category</button>
                        <a href="indexCat.php" onclick="return confirm('bạn có muốn quay lại không!')" class="btn btn-default colorr"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                    </div>
                </div>
                                <!-- /.col-lg-12 -->
                <div class="col-lg-10" style="padding-bottom:120px">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" value="" name="txtCateName" placeholder="Please Enter Category Name" required/>
                        </div>
                        <div class="form-group" >
                            <label>Category Status</label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1"  type="radio" required>Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="0" checked="" type="radio" required>Ẩn
                            </label>
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


