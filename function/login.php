<?php session_start()?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	if(isset($_POST["login"])){
		$username=$_POST["username"];
		
		$password=md5($_POST["password"]);
		
		$que="select * from  users where (password='{$password}' and email='{$username}') or (password='{$password}' and username='{$username}') limit 1"; 
		
		$res=$mysqli -> query($que);
		$row=mysqli_fetch_assoc($res);

		if(count($row) > 0){
			$_SESSION["loginIndex"]=$row;
			header("location: ../checkout.php");
		}
		else{
			echo "lỗi";
		}

	}
	if(isset($_POST["loginIndex"])){
		$username=$_POST["username"];
		
		$password=md5($_POST["password"]);
		
		$que="select * from  users where (password='{$password}' and email='{$username}') or (password='{$password}' and username='{$username}') limit 1"; 
		
		$res=$mysqli -> query($que);
		$row=mysqli_fetch_assoc($res);

		if(count($row) > 0){
			$_SESSION["loginIndex"]=$row;
			header("location: ../index.php");
		}
		else{
			echo "lỗi";
		}

	}
 ?>