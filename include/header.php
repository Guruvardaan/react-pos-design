<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Ghar Ghar Bazaar</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/logo.png">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css?v=5.6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <style>
    .loginsec input[type=text]:focus {
        border: 3px solid #7D7C7C;
      }
      .loginsec input[type=text]{
        border: 1px solid #000;
      }

      .mleft {
  transform: translate(-20%,-30%) !important;
 
}
.addchoosehtype li{
    padding:20px;
}

.addchoosehtype li a{
    background: rgb(247, 255, 249);
    padding: 6px 16px;
    border: 1px solid rgb(12, 131, 31);
    border-radius: 8px;
    box-shadow: rgba(28, 28, 28, 0.06) 0px 1px 4px;
    text-align: center;
    color: rgb(28, 28, 28);
    font-size: 12px;
    font-weight: 400;
    line-height: 16px;
    cursor: pointer;
}

.addchoosehtype li a:focus
{
    border: 2px solid rgb(12, 131, 31);
    box-shadow: rgba(28, 28, 28, 0.06) 0px 1px 1px;
}
.hVFgIr {
    position: relative;
    display: flex;
    --transform-translate-x: 0;
    --transform-translate-y: 0;
    --transform-rotate: 0;
    --transform-skew-x: 0;
    --transform-skew-y: 0;
    --transform-scale-x: 1;
    --transform-scale-y: 1;
    transform: translateX(var(--transform-translate-x)) translateY(var(--transform-translate-y)) rotate(var(--transform-rotate)) skewX(var(--transform-skew-x)) skewY(var(--transform-skew-y)) scaleX(var(--transform-scale-x)) scaleY(var(--transform-scale-y));
    width: 300%;
    left: -100%;
}
.flex-1 {
    flex: 1 1;
}


.mleft .modal-body{
  padding:0 !important;
}

.mleft  .modal-dialog .modal-content{
  padding:20px !important;
}

.right .modal-dialog,
.left .modal-dialog {
    transition: transform .25s ease-out;
    position: fixed;
    margin: auto;
    height: 100%;
}
.modal.right .modal-content,
.modal.left .modal-content {
    overflow-y: auto;
  	border-radius: 0;
  	border: none;
    height: 100%;
}
.right .modal-dialog {
    transform: translateX(50px);
    right: 0;
}
.left .modal-dialog {
    transform: translateX(-50px);
    left: 0;
}

.cart-btn{
    display: flex;
    cursor: pointer;
    padding: 10px 12px;
    background-color: rgb(12, 131, 31);
    -webkit-box-align: center;
    align-items: center;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box;
    
}
.cart-total{
    display: flex;
    flex: 1 1 0%;
    flex-direction: column;
    align-items: flex-start;
    color:#fff;
    font-size: 18px;
    font-weight: 500;
}
.cart-checkout{
    font-size: 18px;
    font-family: okra;
    font-weight: 500;
    color:#fff;
}

.dropdown-menu{
    width:300px;
    padding:15px;
    background:#353535;
}

.dropdown-menu li {
    padding:2px 0px 2px 0px;
}
.dropdown-menu li a{
    color:#fff;
}
.dropdown-menu ul li a{
    color:#000;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-menu .divider{
    position: relative;
    overflow: hidden;
    height: 2px;
    z-index: 9;
}
.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu>.dropdown-menu {
  background:rgba(238,238,238);
}

.dropdown-submenu>.dropdown-menu ul li a{
  color:#000;
}
.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}

    </style>

  </head>

