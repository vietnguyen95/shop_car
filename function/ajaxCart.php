<?php session_start()?>  
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	$id=$_POST["aid"];
	$query="select * from products where id={$id}";
	$result=$mysqli -> query($query);
	$arCart=mysqli_fetch_assoc($result);
	$image=$arCart["image"];
    $urlpic="/files/". $image;
	$name=$arCart["name"];
	$id=$arCart["id"];
	$gia=$arCart["price"];
	$discount=$arCart["discount"];
 	$price=$gia*(100- $discount)/100;
	$soluong=1;
	$tongsl=0;
	$total=0;
		if(isset($_SESSION["cart"][$id])){
				$_SESSION["cart"][$id]["asoluong"]=$_SESSION["cart"][$id]["asoluong"]+$soluong;
			}
		else {
			$_SESSION["cart"][$id]=array("aid" => $id,"asoluong" => $soluong,"aprice" => $price,"aname" => $name,"aurlp" => $urlpic);
			}
	if(isset($_SESSION["cart"])){
			foreach($_SESSION["cart"] as $key =>$aritem ){
					$asoluong=$aritem["asoluong"];	
					$aprice=$aritem["aprice"];
					$tongtien=$asoluong*$aprice;
					
					$tongsl+=$asoluong;    
					$total+=$tongtien;
		}
		
}
 ?>
	<a href="cart.php">Cart-<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> 
                            <span class="product-count"><?php echo $tongsl; ?> </span>
         </a>
 