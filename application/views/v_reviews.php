<!DOCTYPE HTML>
<html>
<head>
<title>Reviews | Float Indonesia</title>
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
					 <h1><img src="<?= base_url();?>assets/images/logo-login.png"></h>
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
						 <li><a href="<?= base_url('index.php/gallery_all/viewgallery'); ?>">Gallery</a></li>
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
<!-- content -->
<div class="review">
	 <div class="container">
	 		<?php
				function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            	}
            ?>
		 <h2 >Reviews</h2>
		 <div class="review-md1">
		 	 <?php foreach ($data_artikel as $data) { ?> 
				 <div class="col-md-4 sed-md">
				 	 <div class=" col-1">
						 <a href="<?= base_url('index.php/lihatpage1/lihatisipage/'.$data->id_artikel);?>"><img class="img-responsive" src="<?php echo base_url('assets/images/').$data->files;?>" width="400px" alt=""></a>
					 	<h4><a href="<?= base_url('index.php/lihatpage1/lihatisipage/'.$data->id_artikel);?>"><?= $data->judul; ?></a></h4>
						<p><?php echo limit_words($data->isi,20);?></p>
					 </div>
				 </div>
				
		 <?php } ?>
				<div class="clearfix"> </div>
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