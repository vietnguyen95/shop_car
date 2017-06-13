<?php session_start()?>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	$akey=$_POST["akey"];
	if(isset($_SESSION["cart"])){
		unset($_SESSION["cart"][$akey]);
	}
 ?>
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
            <a href="single-product.html"><?php echo $aname; ?></a> 
        </td>

        <td class="product-price">
            <span class="amount"><?php echo adddotstring($aprice1); ?></span> 
        </td>

        <td class="product-quantity">
            <div class="quantity buttons_added">
                <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $asoluong1; ?>" min="0" step="1">
            </div>
        </td>

        <td class="product-subtotal">
            <span class="amount"><?php echo adddotstring($tongtien1); ?></span> 
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
