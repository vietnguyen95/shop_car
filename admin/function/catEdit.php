<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	if(isset($_POST["submit"])){
		$cid=intval($_GET['cid']);
		$name=$_POST["txtCateName"];
		$slug=ChangeTitle($name);
	 	$status=$_POST["rdoStatus"];
		$query="update category set name='{$name}', status={$status}, slug='{$slug}' where id={$cid} limit 1";
		$result=$mysqli -> query($query);
	 		if($result){
			header("location: ../indexCat.php?msg=1");
		}else{
			header("location: ../indexCat.php?msg=0");
		}
	}
 ?>
 