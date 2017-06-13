<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/admin/function/catEdit.php'?>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
 <div id="page-wrapper">
<?php 
    $cid=intval($_GET["cid"]);
    $query="select * from category where id={$cid} limit 1";
    $result=$mysqli -> query($query);
    $arCat=mysqli_fetch_assoc($result);
        $id=$arCat["id"];
        $name=$arCat["name"];
        $status=$arCat["status"];
               
 ?>

    <div class="container-fluid">
        <div class="row">
            <form action="function/catEdit.php?cid=<?php echo $id; ?>" method="POST" data-toggle="validator" role="form">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Sửa danh mục sản phẩm
                    </h1>
                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Sửa category</button>
                        <a href="indexCat.php" onclick="return confirm('bạn có muốn quay lại không!')" class="btn btn-default colorr"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                    </div>
                </div>
                                <!-- /.col-lg-12 -->
                <div class="col-lg-10" style="padding-bottom:120px">
                
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="txtCateName" placeholder="Please Enter Category Name" required/>
                        </div>
                        <div class="form-group" >
                            <label>Category Status</label>
                            <?php $h=$v=''; if($status == 1){
                                        $v='checked=""';
                                } else{
                                     $h='checked=""';
                                    }?>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" <?php echo $v; ?>  type="radio" required>Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="0" <?php echo $h; ?> type="radio" required>Ẩn
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


