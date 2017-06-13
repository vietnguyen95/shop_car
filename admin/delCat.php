<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$cid=intval($_GET["cid"]);
	if(isset($cid)){
		$query="delete from category where id={$cid} limit 1";
		$result=$mysqli -> query($query);
		if($result){
			header("location: indexCat.php?msg=1");
		}else{
			header("location: indexCat.php?msg=0");
		}
	}
 ?>