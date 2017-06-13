
<?php $active = 'checkout'; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                        <?php if(!isset($_SESSION["loginIndex"])){
                                ?>
                            <div class="woocommerce-info"><a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap">Nhấn vào đây để đăng nhập</a>
                            </div>
                            <?php } ?>
                            <form action="function/login.php" id="login-form-wrap" class="login collapse" method="post">
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
                                    <input type="submit" value="Login" name="login" class="button">
                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme">Ghi nhớ tôi</label>
                                </p>
                                <p class="lost_password">
                                    <a href="#">Quên mật khẩu?</a>
                                </p>

                                <div class="clear"></div>
                            </form>
                            <?php if(isset($_SESSION["loginIndex"])){
                                ?>
                            <form enctype="multipart/form-data" data-toggle="validator" action="function/oder.php" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi tiết Đặt hàng</h3>
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Họ và tên<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?php echo $fullname; ?>" placeholder="" id="billing_first_name" name="fullname" class="input-text ">
                                            </p>
                                            <div class="clear"></div>
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa chỉ nhận hàng<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text " required>
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Email<abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="email" value="<?php echo $email; ?>" placeholder="" id="billing_email" name="email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Số Điện Thoại <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?php echo $phone; ?>" placeholder="" id="billing_phone" name="phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                        </div>
                                    </div>

                                   

                                </div>
                                
                                <h3 id="order_review_heading">Sản phẩm của bạn</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Mặt hàng</th>
                                                <th class="product-total">Đơn giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $total1=0;
                                        if(isset($_SESSION["cart"])){
                                            foreach($_SESSION["cart"] as $key =>$ari ){
                                                        $aid1=$ari["aid"];
                                                        $asoluong1=$ari["asoluong"];  
                                                        $aprice1=$ari["aprice"];
                                                        $urlPic1=$ari["aurlp"];
                                                        $aname=cutnchar($ari["aname"],30);
                                                        $tongtien1=$asoluong1*$aprice1;
                                                        $total1+=$tongtien1;
                                             ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                <p><?php echo $aname; ?></p>
                                                    Số lượng <strong style="color: red;" class="product-quantity">× <?php echo $asoluong1; ?></strong> </td>
                                                <td class="product-total">
                                                    <span style="color: red;" class="amount"><?php echo adddotstring($aprice1)."VND"; ?></span> </td>
                                            </tr>
                                            <?php }
                                           ?>
                                        </tbody>
                                    </table>


                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                              <p>Thành Tiền:  <?php echo adddotstring($total1)."VND"; ?></p>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">

                                            <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="place_order" class="button alt">


                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                            <?php }}
                                ?>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>