<body>
 
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
    
        <div class="header-middle header-middle-ptb-1 d-none ">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        
                        <div id="l-sec">
                            <a class="location">
                            <h6>Delievery in 30 minutes</h6>
                             <p style="font-size:13px;"> C-37, 1st Floor Parag  <i className="fa fa-caret-down"></i></p>
                             </a>
                           
                        </div>
                        <div class="search-style-3">
                            <form action="#">
                                
                                <input id="search" type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Indiana</option>
                                            <option>Maryland</option>
                                            <option>Nevada</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="header-action-icon-2">
                                   
                                   <a href="#" class="loginmod"></i>Login</a>
                               
                               </div>
                               <div class="header-action-icon-2">
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg">
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0"></span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li><a href="profile.php"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
                                      
                                            <li><a href="index.php"><i class="fi fi-rs-sign-out mr-10"></i>Log out</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <div class="header-action-icon-2">
                                   
                                    <a href="#" class=" text-white " data-bs-toggle="modal" data-bs-target="#rightModal" style="border-radius:5px;background-color: rgb(12, 131, 31);font-size:13px;padding:15px 10px 15px 10px"><i class="fa fa-cart-shopping" style="color: #f5f5f5;"></i> My Cart</a>
                                
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                   
                    <div class="header-nav d-none d-lg-flex">
                    <div class="logo logo-width-1  ">
                        <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div>
                     <div class="main-categori-wrap d-none d-lg-block">
                        <div class="container">
                            <div class="row">
                            
                                <div class="dropdown">
                                <a id="dLabel" role="button"  data-bs-toggle="dropdown" class="btn btn-sm" data-bs-target="#" href="#">
                                            Shop by category <span class="fa fa-angle-down"></span>
                                        </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                
                                
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Dairy Product And Milk</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#" >Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Beverages</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Cake,Pastry And Waffle </a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Chocolate And Fruits</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Cleaning And Household</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Kitchen , Garden And pet</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Egg , Meat and Fish</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Baby Care</a>
                                            <ul class="dropdown-menu">
                                                
                                                <li class="dropdown-submenu">
                                                    <a href="#">Babby Oil</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Babby Oil</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Babby Oil</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Babby Oil</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                        <li><a href="#">Dabur Baby OIl</a></li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                    
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-right">
                        <div id="l-sec">
                            <a class="location">
                            <h6>Delievery in 30 minutes</h6>
                             <p style="font-size:13px;"> C-37, 1st Floor Parag  <i className="fa fa-caret-down"></i></p>
                             </a>
                           
                        </div>
                        <div class="search-style-3">
                            <form action="#">
                                 
                                <input id="marquee" type="text" >
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Indiana</option>
                                            <option>Maryland</option>
                                            <option>Nevada</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="header-action-icon-2">
                                   
                                   <a href="#" class="loginmod"></i>Login</a>
                               
                               </div>
                               <div class="header-action-icon-2">
                                    <a href="javascript:void(0)">
                                        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg">
                                    </a>
                                    <a href="javascript:void(0)"><span class="lable ml-0"></span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li><a href="profile.php"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
                                            <li><a href="profile.php"><i class="fi fi-rs-user mr-10"></i>Wallet</a></li>
                                            <li><a href="profile.php"><i class="fi fi-rs-user mr-10"></i>Order</a></li>
                                            <li><a href="index.php"><i class="fi fi-rs-sign-out mr-10"></i>Log out</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <div class="header-action-icon-2">
                                   
                                    <a href="#" class=" text-white " data-bs-toggle="modal" data-bs-target="#rightModal" style="border-radius:5px;background-color: rgb(12, 131, 31);font-size:13px;padding:15px 10px 15px 10px"><i class="fa fa-cart-shopping" style="color: #f5f5f5;"></i> My Cart</a>
                                
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>

                    </div>
                       <div class="header-action-icon-2 d-lg-none">
                                   
                                   <a href="#" class=" text-white " data-bs-toggle="modal" data-bs-target="#rightModal" style="border-radius:5px;background-color: rgb(12, 131, 31);font-size:13px;padding:15px 10px 15px 10px"><i class="fa fa-cart-shopping" style="color: #f5f5f5;"></i> My Cart</a>
                               
                       </div>
                  
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.php"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                </div>

                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
                
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-2 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="index.php">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                    <li><a href="index-5.html">Home 5</a></li>
                                    <li><a href="index-6.html">Home 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="products.php">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                            <li><a href="shop-product-vendor.html">Product – Vendor Infor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Invoice</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-invoice-1.html">Shop Invoice 1</a></li>
                                            <li><a href="shop-invoice-2.html">Shop Invoice 2</a></li>
                                            <li><a href="shop-invoice-3.html">Shop Invoice 3</a></li>
                                            <li><a href="shop-invoice-4.html">Shop Invoice 4</a></li>
                                            <li><a href="shop-invoice-5.html">Shop Invoice 5</a></li>
                                            <li><a href="shop-invoice-6.html">Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Vendors</a>
                                <ul class="dropdown">
                                    <li><a href="vendors-grid.html">Vendors Grid</a></li>
                                    <li><a href="vendors-list.html">Vendors List</a></li>
                                    <li><a href="vendor-details-1.html">Vendor Details 01</a></li>
                                    <li><a href="vendor-details-2.html">Vendor Details 02</a></li>
                                    <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                    <li><a href="vendor-guide.html">Vendor Guide</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="products.php">Dresses</a></li>
                                            <li><a href="products.php">Blouses & Shirts</a></li>
                                            <li><a href="products.php">Hoodies & Sweatshirts</a></li>
                                            <li><a href="products.php">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="products.php">Jackets</a></li>
                                            <li><a href="products.php">Casual Faux Leather</a></li>
                                            <li><a href="products.php">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="products.php">Gaming Laptops</a></li>
                                            <li><a href="products.php">Ultraslim Laptops</a></li>
                                            <li><a href="products.php">Tablets</a></li>
                                            <li><a href="products.php">Laptop Accessories</a></li>
                                            <li><a href="products.php">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-forgot-password.html">Forgot password</a></li>
                                    <li><a href="page-reset-password.html">Reset password</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt=""></a>
                </div>
                <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>
    <!--End header-->