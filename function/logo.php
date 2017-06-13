<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$query="select * from logo order by id DESC limit 6 ";
	$result=$mysqli -> query($query);
	while ($ar=mysqli_fetch_assoc($result)) {
		
	$image=$ar["image"];
	$url="/files/".$image;

 ?>

    <img src="<?php echo $url; ?>" alt="">                            

<?php } ?>