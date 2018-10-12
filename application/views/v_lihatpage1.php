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
					 <h1><img src="<?= base_url();?>assets/images/logo-login.png"></h1>
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
<!---->
<div class="blog">
		<div class="container">
			<div class="col-md-7 blog-left" >
				<div class="blog-info">
					<?php foreach ($data_artikel as $data) { ?>
					<div class="blog-info-text">
						<div class="blog-img">
							<div class="latest-games">
							<h3><?= $data->judul; ?></h3>
						</div>
							<img src="<?php echo base_url('assets/images/').$data->files;?>" width="100px"/>
						</div>						
						<p class="snglp"><?= $data->isi; ?></p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>						
					</div>
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#"><?= $data->judul; ?></a> </li>
							<li><span class="clndr"></span><?= $data->artikel_tanggal; ?></li>
							<li><span class="admin"></span>Admin</a></li>
						</ul>
					</div>
					<?php } ?>
					<div class="response">
						<div class="media response-info">
							<div class="media-left response-text-left">
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">	
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category blog-ctgry">
					<div class="list-group">
						<div class="list-group-item"><h4>Top Games</h4></a>
						<a href="single.html" class="list-group-item">Bisa Jadi</a>
						<a href="single.html" class="list-group-item">Jumping Animals</a>
						<a href="single.html" class="list-group-item">Gongong In the sky</a>
					</div>
				</div>	
				<!-- <div class="recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="<?= base_url();?>assets/images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<label>March 5, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div> -->
						<!-- <div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="single.html"> <img src="<?= base_url();?>assets/images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<label>March 1, 2015</label>
							<h5><a href="single.html">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div> -->
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>				
			</div>
			<div class="clearfix"> </div>
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
					 <li><a href="#">Pc</a></li>
					 <li><a href="#">Ps4</a></li>
					 <li><a href="#">XBOX 360</a></li>					 
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
					 <li><a href="#">Terms & Conditions</a></li>					 
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