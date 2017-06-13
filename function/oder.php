<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo date_default_timezone_get();
?>
<?php session_start()?>  
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php if (isset($_POST["place_order"])) {
	$address=$_POST["address"];
	$now = getdate(); 
   	$time =$now["year"] . "/" . $now["mon"] . "/" . $now["mday"] .  " " . $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] ; 
     if(isset($_SESSION["loginIndex"])){
        $row=$_SESSION["loginIndex"];
        $fullname=$row["fullname"];
        $email=$row["email"];
        $phone=$row["phone"];
        $iduser=$row["id"];
        
   }
   if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])){
		  $ar=$_SESSION["cart"];
      $detailshoping=serialize($ar);
    //   $e=unserialize($c);
    //    //echo $c;
    //   foreach ($e as $key => $va) {
    //  // var_dump($va);
    //    echo $va["aname"];
    // }
      $query= "INSERT INTO `order`(`status`, `viewstatus`, `fullname`, `phone`, `address`, `detailshopping`, `id_user`,`created_at`) VALUES (0,0,'{$fullname}','{$phone}','{$address}','{$detailshoping}',1,'{$time}')";
      $result=$mysqli -> query($query);
      if($result){
       header("location: ../index.php?msg=1");
      }else{
       header("location: ../index.php?msg=2");
      }


		
	}   
  
} ?>