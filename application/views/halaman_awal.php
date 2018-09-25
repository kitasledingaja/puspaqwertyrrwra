<!DOCTYPE HTML>
<html>
<head>
<title>Float Indonesia</title>
<link href="<?= base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="<?= base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Box  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="<?= base_url();?>assets/js/jquery.min.js"></script>

</head>
<body>
<!-- header -->
<div class="top-banner">
	 <div class="header">
		 <div class="container">
			 <div class="header-left">
			 	<div class="logo">
					 <h1><a href="index.html">Float Indonesia</a></h>
			  </div>
			  <div class="search">
					<from>
						 <input type="submit" value="">
						 <input type="text" value="" placeholder="Search...">					 
					 </from>
					</div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
						 <li><a href="<?= base_url('index.php/reviews/review'); ?>">Reviews</a></li>
						 <li><a href="<?= base_url('index.php/gallery/allgallery'); ?>">Gallery</a></li>
						 <li><a href="<?= base_url('index.php/about/aboutall'); ?>">About</a></li>
						 <li><a href="<?= base_url('index.php/Login');?>">Login</a></li>
				  </ul>
			 </div>	
	 <!-- script-for-menu -->
						<script>
							 $( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
								});
								});
						</script>

				<div class="clearfix"></div>
		 </div>
	 </div>
</div>
					<!-- /script-for-menu -->
				 <!-- <div class="social">							
						<a href="www.facebook.com/floatID"><i class="facebook"></i></a>
						<a href="www.twitter.com/FloatIndonesia"><i class="twitter"></i></a>
						<a href="www.youtube.com/channel/UCN6Qck3_tOH34WPcg0av0aA"><i class="pin"></i></a>	
				 </div>
				 <div class="search">
					 <form>
						 <input type="submit" value="">
						 <input type="text" value="" placeholder="Search...">					 
					 </form>
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 <div class="headr-right">
				 <div class="details">
					 <ul>
						 <li><a href="floatindonesia@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>floatindonesia@gmail.com</a></li>
						 <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0852-6403-0890</li>
					 </ul>
				 </div>
			 </div>
			 <div class="clearfix"></div> -->
		 </div>
	 </div>
	 <!--banner-info-->	
	 <!-- <div class="banner-info">
		  <div class="container">
			  <div class="logo">
					 <h1><a href="index.html">Float Indonesia</a></h1>
			  </div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
						 <li><a href="<?= base_url('index.php/reviews/review'); ?>">Reviews</a></li>
						 <li><a href="<?= base_url('index.php/gallery/allgallery'); ?>">Gallery</a></li>
						 <li><a href="<?= base_url('index.php/about/aboutall'); ?>">About</a></li>
						 <li><a href="<?= base_url('index.php/Login');?>">Login</a></li>
				  </ul>
			 </div>	
	 <!-- script-for-menu
						<script>
							 $( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
								});
								});
						</script>
					</script-for-menu
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div> -->
<!-- banner -->
	 <!-- Slider-starts-Here -->
	 <script src="<?= base_url();?>assets/js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3></h3>
							<p></p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>

<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="top-games">
			 <h3>Top Games</h3>
			 <span></span>
		 </div>
		 <div class="top-game-grids">
			 <ul id="flexiselDemo1">
				 <li>
					 <div class="game-grid">
						 <h4>Quiz Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="<?= base_url();?>assets/images/t1.jpg" class="img-responsive" alt=""/>
					 </div>	
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Enjoy Games</h4>
						 <p>Easy Game With Nice Graphic</p>
						 <img src="<?= base_url();?>assets/images/t3.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Arcade Games</h4>
						 <p>Easy Game With Nice Graphic</p>
						 <img src="<?= base_url();?>assets/images/t4.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>3D Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="<?= base_url();?>assets/images/t1.jpg" class="img-responsive" alt=""/>
					 </div>	
				 </li>				 				 	
			 </ul>
			 
			 <script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.flexisel.js"></script>	
		 </div>
	 </div>
</div>
<!-- latest -->
<!-- <div class="latest">
	 <div class="container">
		 <div class="latest-games"> -->
			<!--  <h3>Latest Games</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
					<?php  foreach ($data_artikel as $data) { ?>
				   <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="<?php echo base_url('assets/images/').$data->files;?>" width="150px"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		
					   		 <a href="#"><?= $data->judul; ?></a>
							 <p><?= $data->isi; ?></p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				   <?php } ?>
				    
				
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>              
<!-- poster -->
<div class="poster">
	 <div class="container">
		 <div class="poster-info">
			 <h3>Temukan Game-Game Menarik, Fresh dan Seru di Mainkan Hanya di Float Indonesia</h3>
			 <p>Kamu dapat menemukan game-game menarik buatan float.id di website ini. lihat reviewnya lalu download gamenya di Playstore. Game yang disediakan juga tak kalah seru loh dengan game-game asing lainnya. Yuk! cintai produk dalam negeri</p>
			 <a class="hvr-bounce-to-bottom" href="<?= base_url('index.php/reviews/review');?>">Read More</a>
		  <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- x-box -->
<div class="x-box">
	 <div class="container">	
		 <div class="x-box_sec">
			 <div class="col-md-7 x-box-left">
				 <h2>XBOX 360</h2>
				 <h3>Berbagai macam marchandise menarik ada di website float.id</h3>
				 <p>Kamu dapat menemukan marchandise menarik yang disediakan khusus untuk mu oleh Float.id. 
				 	berbagai macam marchandise menarik ada untukmu. kamu dapat memilih marchandise yang kamu sukai
				 lalu hubungi kontak person yang tersedia dan marhandise yang kamu inginkan bisa dibawa pulang.</p>
				<a class="hvr-bounce-to-top" href="<?= base_url('index.php/marchandise/index'); ?>">Read More</a>
			 </div>
			 <div class="col-md-5 x-box-right">
				 <img src="<?= base_url();?>assets/images/xbox.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>Float Indonesia merupakan Game Developer yang bergerak di Batam. memiliki misi membuat game layaknya Float yang memiliki cita rasa yang enak, segar dan disukai banyak orang.</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Racing</a></li>
					 <li><a href="#">Adventure</a></li>
					 <li><a href="#">Simulation</a></li>
					 <li><a href="#">Bike</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Laptop/Pc</a></li>
					 <li><a href="#">Smartphone</a></li>
					 <li><a href="#">Tablets</a></li>					 
					 <li><a href="#">XBOX ONE</a></li>
					 <li><a href="#">PSP</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a href="<?= base_url('index.php/about/aboutall'); ?>">Contact Us</a></li>
					 <li><a href="floatindonesia@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>floatindonesia@gmail.com</a></li>
					 <li><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0852-6403-0890</li>
					 <li><a href="#">Social Media</a></li>	
					 <li><a href="www.facebook.com/floatID"><i class="icon-facebook" aria-hidden="true">Facebok</span></a></li>	
					 <li><a href="www.youtube.com/channel/UCN6Qck3_tOH34WPcg0av0aA"><span class="glyphicon glyphicon-expand">Youtube</a></i>		 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2018 Float Indonesia. All rights reserved | Design by Float Indonesia</p>
	 </div>
</div>
<!---->
</body>
</html>