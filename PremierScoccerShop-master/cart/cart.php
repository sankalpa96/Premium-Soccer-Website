<?php
session_start();
require_once 'db.php';

$db = new DB();
// check cookie exist
if ( isset( $_COOKIE['sids']) &&  $_COOKIE['sids'] !='') {
    $aids = explode(',',$_COOKIE['sids']) ;

    // validate data
    foreach ($aids as $k => $val) {
        if (!is_numeric($val)) {
            unset($aids[$k]);
        }
    }

    $products = $db->getListProductByListIds($aids);


    // init session from cookie.
    foreach ($products as $item) {
        if (!isset($_SESSION['cart_info'][$item['id']]) ) {
            $temp = [];

            $temp['id'] = $item['id'];
            $temp['name'] = $item['name'];
            $temp['cost'] = $item['cost'];
            $temp['image'] = $item['image'];
            $temp['quantity'] = 1;  // default

            $_SESSION['cart_info'][$item['id']] = $temp;
        }
    }
}



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
                        <h3>World Soccer Shop</h3>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                        <input placeholder="Search" type="text">
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
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>

                        <!-- show product in cart -->
                        <?php if ( !isset($_SESSION['cart_info'])  || empty($_SESSION['cart_info']) ): ?>
                            <tr>
                                <td colspan="20"> <h4>Cart empty</h4> </td>
                            </tr>
                        <?php else: ?>
                            <?php $payment_total = 0;?>
                            <?php foreach($_SESSION['cart_info'] as $item): ?>

                            <tr>
                                <td class="cart_product">
                                    <a href=""><img style="width: 70px; height: 80px" alt="" src="<?php echo $item['image']?>"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo $item['name']?></a></h4>
                                    <p>ID: <?php echo $item['id']?> </p>
                                </td>
                                <td class="cart_price">
                                    <p>$<?php echo $item['cost']?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <?php echo dropdown_select('quantity', $item['quantity'], $item['id'] );?>

                                        <!--<select rel="3" class="quantity" name="quantity3" id="quantity3">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option selected="selected" value="9">9</option>
                                            <option value="10">10</option>
                                        </select>-->


                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p id="total-item-<?php echo $item['id']?>" class="cart_total_price">$<?php echo $item['cost'] * $item['quantity'];?></p>
                                </td>
                                <td class="cart_delete">
                                    <a href="javascript:void(0);" ref="<?php echo $item['id']?>" class="cart_quantity_delete"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                                <?php  $payment_total += $item['cost'] * $item['quantity']; ?>

                            <?php endforeach; ?>
                            <tr>
                                <td colspan="10"><b>Total: </b><b id="payment-total">$<?php echo $payment_total; ?></b></td>
                            </tr>
                        <?php endif;?>
                        </tbody>
                    </table>


                </div>
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