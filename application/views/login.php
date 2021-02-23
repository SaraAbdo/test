<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Job Seeker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/j.png" type="image/x-icon" >
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">
		
		<!-- Style--> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/common.css">
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
       <link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome/css/all.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/fontawesome.css">

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
					<a class="navbar-brand" href="<?php echo base_url();?>home"><h2><span class="blue-color">Job</span> Apply</h1> </a>
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
		
	    <div id="page-container">
   <div id="content-wrap">
     <!-- all other page content -->
 
			<section >
				<div class="container">
					<div class="col-lg-2 col-md-2 col-sm-2"></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="section_design">
							<?php if ($this->session->flashdata('login_failed')): ?>
								<div class="alert alert-danger" role="alert">
								  <?php echo $this->session->flashdata('login_failed'); ?>
								</div>
							<?php endif; ?>
							<form enctype="multipart/form-data" id="submitForm" class=" form-horizontal">

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="name" class="form-label">User Name</label>
											    <input onchange="validate_username()" name="name" type="text" id="name">
											    <!-- input error_message -->
											    <div style="height:25px;">
				                                    <label id="name_error_message" style="color:red " hidden=""></label>
				                                </div>
			                            </div>    
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="password" class="form-label">Password</label>
											    <input onchange="validate_password()" name="password" type="password" id="password" maxlength = "10">
											    <!-- input error_message -->
											    <div style="height:25px;">
				                                    <label id="password_error_message" style="color:red " hidden=""></label>
				                                </div>
			                            </div>
									</div>
								</div>
								<!-- image upload -->
								<div class="row" >
								    <div class="col-lg-12 col-md-12 col-sm-12">
								    	<div class="form-group">
											<label for="number" class="form-label">image</label>
										    <input type="file" name="image_file" accept=".jpg" id="finput">
										</div>    
								     </div>
						        </div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
										  	<button type="submit" name="login-submit"  id="login-submit" class="btn btn-primary">login</button>
										</div>
									</div>
								</div>	
							 </form>
					    </div>
				    </div>
				    <div class="col-lg-2 col-md-2 col-sm-2"></div>
				</div>
			</section>




  </div>
		<!-- footer start -->
			<footer>
				<div class="copy-right">
				 <p>copyright &copy; Hijjawi Tech - <?php echo date('Y');?> </p>
				</div>
			</footer>
 </div>
		 
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
		<!-- <script src="<?php echo base_url();?>assets/js/bootsnav.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
		<script src="<?php echo base_url();?>assets/js/count.js"></script>

		<script type="text/javascript">

			$('#submitForm').submit(function(e){
               	e.preventDefault();

               	 var val_name =  validate_username();
                 var val_password = validate_password();

					if(val_name && val_password)
					{
						
						$.ajax({
          
				             url:"/test/home/user_login",
				             type:"post",
				             data:new FormData(this),
				             processData:false,
				             contentType:false,
				             cache:false,
				             async:false,
				             
				              success: function(data){
				                if(data=='true'){
								    url = "/test/home/";
								    window.location.replace(url);
				                } 
				              }
			            });
					}
             });   	 

			function validate_username()
			{
				var valid= true;
				var value= $('#name').val();
				if (!value) {
					document.getElementById("name").focus();
					$('#name_error_message').text("*Please enter the name");
					$('#name_error_message').removeAttr('hidden');
					valid = false;
				} else {
					if (valid) {
						$('#name_error_message').text("");
						$('#name_error_message').attr("hidden", "hidden");
					}
				}
				return valid;

			}

			function validate_password()
			{
				var valid= true;
				var value= $('#password').val();
				if (!value) {
					document.getElementById("password").focus();
					$('#password_error_message').text("*Please enter the password");
					$('#password_error_message').removeAttr('hidden');
					valid = false;
				} else {
					if (valid) {
						$('#password_error_message').text("");
						$('#password_error_message').attr("hidden", "hidden");
					}
				}
				return valid;

			}
	    
		</script>

	
    </body>
</html>
