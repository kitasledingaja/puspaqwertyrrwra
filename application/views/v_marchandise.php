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
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!-- content -->
<div class="review">
	 <div class="container">
		 <h2 >Daftar Merchandise</h2>
		 <?php
	       foreach ($produk as $row) {
         ?>
		 <div class="review-row">
				 <div class="col-lg-4 col-md-5 sed-md">
              <div class="col-1">
              <form method="post" action="<?php echo base_url();?>marchandise/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$row['picture']; ?>"/></a>
                <div class="col-1">
                    <h4><a><?php echo $row['product'];?></a></h4>
                  <h5>Rp. <?php echo number_format($row['price'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $row['desc'];?></p>
                </div>
                  <a href="<?= base_url('index.php/marchandise/detail_merch/');?><?php echo $row['id_merchandise'];?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-search"></i> Detail</a> 
                  <input type="hidden" name="id_merchandise" value="<?php echo $row['id_merchandise']; ?>" />
                  <input type="hidden" name="product" value="<?php echo $row['product']; ?>" />
                  <input type="hidden" name="desc" value="<?php echo $row['desc']; ?>" />
                  <input type="hidden" name="price" value="<?php echo $row['price']; ?>" />
                  <input type="hidden" name="picture" value="<?php echo $row['picture']; ?>" />
                </div>
                </form>
              </div>
            </div>
             <?php
				}
			 ?>
				</div>
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
</body>
</html>