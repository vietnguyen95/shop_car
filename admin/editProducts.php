<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
 
 <div id="page-wrapper">
    <?php 
        $query="select * from category ";
        $result=$mysqli -> query($query);

        $pid=intval($_GET["pid"]);
        $sql="select * from products where id={$pid} limit 1";
        $res=$mysqli -> query($sql);
        $row=mysqli_fetch_assoc($res);

        $name=$row["name"];
        $id_category=$row["id_category"];
        $price=$row["price"];
        $discount=$row["discount"];
        $descriptions=$row["descriptions"];
        $content=$row["content"];
        $image=$row["image"];
        $urlimage="/files/" . $image;
    
     ?>
    <div class="container-fluid">
    <div class="row">
        <form action="function/productsEdit.php?pid=<?php echo $pid; ?> " data-toggle="validator" method="POST" enctype="multipart/form-data">
            <div class="col-lg-12 page-header">
                <h1 style="display: inline">
                        Sửa sản phẩm
                </h1>
                <div class="sub">
                    <button type="submit" name="submit" id="productAdd" class="btn btn-default"><i class="fa fa-plus-square" aria-hidden="true"></i> Product Edit</button>
                    <a href="indexProducts.php" onclick="return xacnhanxoa('bạn chắc muốn quay lại !')" class="btn btn-default"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                </div>

            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-margin" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#product" aria-controls="product" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                        </li>
                        <li role="presentation">
                            <a href="#content" aria-controls="content" role="tab" data-toggle="tab">mô tả</a>
                        </li>
                        <li role="presentation">
                            <a href="#images" aria-controls="images" role="tab" data-toggle="tab">Hình ảnh</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="product">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Chọn danh mục: <span class="errors"></span>
                                    </label>
                                    <select class="form-control" name="cate">
                                        <option value="">Vui lòng chọn danh mục</option>
                                        <?php
                                            $check="";
                                         while($ar=mysqli_fetch_assoc($result)){
                                            $id=$ar["id"];
                                            $namee=$ar["name"];
                                            if($id == $id_category){
                                                    $check="selected";
                                                }else{
                                                        $check="";
                                                    }?>
                                        <option <?php echo $check; ?> value="<?php echo $id; ?>"><?php echo $namee; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Tên sản phẩm: <span class="errors"></span>
                                    </label>
                                    <input type="text" class="form-control" name="txtName"  value="<?php echo $name; ?>" required="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Giá sản phẩm: <span class="errors"></span>
                                    </label>
                                    <input type="text" name="txtPrice" class="form-control text-right" value="<?php echo $price; ?>" id="money" required="" />
                                </div>
                                <div class="col-md-6">
                                    <label>Giảm giá( % giảm giá) : </label>
                                    <input type="text" name="txtDiscount" value="<?php echo $discount; ?>" class="form-control text-right" id="discount" required=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="content">

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" id="my-editor" name="txtDescription" required=""><?php echo $descriptions; ?></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <script type="text/javascript">
                                ckeditor("txtDescription");
                            </script>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Chi tiết sản phẩm</label>
                                    <textarea class="form-control" required="" rows="3" id="" name="txtContent"><?php echo $content; ?></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <script type="text/javascript">
                                ckeditor("txtContent");
                            </script>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="images">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-weight:500;color: #397ac4;">Ảnh sản phẩm : <span class="errors"></span>
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3 text-center">
                                    <input type="hidden" name="hinhanh1" id="hinhanh" value="" class="form-control" />
                                    <img src="<?php echo $urlimage; ?>" alt="" class="img-responsive" id="anhtour" style="width:224px;height: 150px;border:1px solid #bbb;" />
                                    <a href="javascript:void(0);" style="margin-top:5px;" class="btn btn-info btn-sm" onclick="BrowseServer();"><i class="fa fa-cloud-upload" aria-hidden="true"><input type="file" name="hinhanh"></a></i>
                                </div>
                                <div class="clearfix"></div>
                                <script type="text/javascript">
                                    function BrowseServer() {
                                        var finder = new CKFinder();
                                        finder.basePath = '../'; // The path for the installation of CKFinder (default = "/ckfinder/").
                                        finder.selectActionFunction = SetFileField;
                                        finder.connectorPath = 'http://flatshop.org:3030/admin/ckfinder/connector/path';
                                        finder.popup();
                                    }

                                    function SetFileField(fileUrl) {
                                        document.getElementById('hinhanh').value = fileUrl;
                                        document.getElementById('anhtour').src = fileUrl;
                                    }
                                </script>
                            </div>
                        </div>
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


