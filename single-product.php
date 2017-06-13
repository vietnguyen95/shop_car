<?php $active = 'single-product'; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<!-- End mainmenu area -->
<?php 

    $pid=intval($_GET["pid"]);
    $id_cat=intval($_GET["id_cat"]);
    
    if(isset($pid) && isset($id_cat)){
    $query="select * from products where id={$pid} limit 1";
    $query="SELECT p.*,p.id As pid,p.name AS pname, c.*,c.name AS cname FROM products AS p INNER JOIN category AS c ON p.id_category=c.id where p.id={$pid} limit 1";
    $result=$mysqli -> query($query);


    // lấy sp liện quan
    $sql="select * from products where id != {$pid} and id_category={$id_cat} order by id DESC limit 4 ";
    $resu=$mysqli -> query($sql);
   
    
}

    //chi tiết sản phẩm
    $rowPro=mysqli_fetch_assoc($result);
    $id=$rowPro["pid"];
    $name=$rowPro["pname"];
    $image=$rowPro["image"];
    $urlpic="/files/" . $image;
    $id_cat=$rowPro["id_category"];
    $cname=$rowPro["cname"];
    $price=$rowPro["price"];
    $discount=$rowPro["discount"];
    
    $gia=$price*(100- $discount)/100;
    $description=$rowPro["descriptions"];
    $content=$rowPro["content"];
 ?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <!-- <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                    </div> -->
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href=""><?php echo $cname; ?></a>
                            <a href=""><?php echo $name; ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="<?php echo $urlpic; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $name; ?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo adddotstring($gia)." VND"; ?></ins> <del><?php if($discount > 0) echo adddotstring($price)." VND"; ?></del>
                                    </div>    
                                    
                                    <form action="function/detaiCart.php?pid=<?php echo $id; ?> " class="cart" method="post">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" name="submit" type="submit">Add to cart</button>
                                    </form>  
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p><?php echo $description; ?></p>

                                                <p><?php echo $content; ?></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản Phẩm Liên Quan</h2>
                            <div class="related-products-carousel">
                            <?php while ($ar=mysqli_fetch_assoc( $resu)) {
                                $idLQ=$ar["id"];
                                $nameLQ=$ar["name"];
                                $imageLQ=$ar["image"];
                                $urlpicLQ="/files/" . $imageLQ;
                                $id_catLQ=$ar["id_category"];
                                $priceLQ=$ar["price"];
                                $discountLQ=$ar["discount"];
                                
                                $giaLQ=$price*(100- $discountLQ)/100;
                                ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img style="height: 250px;" src="<?php echo $urlpicLQ; ?>" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.php?pid=<?php echo $idLQ; ?>&&id_cat=<?php echo $id_catLQ; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product.php?pid=<?php echo $idLQ; ?>&&id_cat=<?php echo $id_catLQ; ?>"><?php echo $nameLQ; ?></a></h2>

                                    <div class="product-carousel-price">
                                       <ins><?php echo adddotstring($giaLQ)." VND"; ?></ins> <del><?php if($discount > 0) echo adddotstring($priceLQ)." VND"; ?></del>
                                    </div> 
                                </div>
                            <?php } ?>
                                                                   
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>