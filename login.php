<?php $active = 'shop' ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <form action="function/login.php" id="login-form-wrap" class="login" method="post">
                    <p class="form-row form-row-first">
                        <label for="username">Tên đăng nhập hoặc email<span class="required">*</span>
                        </label>
                        <input type="text" id="username" name="username" class="input-text">
                    </p>
                    <p class="form-row form-row-last">
                        <label for="password">Mật khẩu <span class="required">*</span>
                        </label>
                        <input type="password" id="password" name="password" class="input-text">
                    </p>
                    <div class="clear"></div>


                    <p class="form-row">
                        <input type="submit" value="Login" name="loginIndex" class="button">
                        <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme">Ghi nhớ tôi</label>
                    </p>
                    <p class="lost_password">
                        <a href="#">Quên mật khẩu?</a>
                    </p>

                    <div class="clear"></div>
                 </form>
                
            </div>
            
        </div>
    </div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>