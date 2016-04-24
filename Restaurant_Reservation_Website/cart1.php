<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>DesiDining - We Serve You Better</title>
      <link rel="icon" href="img/Desiicon.jpg">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
      <link rel="stylesheet" type="text/css" href="../css/cartcss.css">	

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo">
<link rel="icon" type="image/x-icon" href="../img/favicon.ico"/> 
<link rel="stylesheet" href="../css/normalize.css">
<link rel='stylesheet prefetch' href='http://static.bveneman.nl/utf-latest.min.css'>

                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   

  

<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      [class*="entypo-"]:before { font-family: 'entypo', sans-serif; }
body {
  background-color: #ecf0f1;
  font: 300 1.25em/1.4 "Lato", sans-serif;
  color: #686868;
}
h1, h2, h3, h4, h5, h6 { font-weight: 400; }
h1, .sub-heading {
  text-align: center;
  margin: .5rem 0 1rem;
}
.sub-heading {
  font-size: .75em;
  font-weight: 300;
}

/**
 * @section: utilities;
 * @see: Justify Grid [http://justifygrid.com/]
 */
._grid {
  text-align: justify !important;
  text-justify: distribute-all-lines;
  font-size: 0 !important;
  text-rendering: optimizespeed;
}
._grid:after {
  content: "";
  display: inline-block;
  width: 100%;
}
._column {
  display: inline-block;
  vertical-align: top;
  font-size: medium;
  text-align: left;
  text-rendering: optimizeLegibility;
}
._btn {
  display: inline-block;
  background-color: #bdc3c7;
  border: none;
  padding: .5em .75em;
  text-align: center;
  font-weight: 300;
}
._btn:hover,
.cart-totals:hover ._btn {
  background-color: #3498db;
  color: #ecf0f1;
}

/**
 * @section: shopping-cart;
 */
.shopping-cart {
  width: 80%;
  max-width: 60rem;
  margin: 0 auto;
}
/**
 * @extends: _grid;
 */
.shopping-cart--list-item {
  border: 1px solid #bdc3c7;
  margin-bottom: 3rem;
  height: 10rem;
  overflow: hidden;
}
.shopping-cart--list-item:hover,
.shopping-cart--list-item:hover * {
  border-color: #3498db;
}
.shopping-cart--list-item > ._column {
    height: 100%; /* make vertical lines match */
}

/**
 * @section: product-image;
 * @extends: _column;
 */
.product-image {
  width: 16.663198%;
  background: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7") no-repeat center / cover transparent;
}

/**
 * @section: product-info;
 * @extends: _column;
 */
.product-info {
  width: 70.832119%;
  padding: .5rem;
}
.product-name {
  font: 300 2.4em/1 "Lato", sans-serif;
  letter-spacing: -.025em;
  margin: 0 0 .125em;
}
.price {
  line-height: 1;
  text-align: right;
}
.product-single-price {
  margin-top: -1rem;
  font-size: 2.4em;
}

/**
 * @section: product-modifiers;
 * @extends: _column;
 */
.product-modifiers {
  width: 12.496358%;
  text-align: right;
  border-left: 1px solid #bdc3c7;
}
.product-subtract,
.product-plus,
.product-qty {
  width: 33.330557%;
  background-color: transparent;
  color: #686868;
  text-align: center;
}
.product-qty {
  padding: .35em .75em;
}
.product-remove {
  font-size: .875em;
  margin-top: 3.35rem;
  background-color: #e74c3c;
  color: #ecf0f1;
  width: 100%;
  visibility: hidden;
}
.product-modifiers:hover .product-remove {
  visibility: visible;
}
.product-remove:before {
  margin-right: .5em;
}
.product-remove:hover {
  background-color: #c0392b;
}
.product-total-price {
  border-top: 1px solid #bdc3c7;
  color: #95a5a6;
  font-size: 1.25em;
  padding: .5rem;
}
.shopping-cart--list-item:hover .product-total-price {
  background-color: #3498db;
  color: #ecf0f1;
}

/**
 * @section: cart-totals;
 * @extends: _grid;
 */
.cart-totals {
  border-top: 1px solid #bdc3c7;
  margin-bottom: 3rem;
}
.cart-totals ._column {
  width: 19.984013%;
  padding: .5rem;
  line-height: 1.2;
}
.cart-totals ._column:not(:last-of-type) {
  border-right: 1px solid #bdc3c7;
}
.cart-totals ._column:first-of-type {
  padding-left: 0;
}
.cart-totals-key {
  font-size: 1.125em;
  color: #bdc3c7;
}
.cart-totals ._column:hover .cart-totals-value,
.cart-totals ._column:hover .cart-totals-key {
  color: #333;
}
.cart-totals-value {
  font-size: 2em;
}
._column.checkout {
  text-align: right;
  padding: 0;
  margin-top: 1.5em;
  vertical-align: middle;
}
.checkout-btn:before {
  margin-right: .5em;
}
._btn.checkout-btn:hover {
  background-color: #2980b9;
}

/**
 * Animations
 */
