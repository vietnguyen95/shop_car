
<?php $active = 'cart'; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?> <!-- End mainmenu area -->
    
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
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
                
                <div class="col-md-8">

                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="function/checkout.php">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Tên Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">số lượng</th>
                                            <th class="product-subtotal">tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $total1=0;
                                         if(!empty($_SESSION["cart"])){
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
                                            <td class="product-remove">
                                                <a title="Remove this item" onclick="return getdel(<?php echo $key; ?>)" class="remove" href="">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo $urlPic1; ?>"></a>
                                            </td>

                                            <td style="width: 550px;" class="product-name">
                                                <a href=""><?php echo $aname; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo adddotstring($aprice1); ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="number" size="4" class="input-text qty text"  value="<?php echo $asoluong1; ?>" min="0" step="1" data="<?php echo $aid1; ?>" >
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount-<?php echo $aid1; ?>"><?php echo adddotstring($tongtien1); ?></span> 

                                            </td>
                                        </tr>
                                        <?php }
                                       ?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Thành Tiền:</label>
                                                    <input style="color: red;" type="text" placeholder="Coupon code" value="<?php echo adddotstring($total1)."VND"; ?>" id="coupon_code" class="input-text" name="coupon_code">
                                                    
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input type="submit" value="Checkout" name="checkout" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                        <?php } else {?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                               <span>Giỏ hàng hiện chưa có!</span>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">



                            <form method="post" action="#" class="shipping_calculator">
                               

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">


                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                                </section>
                            </form>


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
     <script type="text/javascript">
            //xóa phần tử giỏ hàng
            function getdel(key){
                $.ajax({
                    url: 'function/ajaxDelCart.php',
                    type: 'POST',
                    cache: false,
                    data: {akey: key},
                    success: function(data){
                       //alert(data);
                       $('.cart').html(data);
                      
                    },
                    error: function (){
                        alert('Có lỗi xảy ra');
                    }
                });
              return false;  
            }
            // thay đổi số lượng
             $(".input-text").click(function () {
                var value = $(this).val();
                var id=$(this).attr('data');
                 $.ajax({
                    url: 'function/ajaxSLCart.php',
                    type: 'POST',
                    cache: false,
                    data: {aid: id ,asl: value},
                    dataType: 'json',
                    success: function(data){
                       //alert(data);
                       //$('.cart').html(data);
                        $('.amount-'+id).html(data.tongtien);
                        
                       // alert(data.tongtien);
                      
                    },
                    error: function (){
                        alert('Có lỗi xảy ra');
                    }
                });
                 return false;
            });
</script>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>