<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php 
	$query="select * from products where status=1 limit 5";
	$result=$mysqli -> query($query);
	

 ?>
<ul class="" id="bxslider-home4">
<?php while($arP=mysqli_fetch_assoc($result)){
		$image=$arP["image"];
		$url="/files/" . $image; 
		$name=$arP["name"];
		$id=$arP["id"];
		$id_cat=$arP["id_category"];
		$slug=$arP["slug"]
		?>

	<li>
		<img  src="<?php echo $url; ?>" alt="Slide">
		<div class="caption-group">
			<h2 class="caption title">
				<span class="primary"><strong><?php echo $name; ?></strong></span>
			</h2>
			<h4 class="caption subtitle">Sản phẩm mới</h4>
			<a class="caption button-radius" href="<?php echo $id; ?>-<?php echo $slug; ?>.html "><span class="icon"></span>Chi tiết</a>
		</div>
	</li>
	<?php } ?>
</ul>	

