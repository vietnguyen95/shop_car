<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	if(isset($_POST["submit"])){
		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$email=$_POST["email"];
		$fullname=$_POST["fullname"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$rdoStatus=$_POST["rdoStatus"];

		$sql="select * from users where username='{$username}' or email='{$email}' ";
        $resu=$mysqli -> query($sql);
        $numrow=mysqli_num_rows($resu);
        if($numrow == 0){
			$query="insert into users(username, password, email,fullname,status,phone,address) values('{$username}','{$password}', '{$email}','{$fullname}',{$rdoStatus},{$phone},'{$address}')";
			$result=$mysqli -> query($query);
		 	if($result){
				if($rdoStatus == 1){
					header("location: ../indexUser.php?msg=1");
				}else{
					header("location: ../indexUserTV.php?msg=1");
				}
			}else{
				if($rdoStatus == 1){
					header("location: ../indexUser.php?msg=0");
			}else{
					header("location: ../indexUserTV.php?msg=0");
				}
			}
		}else{
			header("location: ../addUser.php?msg=0");
		}

	}
 ?>