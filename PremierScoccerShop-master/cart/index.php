<?php
    require_once 'db.php';

    $db = new DB();

    $products = $db->getAllProducts();

//    echo '<pre>';
//    print_r($products);
//    echo '</pre>';


    //var_dump($_COOKIE['sids']);
    //isset($_COOKIE['sids']) == true? var_dump($_COOKIE['sids']): 'nothing';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>World Soccer Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="tel:+84973710159"><i class="fa fa-phone"></i> +94 72 122 1484 </a></li>
                            <li><a href="mailto:quyentv209@gmail.com"><i class="fa fa-envelope"></i> dmaxrodrigo1@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <h3>World Soccer Shop </h3>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php">Shop</a></li>
                            <li><a href="cart.php">Cart</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h1>Categories</h1>
                    <div id="accordian" class="panel-group category-products"><!--category-productsr-->
                        <div class="panel panel-default">
                            <p> Balls </p>
                        </div>
                        <div class="panel panel-default">
							<p> Shoes </p>

							
                        </div>
                        <div class="panel panel-default">
                             <p> Pads </p>
 
                        </div>
                        <div class="panel panel-default">
                               <p> Jerseys </p>

                        </div>
                        <div class="panel panel-default">
                           <p> Shorts </p>

                        </div>
                        <div class="panel panel-default">
                            <p> Gloves </p>

                        </div>
						
						<div class="panel panel-default">
                           <p> Goal Nets </p>

                        </div>
						
						<div class="panel panel-default">
                           <p> Stokings </p>

                        </div>

                    </div><!--/category-productsr-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h1 class="title text-center">Selling Items</h1>


                    <!-- Loop here -->
                    <?php foreach ($products as $item) :?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img alt="product 1" src="<?php echo $item['image'];?>">
                                    <h2>$<?php echo $item['cost'];?></h2>
                                    <p><?php echo $item['name'];?></p>
                                    <a ref="<?php echo $item['id'];?>" class="btn btn-default add-cart-button" href="cart.php"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$<?php echo $item['cost'];?></h2>
                                        <p><?php echo $item['image'];?></p>
                                        <a ref="<?php echo $item['id'];?>" class="btn btn-default add-cart-button" href="cart.php"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>


                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2016 SriLanka. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>


</body>
</html>