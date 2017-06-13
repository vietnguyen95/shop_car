<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
 <div id="page-wrapper">
    <?php 
        $uid=intval($_GET["uid"]);
       
        $query="select * from users where id={$uid} limit 1";
        $result=$mysqli -> query($query);
        $row=mysqli_fetch_assoc($result);

        $id=$row["id"];
        $username=$row["username"];
        $email=$row["email"];
        $fullname=$row["fullname"];
        $phone=$row["phone"];
        $address=$row["address"];
        $status=$row["status"];
         if(($uid == $idUser)||($statusUser == 1 )){

            ?>

    <div class="container-fluid">
        <div class="row">
            <form action="function/userEdit.php?uid=<?php echo $id; ?>" method="POST" data-toggle="validator" role="form">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Sửa tài khoản
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
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Sửa </button>
                        <a href="indexUser.php" onclick="return confirm('bạn có muốn quay lại không!')" class="btn btn-default colorr"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                    </div>
                </div>
                                <!-- /.col-lg-12 -->
                <div class="col-lg-10" style="padding-bottom:120px">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" placeholder="Please Enter Category Name" required/>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" value="" name="password" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Fullname:</label>
                            <input type="text" class="form-control" value="<?php echo $fullname; ?>" name="fullname" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>SDT:</label>
                            <input type="number" class="form-control" value="<?php echo $phone; ?>" name="phone" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" value="<?php echo $address; ?>" name="address" placeholder="Please Enter" required/>
                        </div>
                        <div class="form-group" >
                            <label>Chọn Loại Quản trị</label>
                            <?php
                            $v=$h=''; 
                             if($status == 0){
                                    $v='checked=""';
                                }else{
                                    $h='checked=""';
                                    } ?>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" <?php echo $h; ?> type="radio" required>Ban Quản Trị
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="0" <?php echo $v; ?> type="radio" required>Thành Viên
                            </label>
                        </div>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <?php } else{?>
            <h1 style="color: red;"> bạn không có quyền sửa!</h1>
    <?php } ?>

	</div>
</div>
    <!-- /#wrapper -->

 

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>


