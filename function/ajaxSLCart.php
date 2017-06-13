<?php session_start()?>  
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php header('Content-Type: application/json'); ?>
<?php 
	$id=$_POST["aid"];
	$soluong=$_POST["asl"];
	if(isset($_SESSION["cart"][$id])){
				$_SESSION["cart"][$id]["asoluong"]=$soluong;
			}
 ?>
 <?php 
 	$data = array();
	$total=0;
 	if(isset($_SESSION["cart"])){
			foreach($_SESSION["cart"] as $key =>$aritem ){
					// $asoluong=$aritem["asoluong"];	
					// $aprice=$aritem["aprice"];
					// $tongtien=$asoluong*$aprice;    
					// $total+=$tongtien;
					if($key == $id ){
						$aprice=$aritem["aprice"];
						$asoluong=$aritem["asoluong"];
						$data['tongtien']=adddotstring($asoluong*$aprice);
					}
		}
	}
	echo json_encode($data);
  ?>
  
  
