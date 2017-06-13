<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	$query="select * from products where status=1 limit 7";
	$result=$mysqli -> query($query);
 ?>
 <?php while ($arPro=mysqli_fetch_assoc($result)) {
 	$name=cutnchar($arPro["name"],20);
 	$image=$arPro["image"];
 	$urlPic="/files/" . $image;
 	$id=$arPro["id"];
    $id_cat=$arPro["id_category"];
 	$price=$arPro["price"];
 	$discount=$arPro["discount"];
 	
 	$gia=$price*(100- $discount)/100;
	$slug=$arPro["slug"];

  ?>
<div class="single-product">    
                    
    <div class="product-f-image">
        <img  src="<?php echo $urlPic; ?>" alt="">
        <div class="product-hover">
            <a href="" onclick="return getProduct(<?php echo $id; ?>)" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
            <a href="<?php echo $id; ?>-<?php echo $slug; ?>.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
        </div>
        <span class="giamgia"><?php echo $discount."%" ?></span>
    </div>

    <h2><a href="<?php echo $id; ?>-<?php echo $slug; ?>.html"><?php echo $name; ?></a></h2>
    
    <div class="product-carousel-price">
        <ins><?php echo adddotstring($gia)." VND"; ?></ins> <del><?php if($discount > 0) echo adddotstring($price)." VND"; ?></del>
    </div> 
</div>

<?php } ?>
