<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$pid=intval($_GET["pid"]);
	if(isset($pid)){
		$query="delete from products where id={$pid} limit 1";
		$result=$mysqli -> query($query);
		if($result){
			header("location: indexProducts.php?msg=1");
		}
		else{
			header("location: indexProducts.php?msg=0");
		}
	}
 ?>