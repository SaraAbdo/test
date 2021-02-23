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
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/common.css">
       <!--  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"> -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
       <link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome/css/all.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/fontawesome.css">


       <style type="text/css">
       	.my_dropdown {
		      background-color: #3a3d40;
		    width: 225px;
		    position: absolute;
		    right: -87px;
		    top: 64px;
		    border-top: 6px solid #157efb;
		}

		.my_dropdown_item {
		      width: 100%;
		    padding-left: 20px;
		    display: block;
		    color: #ffffff;
		    line-height: 40px;
		    border-bottom: 1px solid #474b4e;		
		}

		.my_dropdown_item:hover {
		  color: white;
		  background-color: #222;
		}

		#dropdown_title {
		  cursor: pointer;
		}

		@media (max-width: 680px) {
		  .my_dropdown {
		    position: relative;
		    right: 6px;
		    width: 100%;
		  }
		  #dropdown_title {
		    pointer-events: none;
		  }
		}

       </style>

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
						<!-- <a class="navbar-brand" href="<?php //echo base_url();?>home"><img src="<?php //echo base_url();?>assets/img/logo4.png" class="logo" alt=""></a>-->
				</div> 
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="<?php echo base_url();?>home"><i class="fa fa-home"></i> Home</a></li> 
							<li><a href="<?php echo base_url();?>home/logout"><i class="fas fa-sign-out-alt"></i> logout</a></li> 
							<li><?php echo "Welcome ". $this->session->userdata('name') ?></li>
							<!-- dropdown menu -->
							<li><a class="dropdown" id="dropdown_title" target="_self"><span><i class="fas fa-angle-down"></i></span> Performance</a></li>
							<div id="my_dropdown" class="my_dropdown" hidden="hidden" >
				               <a class="my_dropdown_item" href="<?php echo base_url();?>Performance" target="_self"><span><i class="fas fa-tachometer-alt"></i></span>  My Performance</a>
				               <a class="my_dropdown_item" href="<?php echo base_url();?>evaluate_employee_team" target="_self"><span><i class="fas fa-users"></i></span>  Evaluate Team </a>
				               <a class="my_dropdown_item" href="<?php echo base_url();?>evaluate_my_self" target="_self"><span><i class="fas fa-user"></i></span>  Evaluate My Self</a>
				            </div>
				            <!-- dropdown menu -->
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- Navigation End  -->



	    <!-- Main jumbotron for a primary marketing message or call to action -->
		<section class="inner-banner" style="background:#242c36;">
			<!-- <section class="inner-banner" style="background:#242c36 url(<?php echo base_url();?>assets/img/bg_1.jpg) no-repeat;"> -->
			<div class="container">
				<div class="caption">
					<h2>Home page</h2>
					<!-- <p><a href="<?php //echo base_url();?>home/job_detail/<?php //echo $job_id?>/<?php //echo $company_id;?>" style="color: #fff"><?php //echo $position_name;?></a> > <span>Job Apply</span></p> -->
				</div>
			</div>
		</section>
		
		<section >
			<div class="container">
				<div class="section_design">	
					<div class="row" >
						<div class="col-lg-12 col-md-12 col-sm-12">

							  <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
							    <label for="name" class="form-label">Name</label>
							    <input onchange="validate_name()" type="text" class="form-control" id="name">
							    <!-- input error_message -->
							    <div style="height:25px;">
                                    <label id="name_error_message" style="color:red " hidden=""></label>
                                </div>
							  </div>


							  <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
							    <label for="number" class="form-label">Number</label>
							    <input onchange="validate_number()" type="text" class="form-control" id="number">
							    <!-- input error_message -->
							    <div style="height:25px;">
                                    <label id="number_error_message" style="color:red " hidden=""></label>
                                </div>
							  </div>
						</div>	 
					</div>	 
					
                    <div class="row" >
					    <div class="col-lg-12 col-md-12 col-sm-12">
							<button onclick="add_new_person()" class="btn btn-primary">Submit</button>
					     </div>
				       
			        </div>
			    </div>
			</div>
		</section>


		<section>
			<div class="container">
				<div class="section_design">	
						
					<div class="row" >
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="table_name">Person Information</div>
							<table class="table table-bordered border-primary table-striped table-hover">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Name</th>
							      <th scope="col">Number</th>
							      <th scope="col">Handle</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php foreach($persons as $person):?>
							    <tr>
							      <th scope="row">1</th>
							      <td><?php echo $person->name;?></td>
							      <td><?php echo $person->number;?></td>
							      <td>
							      	<span onclick="delete_person('<?php echo $person->id;?>')" style="background: red; color: white; padding: 5px; margin-left:10px "><i class="fas fa-trash-alt"></i></span>
							      	<span onclick="show_edit_modal(); get_info('<?php echo $person->id;?>','<?php echo $person->name;?>','<?php echo $person->number;?>')" style="background: green; color: white; padding: 5px; margin-left:10px "><i class="fas fa-edit"></i></span>
							      	 </td>
							    </tr>
							    <?php endforeach;  ?>
							    

							  </tbody>
							</table>
						</div>
					</div>
				</div>
	
		</section>

