<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Commerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}">
    
    <!-- CSS 
    ========================= -->
   

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">

</head>

<body>

    <!--header area start-->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
            
    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="support_info">
                            <p>Any Enquiry: <a href="tel:">+56985475235</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                               <li><a href="my-account.html"> My Account </a></li> 
                               <li><a href="/checkout"> Checkout </a></li> 
                            </ul>
                        </div> 
                        <div class="search_container">
                           <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </div> 
                        
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><img src="{{asset('frontend/assets/img/user.png')}}" alt=""></a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><img src="{{asset('frontend/assets/img/shopping-bag.png')}}" alt=""></a>
                                <span class="cart_quantity">2</span>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{asset('frontend/assets/img/s-product/product.jpg')}}" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="{{asset('frontend/assets/img/s-product/product2.jpg')}}" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>   
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="/checkout">Checkout</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/layout.product-details">product</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="/aboutus">About Us</a></li>
										<li><a href="/cart">cart</a></li>
										<li><a href="/checkout">checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="/blog">blog</a></li>
                                        <li><a href="/blog-details">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="login.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/contact"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@dropcart.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Email: <a href="mailto:">visual@dropcart.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                   <li><a href="my-account.html">Account</a></li> 
                                   <li><a href="/checkout">Checkout</a></li> 
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="index-2.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                   <form action="#">
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="#"><img src="{{asset('frontend/assets/img/user.png')}}" alt=""></a>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)"><img src="{{asset('frontend/assets/img/shopping-bag.png')}}" alt=""></a>
                                        <span class="cart_quantity">2</span>
                                        <!--mini cart-->
                                         <div class="mini_cart">
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="{{asset('frontend/assets/img/s-product/product.jpg')}}" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>    
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="{{asset('frontend/assets/img/s-product/product2.jpg')}}" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>   
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="/cart">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="/checkout">Checkout</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li><a href="/">home</a></li>
                                        <li><a href="/products">Product</a></li>
                                        
                                        <li><a class="active" href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="/aboutus">About Us</a></li>
                                                <li><a href="/cart">cart</a></li>
                                                <li><a href="/checkout">checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="/blog">blog</a></li>
                                                <li><a href="/blog-details">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
    <!--header area end-->

    @yield('content')
    
    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <p>We believe on providing best quality to our customers with proper discount. Buy anything you admire the most. We will provide you with best quality</p>
                            <p>Don't hesitate to add on a cart. Have a wonderful day!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">Delivery Information</a></li>
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="services.html">Terms & Conditions</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>My Account</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container newsletter">
                        <h3>Follow Us</h3>
                        <div class="footer_social_link">
                            <ul>
                                <li><a class="facebook" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="instagram" href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="rss" href="#" title="rss"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="subscribe_form">
                            <h3>Join Our Newsletter Now</h3>
                            <form id="mc-form" class="mc-form footer-newsletter" >
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address..." />
                                <button id="mc-submit">Subscribe!</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> <a href="templateshub.net">DropCart</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <a href="#"><img src="{{asset('frontend/assets/img/icon/payment.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
    <!--footer area end-->
<!-- JS
============================================ -->



<!-- Plugins JS -->
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>



</body>

<!--   03:22:07 GMT -->
</html>
 