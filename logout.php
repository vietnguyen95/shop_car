 <?php session_start()?>
 <?php 
 	unset($_SESSION["loginIndex"]);
	header("location: index.php");
  ?>