<!-- =========================================================================================================== -->
        <section>
			<div class="container">
				<div class="section_design">	
						
					<div class="row" >
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="table_name">Person book</div>
							<table class="table table-bordered border-primary table-striped table-hover">
							  <thead>
							    <tr>
							      <th scope="col">Name</th>
							      <th scope="col">Book</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php foreach($person_books['all_persons'] as $person):?>
							    <tr>
							      <td><?php echo $person['name'];?></td>
							      <td><?php echo $person['book_name'];?></td>
							    </tr>
							    <?php endforeach;  ?>
							    

							  </tbody>
							</table>
						</div>
					</div>
				</div>
	
		</section>

		

		<!-- footer start -->
		<footer>
			<div class="copy-right">
			 <p>copyright &copy; hijjawi - <?php echo date('Y');?> </p>
			</div>
		</footer>
		 
		  <!-- Pop up for edit personal question to the form  --> 
      <div class="modal fade cancel-modal" id="warningModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog" style="padding-top: 7%;" >
            <div class="modal-content">
               <div class="modal-header" align="center">
                  <!-- <img class="img-circle" id="img_logo" src="<?php //echo base_url();?>assets/images/edit_question.png" width="100px" height="100px" > -->
                  Edit
               </div>
               <div class="form-group row">
                  <div class="col-sm-12" style="padding: 0px 30px;">
                     <!-- <textarea type="text" rows="3"  id="edit-question" class="form-control " name="question" onchange="validate_question()" onkeyup="validate_question()"></textarea> -->
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="edit_name">

                     <label for="number" class="form-label">Number</label>
                     <input  type="text" class="form-control" id="edit_number">

                     <div class="err-div">
                        <label id="validate_question_error1" class="input-err" hidden=""></label>
                     </div>
                  </div>
               </div>
               <div class="yes-btn-div">
                  <button onclick="update_person()" class=" modal_btn">Edit</button>
                  <button type="submit" data-dismiss="modal" name="cancel" id="cancel" class="cancel_btn">Cancel</button>
               </div>
            </div>
         </div>
      </div>

      <div  hidden="hidden" id="edit_id"></div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
		<script src="<?php echo base_url();?>assets/js/count.js"></script>

		<script type="text/javascript">

			function validate_name()
			{
				var valid= true;
				var value= $('#name').val();
				if (!value) {
					document.getElementById("name").focus();
					$('#name_error_message').text("*Please select the name");
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

			function validate_number()
			{
				var valid= true;
				var value= $('#number').val();
				if (!value) {
					document.getElementById("number").focus();
					$('#number_error_message').text("*Please select the number");
					$('#number_error_message').removeAttr('hidden');
					valid = false;
				} else {
					if (valid) {
						$('#number_error_message').text("");
						$('#number_error_message').attr("hidden", "hidden");
					}
				}
				return valid;

			}


	function add_new_person()
			{
				    var val_name =  validate_name();
                    var val_number = validate_number();
				    var name= $('#name').val();
					var number= $('#number').val();

					var arguments = 
					{
						"name" : name,
						"number" : number
					};
					if(val_name && val_number)
					{
						
						$.ajax({
          
			             url:"/test/Home/add_new_person",
			             type:"POST",
			             dataType:'json',
			             data:{"name":name,"number":number},
			             
			              success: function(data){
			                if(data.flag==1){
									url = "/test/home/";
									window.location.replace(url);

			               } 
			           }
			         });
					}
					
					
			}

	function delete_person(id)
	{
		$.ajax({
          
			    url:"/test/home/delete_person",
			    type:"POST",
			    dataType:'json',
			    data:{"id":id},
			             
			    success: function(data){
			    if(data.flag==1){
					url = "/test/home/";
					window.location.replace(url);
			    } 
			   }
	    });
	}

	function show_edit_modal(){
         $('#warningModal3').modal('show');
      }		
			
	function get_info(id,name,number){
		//div
		 $('#edit_id').html(id);
		 //input field
		 document.getElementById("edit_name").value = name;
		 document.getElementById("edit_number").value = number;
         
	}

	function update_person()
	{
		var name= $('#edit_name').val();
		var number= $('#edit_number').val();
		var id=document.getElementById("edit_id").textContent;

		if (name==="" || number==="") {
			// $('#warningModal2').modal('hide');
			alert("Fill the empty fields");
		}
		else
		{
			$.ajax({
          
				    url:"/test/home/update_person",
				    type:"POST",
				    dataType:'json',
				    data:{"name":name,"number":number,"id":id},
				             
				    success: function(data){
				    if(data.flag==1){
						url = "/test/home/";
						window.location.replace(url);
				    } 
				   }
		    });
		}

		
	}		


	    
		</script>



		<script type="text/javascript">
			  // dropdown sliding
         $(document).ready(function(){
         
         
         $('#dropdown_title').click(
         function(){
         
           $('#my_dropdown').slideToggle(300);
         }
         );
         $('.nav-btn').click(  function(){
         
           $('#my_dropdown').slideDown(300);
         });
         

         });
		</script>



		
		
    </body>
</html>
