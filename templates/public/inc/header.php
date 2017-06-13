 <?php session_start()?>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shop điện tử</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../templates/public/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../templates/public/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../templates/public/css/owl.carousel.css">
    <link rel="stylesheet" href="../templates/public/css/style.css">
    <link rel="stylesheet" href="../templates/public/css/responsive.css">

    <!-- tạo popub -->
    <link rel="stylesheet" href="../templates/public/css/linhnguyen.css"> 
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://giaiphapthuonghieu.vn/miniapps/popuponload/jquery.popup.js"></script>    
        <script type="text/javascript" >
        $v= jQuery.noConflict();
            $v(window).load(function() {
                if(document.cookie.indexOf("adf")== -1){
                    document.cookie="popunder1=adf";
              $v('#myModal').linhnguyen($v('#myModal').data());
          }
            });
        </script>   
    <!-- end popub -->
    <!-- tăng sl giỏ hàng  -->
     <script src="http://code.jquery.com/jquery-latest.js"></script>
     <!-- end sl giỏ hàng  -->
  </head>
  <body>
    
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="gio-hang.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>
                            <?php if(!isset($_SESSION["loginIndex"])){ ?>
                            <li><a href="login.php"><i class="fa fa-user"></i> Đăng nhập</a></li>
                            <li><a href="register.php"><i class="fa fa-user"></i> Đăng ký</a></li>
                            <?php } ?>
                            <?php if(isset($_SESSION["loginIndex"])){ 
                                    $row=$_SESSION["loginIndex"];
                                    $fullname=$row["fullname"];
                                    $email=$row["email"];
                                    $phone=$row["phone"];
                                ?>
                            <li><a style="color: blue;" href=""><i class="fa fa-user"></i>chào: <?php echo $fullname;; ?></a></li>
                            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
                          <?php   } ?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="../templates/public/img/logo.png"></a></h1>
                    </div>
                </div>
                <?php 
                    $tongsl=0;
                    $total=0;
                    if(isset($_SESSION["cart"])){
                    foreach($_SESSION["cart"] as $key =>$aritem ){
                            $asoluong=$aritem["asoluong"]; 
                            $aprice=$aritem["aprice"];
                            $tongtien=$asoluong*$aprice;
                            $tongsl+= $asoluong;   
                            $total+=$tongtien;
                    }
                  
                }
                 ?>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="gio-hang.html">Cart-<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> 
                            <?php if($tongsl > 0){ ?>
                            <span class="product-count">
                                <?php echo $tongsl; ?>
                            </span>
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($active == 'home')?'class="active"':'' ?>><a href="trang-chu.html">Home</a></li>
                        <li <?php echo ($active == 'shop')?'class="active"':'' ?>><a href="san-pham.html">Shop page</a></li>
                        <li <?php echo ($active == 'single-product')?'class="active"':'' ?>><a  href="">Single product</a></li>
                        <li <?php echo ($active == 'cart')?'class="active"':'' ?>><a href="gio-hang.html">Cart</a></li>
                        <li <?php echo ($active == 'checkout')?'class="active"':'' ?>>
                            <?php if(!empty($_SESSION["cart"])){ ?>
                            <a href="checkout.php">Checkout</a>
                            <?php } else{?>
                             <a href="#" onclick="return confirm('Giỏ hàng hiện chưa có?');">Checkout</a>   
                            <?php } ?>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>