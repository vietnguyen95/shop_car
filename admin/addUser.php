<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
 
 <div id="page-wrapper">


    <div class="container-fluid">
        <div class="row">
            <form action="function/userAdd.php" method="POST" data-toggle="validator" role="form">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Thêm tài khoản
                    </h1>
                    <?php 
                        if(isset($_GET["msg"])){
                            $msg=$_GET["msg"];
                            if($msg == 0){
                                echo "<p style='color: red;'><strong>Username hoặc password đã tồn tại!</strong></p>";
                            }
                        }
                     ?> 
                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm </button>
                        <a href="indexUser.php" onclick="return confirm('bạn có muốn quay lại không!')" class="btn btn-default colorr"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                    </div>
                </div>
                                <!-- /.col-lg-12 -->
                <div class="col-lg-10" style="padding-bottom:120px">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" value="" name="username" placeholder="Please Enter Category Name" required/>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" value="" name="password" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" value="" name="email" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Fullname:</label>
                            <input type="text" class="form-control" value="" name="fullname" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>SDT:</label>
                            <input type="number" class="form-control" value="" name="phone" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" value="" name="address" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group" >
                            <label>Chọn Loại Quản trị</label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1"  type="radio" required>Ban Quản Trị
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="0" checked="" type="radio" required>Thành Viên
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


