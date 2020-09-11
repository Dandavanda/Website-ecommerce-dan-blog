<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AyoSehat.com</title>
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/font-awesome.min.css" rel="stylesheet">
    <link href="template/css/prettyPhoto.css" rel="stylesheet">
    <link href="template/css/price-range.css" rel="stylesheet">
    <link href="template/css/animate.css" rel="stylesheet">
	<link href="template/css/main.css" rel="stylesheet">
	<link href="template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="template/js/html5shiv.js"></script>
    <script src="template/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->

	
	
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a class="navbar-brand" href="/" style=" color: #d10f0f;"><h3>AyoSehat.com</h3></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/Checkout_list"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="/keranjang"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
								{{--  <li>Hai {{Auth::user()->name}}!</li>  --}}
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
								<li><a href="/welcome" class="active">Home</a></li>
								<li><a href="/awal">Blog</a></li>
								<li><a href="/confirm">Confirm</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Nama Produk</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

                        <?php $total = 0; ?>
                        @foreach($keranjang as $krj)
						<tr>
							<td class="cart_product">
								<a href=""><img src="../data_file/{{$krj->gambar}}" alt="" width="150"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$krj->nama_produk}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>Rp. {{$krj->harga}}</p>
							</td>
							<td class="cart_quantity">
								{{$krj->jumlah}}
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. {{$krj->harga * $krj->jumlah}} </p>
							</td>
							
						</tr>
                        <?php $total += ($krj->jumlah * $krj->harga) ?>
                       @endforeach 
					</tbody>
				</table>
			</div>
		</div>
	</section> 

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>Rp {{$total}} </span></li>
						</ul>
							<a class="btn btn-default check_out" href="/Checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="template/js/jquery.js"></script>
	<script src="template/js/bootstrap.min.js"></script>
	<script src="template/js/jquery.scrollUp.min.js"></script>
    <script src="template/js/jquery.prettyPhoto.js"></script>
    <script src="template/js/main.js"></script>
</body>
</html>