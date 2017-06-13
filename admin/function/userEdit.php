<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	if(isset($_POST["submit"])){
		$uid=$_GET["uid"];
		$que="select * from  users where id={$uid} limit 1";
		$res=$mysqli -> query($que);
		$row=mysqli_fetch_assoc($res);
		$status=$row["status"];

		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$email=$_POST["email"];
		$fullname=$_POST["fullname"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$rdoStatus=$_POST["rdoStatus"];

		$sql="select * from users where id !={$uid} and (username='{$username}' or email='{$email}') ";
        $resu=$mysqli -> query($sql);
        $numrow=mysqli_num_rows($resu);
        if($numrow == 0){
			$query="update users set username='{$username}', password='{$password}', email='{$email}',fullname='{$fullname}',status={$rdoStatus},phone={$phone},address='{$address}' where id={$uid} limit 1";
			$result=$mysqli -> query($query);
		 		if($result){
			if($status == 1){
				header("location: ../indexUser.php?msg=1");
			}else{
				header("location: ../indexUserTV.php?msg=1");
			}
		}else{
			if($status == 1){
				header("location: ../indexUser.php?msg=0");
			}else{
				header("location: ../indexUserTV.php?msg=0");
			}
		}
		}else	{
			header("location: ../editUser.php?uid={$uid}&&msg=0");
		}

	}
 ?>