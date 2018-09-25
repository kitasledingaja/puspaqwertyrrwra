<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register | Float Indonesia </title>

	 <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  			<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
	content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon2.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url();?>assets/images/favicon2.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/responsive.css">

	<!--color css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/color/color-1.min.css" id="color"/>

</head>
<body>
	<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block">
								<div class="text-center">
									<img src="<?= base_url();?>assets/images/logo-login.png" alt="logo">
								</div>
								<h3 class="text-center txt-primary">Create an account </h3>
								<div class="row">
									<?php echo form_open('register/regis'); ?>
									<div class="col-md-12">
											<div class="md-input-wrapper">
												<input type="text" name="username" class="md-form-control md-valid" required="">
												<label>Username</label>
											</div>
											<div class="md-input-wrapper">
												<input type="email" name="email" class="md-form-control md-valid" required="">
												<label>Email</label>
											</div>
									<div class="md-input-wrapper">
										<input type="password" name="password" class="md-form-control md-valid" required="">
										<label>Password</label>
									</div>

								<div class="rkmd-checkbox checkbox-rotate checkbox-ripple b-none m-b-20">
									<label class="input-checkbox checkbox-primary">
										<input type="checkbox" id="checkbox">
										<span class="checkbox"></span>
									</label>
									<div class="captions">Remember Me</div>
								</div>
								<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
								</button>
								</div>
									<div class="row">
										<div class="col-xs-12 text-center">
											<span class="text-muted">Already have an account?</span>
											<a href="<?= base_url('index.php/Login');?>" class="f-w-600 p-l-5"> Sign In Here</a>

										</div>
									</div>

							<?php echo form_close(); ?>
							<!-- end of form -->
						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>

	<!-- Warning Section Starts -->
<!-- Older IE warning message -->
  <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <!-- Warning Section Ends -->


	<!-- Required Jqurey -->
	<script src="<?= base_url();?><?= base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>
	<!-- Required Fremwork -->
	<script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- waves effects.js -->
	<script src="<?= base_url();?>assets/plugins/Waves/waves.min.js"></script>
	<!--text js-->
	<script type="text/javascript" src="<?= base_url();?>assets/pages/elements.js"></script>


</body>
</html>
