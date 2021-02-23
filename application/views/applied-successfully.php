<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Job Seeker | Job Apply Successfully</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/j.png" type="image/x-icon" >
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/common.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

    </head>
	
    <body>
	

		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav">

			<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>assets/img/logo4.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                           <li><a href="<?php echo base_url();?>home"><i class="fa fa-home"></i> Home</a></li>
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- Navigation End  -->
		    <!-- Main jumbotron for a primary marketing message or call to action -->
	<section class="inner-banner" style="background:#242c36 url(<?php echo base_url();?>assets/img/bg_1.jpg) no-repeat;">
		<div class="container">
			<div class="caption">
				<h2><?php echo $position_name;?></h2>
				<p><a href="<?php echo base_url();?>home/job_detail/<?php echo $job_id?>/<?php echo $company_id;?>" style="color: #fff"><?php echo $position_name;?></a> > <span>Applied Successfully</span></p>
			</div>
		</div>
	</section>
		
		<section class="login-wrapper">
			<div class="container">

			<div class="col-md-10 col-sm-8 col-md-offset-1">
				<div class="basic-information">
                   <div class="col-md-12 col-sm-12">
					<form>
						<div><i class="fa fa-thumbs-up" aria-hidden="true" style="    color: #427efc; font-size: 130px; margin-bottom: 45px;"></i></div>
						<h1 class="m-b-40">Your request has been sent <span  class="blue-color">Successfully</span></h1>
						<a href="<?php echo base_url();?>home" type="submit" class="btn brows-btn submit-form-btn apply1-job-btn">Back to home</a>
					</form>
					</div>
				</div>
			</div>

			</div>
		</section>
		
		<!-- footer start -->
		<footer>
			<div class="copy-right">
			 <p>copyright &copy; Hijjawi Tech - <?php echo date('Y');?> </p>
			</div>
		</footer>
		 
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>
</html>