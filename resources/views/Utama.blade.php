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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>AyoSehat.com</h1>
									<h2>Cari Berbagai Obat Asli dengan Lebih Mudah</h2>
									<p>Dapatkan Berbagai diskon di AyoSehat.com</p>
								</div>
								<div class="col-sm-6">
									<img src="new.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">

									<h1>Persiapan NEW NORMAL</h1>
									<h2>Semua harus siap menghadapi new normal</h2>
									<p>Kehidupan mulai normal kembali, temukan berbagai tips dan kebutuhan yang harus kamu punya disini.</p>
									
									
								</div>
								<div class="col-sm-6">
									<img src="new.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1>PESTA DISKON SAMBUT <span>NEW NORMAL</span></h1>
									<h2>BERBAGAI PRODUK KESEHATAN</h2>
									<p>HATI AMAN, KELUARGA AMAN DAN NYAMAN</p>
									<a href="#belanja"><button type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="iklan.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						{{--  <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">  --}}
							
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="shipping text-center"><!--shipping-->
							<img src="template/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items" id="belanja"><!--features_items-->
						<h2 class="title text-center">Produk Kesehatan</h2>

                        @foreach($barang ?? '' as $brng)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="data_file/{{ $brng->gambar }}" alt="" />
											<h2>Rp {{ $brng->harga }}</h2>
											<p>{{ $brng->nama_produk }}</p>

											@if (Auth::user())
												
												<button data-toggle="modal" data-target="#myModal"  data-id="{{$brng->id}}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											@endif 

										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp {{ $brng->harga }}</h2>
												<p>{{ $brng->nama_produk }}</p>

												@if (Auth::user())
												<button data-toggle="modal" data-target="#myModal"  data-id="{{$brng->id}}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												@endif

											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
                        @endforeach
						
						
					</div><!--features_items-->
					
				
					
				</div>
			</div>
		</div>
	</section>
	
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

	<!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog">
             <form action="/AddCart" method="post">
             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Masukan Jumlah</h4>
               </div>
               <div class="modal-body">
                 <input type="hidden" id="id_barang" class="id_barang" name="id_barang" value="3487">
                 <div class="form-group">
                   <label for="exampleInputEmail1">Jumlah Beli</label>
				    @csrf
                   <input type="text" class="form-control " id="jumlah" name="jumlah" placeholder="Jumlah Beli">
                 </div>
               </div>
               <div class="modal-footer">
                 <button type="submit" class="btn btn-default">Beli</button>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </form>
           </div>
         </div>

        </div>
	

  
    <script src="template/js/jquery.js"></script>
	<script src="template/js/bootstrap.min.js"></script>
	<script src="template/js/jquery.scrollUp.min.js"></script>
	<script src="template/js/price-range.js"></script>
    <script src="template/js/jquery.prettyPhoto.js"></script>
    <script src="template/js/main.js"></script>

	<script type="text/javascript">
		$(".jumlah").click(function() {
		$(".id_barang").val($(this).attr('data-id'));
		});

	</script>
</body>
</html>