<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>

<?php 
	if(isset($_POST["submit"])){
		$name=$_POST["txtName"];
		$slug=ChangeTitle($name);
		$id_category=$_POST["cate"];
		$price=$_POST["txtPrice"];
		$discount=$_POST["txtDiscount"];
		$descriptions=$_POST["txtDescription"];
		$content=$_POST["txtContent"];
		// $name=$_POST["txtName"];
		// xử lí hình ảnh
		//tên file
		$image= $_FILES['hinhanh']['name'];
		if($image == ""){
			// không up anh
			$image =null;
			
		}
		else{
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
		$queryAdd="insert into products(name,slug, status, image,descriptions,id_category, content, price, buys, discount) values ('{$name}','{$slug}',0,'{$namenews}','{$descriptions}',{$id_category},'{$content}',{$price},0,{$discount})";
		$result=$mysqli -> query($queryAdd);
		if($result){
			header("location: ../indexProducts.php?msg=1");
		}
		else{
			header("location: ../indexProducts.php?msg=0");
		}

	}
 ?>