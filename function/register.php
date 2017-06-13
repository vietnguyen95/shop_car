<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	if(isset($_POST["submit"])){
		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		$email=$_POST["email"];
		$fullname=$_POST["fullname"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$rdoStatus=0;

		$sql="select * from users where username='{$username}' or email='{$email}' ";
        $resu=$mysqli -> query($sql);
        $numrow=mysqli_num_rows($resu);
        if($numrow == 0){
			$query="insert into users(username, password, email,fullname,status,phone,address) values('{$username}','{$password}', '{$email}','{$fullname}',{$rdoStatus},{$phone},'{$address}')";
			$result=$mysqli -> query($query);
		 	if($result){
		 			header("location: ../index.php?msg=1");
					alert("Thành công!");
			}else{

					header("location: ../index.php?msg=2");
					alert("Thất bại!");
				
			}
		}else{
			header("location: ../register.php?msg=0");
		}

	}
 ?>