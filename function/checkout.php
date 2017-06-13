<?php 
	if(isset($_POST["checkout"])){
			header("location: /checkout.php");
	}
	
	if(isset($_POST["update_cart"])){
		header("location: /cart.php");
	}
 ?>