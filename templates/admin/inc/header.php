<?php session_start()?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/admin/function/checkUser.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping car</title>
    <link href="../templates/admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../templates/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../templates/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../templates/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../templates/admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../templates/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ckdietor -->
     <script type="text/javascript" src="../templates/admin/js/ckeditor.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://flatshop.org:3030/admin/index" target="_blank">Shopping Cart - Larshop</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
        <span class="badge">2</span><i class="fa fa-envelope fa-fw"></i><i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-messages">
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                        <em>Yesterday</em>
                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-messages -->
</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <?php 
        if(isset($_SESSION["login"])){
            $arUser=$_SESSION["login"];
            $idUser=$arUser["id"];
            $username=$arUser["username"];
            $statusUser=$arUser["status"];
        }
     ?>
    <ul class="dropdown-menu dropdown-user">
        <li><a href="editUser.php?uid=<?php echo $idUser; ?>"><i class="fa fa-user fa-fw"></i><?php echo $username; ?></a>
        </li>
        <li><a href="editUser.php?uid=<?php echo $idUser; ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>        
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                </li>
                                <li>
    <a href="#"><i class="fa fa-external-link" aria-hidden="true"></i> Tùy chọn<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
             <a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quản lý danh mục<span class="fa arrow"></span></a>
             <ul class="nav nav-second-level">
                <li>
                    <a href="indexCat.php">Danh mục sản phẩm</a>
                </li>
                <li>
                    <a href="addCat.php">Thêm danh mục sản phẩm</a>
                </li>
             </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i> Quản lý sản phẩm<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="indexProducts.php">Sản phẩm</a>
                </li>
                <li>
                    <a href="addProducts.php">Thêm sản phẩm</a>
                </li>
                <li>
                    <a href="http://flatshop.org:3030/admin/tags">Thêm Tags</a>
                </li>
            </ul>
        </li>
        
    </ul>
</li>                
<li>
        <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Quản lý mua hàng <span class="badge"></span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="listorder.php">Danh sách mua hàng</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>                
               
<li>
    <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Quản lý website<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
             <a href="#"><i class="fa fa-folder" aria-hidden="true"></i> Quản lý slide index<span class="fa arrow"></span></a>
             <ul class="nav nav-second-level">
                <li>
                    <a href="logo.php">Danh sách slide logo</a>
                </li>
                <li>
                    <a href="http://flatshop.org:3030/admin/slider/add">Thêm Slide</a>
                </li>
             </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder" aria-hidden="true"></i> Quản lý slide danh mục<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li>
                    <a href="#">Danh sách slide</a>
                </li>
                <li>
                    <a href="#">Thêm Slide</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder" aria-hidden="true"></i> Quản lý banner<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li>
                    <a href="http://flatshop.org:3030/admin/banner">Danh sách banner</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder" aria-hidden="true"></i> Đối tác<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li>
                    <a href="#">Danh sách</a>
                </li>
                
            </ul>
        </li>
    </ul>
</li>                               <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Tài khoản<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="indexUser.php">Ban quản trị</a>
                        </li>
                        <li>
                            <a href="indexUserTV.php">Thành viên</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>