.product-remove,
.cart-totals * {
  transition: all .2s ease;
}
.closing {
  transition: all .5s ease;
  transform: translate3d(0, -100%, 0);
  opacity: 0;
}

    </style>

    
        <script src="js/prefixfree.min.js"></script>


</head>
 <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>CONTACT US: <strong>contact@desidining.com</strong></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                    <?php 
					if (isset($_SESSION['email'])){ 
						echo "You are logged in as : ";  echo $_SESSION['email']; echo "&nbsp;|<a href='logout.php' style='color:#ffffff;'>Logout</a>";
					}else { }
				?></p>
                     <!--<a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>-->
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><img src="img/Desi-logo.png" width="371" height="128"></p>
              </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li ><a href="index.php">Home</a></li>
                     <li><a href="about.php">About Us</a></li>
                     <li><a href="cities.php">Cities</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="login.php">Log In</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header> 
<div style="height:200px;"></div>
 

<div class="guest-checkout-steps-wrapper">
    <ul class="guest-checkout-steps container" data-active-checkout-step="review-order">
        
                    
            <li class="guest-checkout-step active-checkout-step" data-section="review-order">
                <div class="guest-checkout-step-content">
                    <p class="guest-checkout-step-title">1. Your order</p>
                    <p class="guest-checkout-step-text">Make sure everything is as you wish</p>
                </div>

<li class="guest-checkout-step " data-section="checkout">
                <div class="guest-checkout-step-content">
                    <p class="guest-checkout-step-title">2. Secure checkout</p>
                    <p class="guest-checkout-step-text">Select delivery address and payment type</p>
                </div>

                            </li>
            </ul>
</div>
<?php

 
 function objectToArray($d) {
 if (is_object($d)) {
 // Gets the properties of the given object
 // with get_object_vars function
 $d = get_object_vars($d);
 }
 
 if (is_array($d)) {
 /*
 * Return array converted to object
 * Using __FUNCTION__ (Magic constant)
 * for recursive call
 */
 return array_map(__FUNCTION__, $d);
 }
 else {
 // Return array
 return $d;
 }
 }
 
?>

 <div>
<?php
$hname= $_GET['hotelname'];
echo $hname;
$mysqli = new mysqli("localhost", "dbscu", "desi123", "desi");
    // set the PDO error mode to exception
	$sql = $mysqli->query("SELECT menuname, price FROM  menu where hotelname='$hname'");
	
	//$the_array = objectToArray($sql);
 //print_r($the_array);
	
  
  

	
    echo "Connected successfully"; 
	while ($row = mysqli_fetch_assoc($sql)) {
		
		print "<ol class='ui-list shopping-cart--list' id='shopping-cart--list'>";

     
        print "<li class='_grid shopping-cart--list-item'>";
          print "<div class='_column product-image'>";
           
          print "</div>";
          print "<div class='_column product-info'>";
            print "<h4 class='product-name'>".$row['menuname']."</h4>";
            
            print "<div class='price product-single-price'>".$row['price']."</div>";
          print "</div>";
          print "<div class='_column product-modifiers' data-product-price='".$row['price']."}'>";
            print "<div class='_grid'>";
              print "<button class='_btn _column product-subtract'>&minus;</button>";
              print "<div class='_column product-qty'>0</div>";
              print "<button class='_btn _column product-plus'>&plus;</button>";
            print "</div>";
            print "<button class='_btn entypo-trash product-remove'>Remove</button>";
            print "<div class='price product-total-price'>$0.00</div>";
          print "</div>";
        print "</li>";
    print "</ol>";

		}
	
	
    
?>

<div class="main">
  <!--<h1>Your orders</h1>
  <h2 class="sub-heading">Free shipping from $100!</h2>-->

  <!--<section class="shopping-cart">
    <ol class="ui-list shopping-cart--list" id="shopping-cart--list">

      <script id="shopping-cart--list-item-template" type="text/template">
        <li class="_grid shopping-cart--list-item">
          <div class="_column product-image">
            <img class="product-image--img" src="{{=img}}" alt="Item image" />
          </div>
          <div class="_column product-info">
            <h4 class="product-name">{{=name}}</h4>
            <p class="product-desc">{{=desc}}</p>
            <div class="price product-single-price">${{=price}}</div>
          </div>
          <div class="_column product-modifiers" data-product-price="{{=price}}">
            <div class="_grid">
              <button class="_btn _column product-subtract">&minus;</button>
              <div class="_column product-qty">0</div>
              <button class="_btn _column product-plus">&plus;</button>
            </div>
            <button class="_btn entypo-trash product-remove">Remove</button>
            <div class="price product-total-price">$0.00</div>
          </div>
        </li>
      </script>

    </ol>-->
    

    <footer class="_grid cart-totals">
      <div class="_column subtotal" id="subtotalCtr">
        <div class="cart-totals-key">Subtotal</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column taxes" id="taxesCtr">
        <div class="cart-totals-key">Taxes (6%)</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column checkout">
        <button onclick="document.location.href='Checkout.php';"class="_btn checkout-btn entypo-forward">Checkout</button>
      </div>
    </footer>

  </section>
</div>
</div>
   </body>
</html>