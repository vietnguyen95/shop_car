<?php $active = 'shop' ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <form action="function/register.php" method="POST" data-toggle="validator" role="form">
           
                <div class="col-lg-12 page-header">
                    <h1 style="display: inline">
                       Đăng ký tài khoản
                    </h1>
                    <p><?php 
                        if(isset($_GET["msg"])){
                            $msg=$_GET["msg"];
                            if($msg == 0){
                                echo "<p style='color: red;'><strong>Username hoặc password đã tồn tại!</strong></p>";
                            }
                        }
                     ?> </p>
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

                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-default colorr"><i class="fa fa-plus-square" aria-hidden="true"></i> Đăng ký </button>
                    </div>
                </div>
            </form>
            </div>
            
        </div>
    </div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>