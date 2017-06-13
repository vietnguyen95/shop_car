<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$lid=intval($_GET['lid']);
	if($lid == 0){
		// thêm 	
	if(isset($_POST["submit"])){
		$image= $_FILES['hinhanh']['name'];
		
		if($image != ""){
			//up anh
			//đường dẫn tạm
			// đổi tên hình mới
			$tmp=explode(".",$image);
			$ext=$tmp[count($tmp) - 1];
			$namenews="Vn-".time()."-".$ext;
			$tmp_name = $_FILES['hinhanh']['tmp_name'];
			//đường dẫn gốc của host
			$path_root = $_SERVER['DOCUMENT_ROOT'];
			//tạo đường dẫn đầy đủ đến thư mục upload
			$path_upload = $path_root . "/files/" . $namenews;
			//thực hiện upload file lên host
			 move_uploaded_file($tmp_name, $path_upload);
		}
		$queryAdd="insert into logo(image) values ('{$namenews}')";
		$result=$mysqli -> query($queryAdd);
		if($result){
			header("location: ../logo.php?msg=1");
		}
		else{
			header("location: ../logo.php?msg=0");
		}
}
}
else{
	if(isset($lid)){
		$query="delete from logo where id={$lid} limit 1";
		$resu=$mysqli -> query($query);
		if($resu){
			header("location: ../logo.php?msg=1");
		}
		else{
			header("location: ../logo.php?msg=0");
		}
	}
	}
 ?>}
