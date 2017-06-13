<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$id=$_GET["oid"];
	if(isset($id)){
		$query="delete from `order` where id={$id} limit 1";
		$result=$mysqli -> query($query);
		if($result){
			header("location: listorder.php?msg=1");
		}
		else{
			header("location: listorder.php?msg=0");
		}
	}
 ?>