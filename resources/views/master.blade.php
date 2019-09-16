<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kl-webmedia.com/demo/trendify/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 07:40:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset(' ')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery -->
<script src="source/js/jquery.min.js"></script>

    <title>2DK Fashion</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="source/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="source/css/font-awesome.css">
    <link rel="stylesheet" href="source/css/eleganticon.css">
	
	<!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="source/css/magnific-popup.css">
	
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="source/css/owl.carousel.css">
	
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="source/css/animate.css">
	
    <!-- SLIDER REVOLUTION -->
    <link rel="stylesheet" type="text/css" href="source/assets/plugins/rs-plugin/css/settings-ie8.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="source/assets/plugins/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" href="source/css/slider.css">
    
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="source/css/header.css">
    <link rel="stylesheet" href="source/css/footer.css">
	<link rel="stylesheet" href="source/style.css">
	<link rel="stylesheet" href="source/css/responsive.css">
	
	<!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,500,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	
	<!-- FAVICON -->
	<link rel="icon" href="source/img/favicon.ico">
	<link rel="apple-touch-icon" href="source/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="source/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="source/img/apple-touch-icon-114x114.png">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="source/js/html5shiv.min.js"></script>
      <script src="source/js/respond.min.js"></script>
    <![endif]-->
   
</head>
<style>
.fa-fb {
  padding: 10px;
  font-size: 20px;


  
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
</style>
<body class="home1">

    <!-- header -->
    <div class="header">
        @include('header')

        <div class="logo-part padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 search">
                        <form>
                            <input type="text" name="search" placeholder="Search for something" />
                            <button type="submit"><span class="arrow_right"></span></button>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                        <img src="source/img/2DK.png" alt="Trendify logo" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 cart-icon">
                        <div class="cart">
                            <a href="#">
                                <img alt="cart" src="source/img/cart.png">
                                <span>2</span>
                            </a>
                        
							<div class="cart-list hidden-xs">
								<h5 class="title">your shopping cart <span>(2 items)</span></h5>
								<div class="cart-item">
									<img class="img-responsive" alt="Single product" src="source/img/products/1.jpg">
									<span class="icon_close close-icon"></span>
									<div class="product-info">
										<h5>New Yorker Suit</h5>
										<div class="star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-full"></i></li>
											</ul>
										</div><br>
										<div class="price">
											<del> $399 </del> $259
										</div>
									</div>
								</div>
								
								<div class="cart-item">
									<img class="img-responsive" alt="Single product" src="source/img/products/1.jpg">
									<span class="icon_close close-icon"></span>
									<div class="product-info">
										<h5>New Yorker Suit</h5>
										<div class="star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-full"></i></li>
											</ul>
										</div><br>
										<div class="price">
											<del> $399 </del> $259
										</div>
									</div>
								</div>
								
								<div class="order-total">
									<h5 class="title">TOTAL ON YOUR CART<span class="amount">$166</span></h5>
								</div>
                                <a href="{{url('cart')}}" class="trendify-btn black-bordered">View Cart</a>
                                <!-- <form action="{{url('checkout')}}" method="POST" name="someForm">
                                {{csrf_field()}}
                                <a href="#" onclick="document.someForm.submit();" class="trendify-btn black-bordered">Checkout</a>
                            </form>      -->
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        

       @include('nav')

    </div>
    <!-- / header -->

    <!-- slider -->
    
    <!-- / slider -->

    <!-- content -->
    <div class="content">
    @yield('content')
    </div>
    <!-- / content -->

    <!-- footer -->
    <div class="footer">
     @include('footer')
    </div>
    <!-- / footer -->
	
	
	<!-- Bootstrap -->
    <script type="text/javascript" src="source/js/bootstrap.min.js"></script>
    <!-- jquery ui -->
    <script src="source/js/jquery-ui.js"></script>
    <!-- rev slider -->
    <script type="text/javascript" src="source/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="source/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- wow js-->
    <script type="text/javascript" src="source/js/wow.min.js"></script>  
    <!-- venobox js-->
    <script type="text/javascript" src="source/js/venobox.min.js"></script>
    <!-- mouse hover js-->
	<script src="source/js/jquery.directional-hover.js"></script>
    <!-- owl js -->
    <script src="source/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
    <script src="source/js/jquery.magnific-popup.min.js"></script>
	<!-- smoothscroll -->
    <script src="source/js/smoothscroll.js"></script>
	<!-- settings -->
    <script type="text/javascript" src="source/js/setting.js"></script>
    <script>
    $('#checkout').click(function(e) {
        var $this = $(this);
        e.preventDefault();
        $.post('checkout', function() {
            window.location = $this.attr('href');
        });
        });
    
    </script>
</body>

<!-- Mirrored from kl-webmedia.com/demo/trendify/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 07:43:33 GMT -->
</html>