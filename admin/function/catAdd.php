<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	 	if(isset($_POST['submit'])){
	 		$name=$_POST["txtCateName"];
	 		$slug=ChangeTitle($name);
	 		$status=$_POST["rdoStatus"];
	 		$query="insert into category(name, status, slug) values('{$name}',{$status},'{$slug}')";
	 		$result=$mysqli -> query($query);
	 		if($result){
			header("location: ../indexCat.php?msg=1");
		}else{
			header("location: ../indexCat.php?msg=0");
		}
	 	}
	  ?>