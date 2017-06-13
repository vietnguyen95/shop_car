<?php session_start()?>  
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	if(isset($_POST["submit"])){
		$id=intval($_GET["pid"]);
		$sl=$_POST["quantity"];

		$query="select * from products where id={$id}";
		$result=$mysqli -> query($query);
		$arCart=mysqli_fetch_assoc($result);

		$image=$arCart["image"];
	    $urlpic="/files/". $image;

		$name=$arCart["name"];

		$gia=$arCart["price"];
		$discount=$arCart["discount"];
	 	$price=$gia*(100- $discount)/100;

		
		$tongsl=0;
		$total=0;

		if(isset($_SESSION["cart"][$id])){
				$_SESSION["cart"][$id]["asoluong"]=$_SESSION["cart"][$id]["asoluong"]+$sl;
			}
		else {
			$_SESSION["cart"][$id]=array("aid" => $id,"asoluong" => $sl,"aprice" => $price,"aname" => $name,"aurlp" => $urlpic);
			}
			header("location: ../cart.php");

	}
	
 ?>