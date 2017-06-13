<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$aid=$_POST["aid"];
	$astatus=$_POST["astatus"];
    // echo $astatus; die();
	//$asi=$_POST["asi"];
    $status = ($astatus == 1)? 1: 0;
	$query="update category set status={$status} where id={$aid} limit 1";
	$result=$mysqli -> query($query);
?>

		