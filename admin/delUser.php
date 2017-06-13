<?php session_start()?>
<?php 
        if(isset($_SESSION["login"])){
            $arUser=$_SESSION["login"];
            $idUser=$arUser["id"];
             $statusUser=$arUser["status"];
        }
     ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$uid=intval($_GET["uid"]);
	
	$que="select * from  users where id={$uid} limit 1";
	$resu=$mysqli -> query($que);
	$row=mysqli_fetch_assoc($resu);
	$status=$row["status"];
	if(($uid == $idUser)||($statusUser == 1)){
	if(isset($uid)){
		$query="delete from users where id={$uid} limit 1";
		$result=$mysqli -> query($query);
		if($result){
			if($uid == $idUser){
				session_destroy();
				header("location: login.php");
			}
			else{
				if($status == 1){
				header("location: indexUser.php?msg=1");
			}else{
				header("location: indexUserTV.php?msg=1");
			}
			}
		}else{
			if($status == 1){
				header("location: indexUser.php?msg=0");
			}else{
				header("location: indexUserTV.php?msg=0");
			}
		}
	}
	}else{
			if($status == 1){
				header("location: indexUser.php?msg=3");
			}else{
				header("location: indexUserTV.php?msg=3");
			}
		}
	
 ?>