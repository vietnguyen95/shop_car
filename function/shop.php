<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
		$query="select * from products where status=1 order by id DESC ";
	$result=$mysqli -> query($query);
 ?>
 <?php while ($arPro=mysqli_fetch_assoc($result)) {
 	$name=cutnchar($arPro["name"],26);

 	$image=$arPro["image"];
 	$urlPic="/files/" . $image;
 	$id=$arPro["id"];
    $id_cat=$arPro["id_category"];
 	$price=$arPro["price"];
 	$discount=$arPro["discount"];
 	
 	$gia=$price*(100- $discount)/100;
    $slug=$arPro["slug"];
 ?>
<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <img style="width: 200px; height: 250px;" src="<?php echo $urlPic; ?>" alt="">
        </div>
        <h2><a href="<?php echo $id; ?>-<?php echo $slug; ?>.html"><?php echo $name; ?></a></h2>
        <div class="product-carousel-price">
           <ins><?php echo adddotstring($gia)." VND"; ?></ins> <del><?php if($discount > 0) echo adddotstring($price)." VND"; ?></del>
        </div>  
        
        <div class="product-option-shop">
            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="" onclick="return getProduct(<?php echo $id; ?>)">Add to cart</a>
        </div>                       
    </div>
</div>
<?php } ?>
 