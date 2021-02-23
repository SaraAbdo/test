function validate_fname()
{
	var valid_fname=true;
	var fname= $('#fname').val();
	if( !fname)
	{
	     document.getElementById("fname").focus();
		$('#fname_error_message').text("*Please enter your first name");
		$('#fname_error_message').removeAttr('hidden');
		valid_fname=false;
	}
	else if (fname.length > 50) 
		{	
				document.getElementById("fname").focus();
				$('#fname_error_message').text("*The length of the first name must be less than 50 characters");
				$('#fname_error_message').removeAttr('hidden');
				valid_fname=false;
		}
	else
	{
		if (valid_fname)
			{
				$('#fname_error_message').text("");
				$('#fname_error_message').attr("hidden","hidden");
			}	
	}
	return valid_fname;
}

function validate_lname()
{
	var valid_lname=true;
	var lname= $('#lname').val();
	if( !lname)
	{
	     document.getElementById("lname").focus();
		$('#lname_error_message').text("*Please enter your last name");
		$('#lname_error_message').removeAttr('hidden');
		valid_lname=false;
	}
	else if (lname.length > 50) 
		{	
				document.getElementById("lname").focus();
				$('#lname_error_message').text("*The length of the last name must be less than 50 characters");
				$('#lname_error_message').removeAttr('hidden');
				valid_lname=false;
		}
	else
	{
		if (valid_lname)
			{
				$('#lname_error_message').text("");
				$('#lname_error_message').attr("hidden","hidden");
			}	
	}
	return valid_lname;
}

function validate_city()
{
	var valid_city=true;
	var city= $('#city').val();
	if( !city)
	{
	     document.getElementById("city").focus();
		$('#city_error_message').text("*Please enter your city");
		$('#city_error_message').removeAttr('hidden');
		valid_city=false;
	}
	else if (city.length > 40) 
		{	
				document.getElementById("city").focus();
				$('#city_error_message').text("*The length of the last name must be less than 50 characters");
				$('#city_error_message').removeAttr('hidden');
				valid_city=false;
		}
	else
	{
		if (valid_city)
			{
				$('#city_error_message').text("");
				$('#city_error_message').attr("hidden","hidden");
			}	
	}
	return valid_city;
}

function validate_career_level()
{
	var valid_career_level=true;
	var career_level= $('#career_level').val();
	if( !career_level)
	{
	     document.getElementById("career_level").focus();
		$('#career_level_error_message').text("*Please select your career level");
		$('#career_level_error_message').removeAttr('hidden');
		valid_career_level=false;
	}
	else
	{
		if (valid_career_level)
			{
				$('#career_level_error_message').text("");
				$('#career_level_error_message').attr("hidden","hidden");
			}	
	}
	return valid_career_level;
}

function validate_expernice_year()
{
	var valid_expernice_year=true;
	var expernice_year= $('#expernice_year').val();
	if( !expernice_year)
	{
	     document.getElementById("expernice_year").focus();
		$('#expernice_year_error_message').text("*Please select your expernice year");
		$('#expernice_year_error_message').removeAttr('hidden');
		valid_expernice_year=false;
	}
	else
	{
		if (valid_expernice_year)
			{
				$('#expernice_year_error_message').text("");
				$('#expernice_year_error_message').attr("hidden","hidden");
			}	
	}
	return valid_expernice_year;
}

function validate_university()
{
	var valid_university=true;
	var university= $('#university').val();
	if( !university)
	{
	     document.getElementById("university").focus();
		$('#university_error_message').text("*Please enter your university");
		$('#university_error_message').removeAttr('hidden');
		valid_university=false;
	}
	else
	{
		if (valid_university)
			{
				$('#university_error_message').text("");
				$('#university_error_message').attr("hidden","hidden");
			}	
	}
	return valid_university;
}

function validate_major()
{
	var valid_major=true;
	var major= $('#major').val();
	if( !major)
	{
	     document.getElementById("major").focus();
		$('#major_error_message').text("*Please enter your major");
		$('#major_error_message').removeAttr('hidden');
		valid_major=false;
	}
	else
	{
		if (valid_major)
			{
				$('#major_error_message').text("");
				$('#major_error_message').attr("hidden","hidden");
			}	
	}
	return valid_major;
}

function validate_gpa()
{
	var valid_gpa=true;
	var gpa= $('#gpa').val();
	if( !gpa)
	{
	     document.getElementById("gpa").focus();
		$('#gpa_error_message').text("*Please enter your GPA");
		$('#gpa_error_message').removeAttr('hidden');
		valid_gpa=false;
	}
	else
	{
		if (valid_gpa)
			{
				$('#gpa_error_message').text("");
				$('#gpa_error_message').attr("hidden","hidden");
			}	
	}
	return valid_gpa;
}
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate_prev_job_title()
{
	var valid_prev_job_title=true;
	var prev_job_title= $('#prev_job_title').val();
	if( !prev_job_title)
	{
	     document.getElementById("prev_job_title").focus();
		$('#prev_job_title_error_message').text("*Please enter your previous job title");
		$('#prev_job_title_error_message').removeAttr('hidden');
		valid_prev_job_title=false;
	}
	else
	{
		if (valid_prev_job_title)
			{
				$('#prev_job_title_error_message').text("");
				$('#prev_job_title_error_message').attr("hidden","hidden");
			}	
	}
	return valid_prev_job_title;
}

function validate_summary()
{
	var valid_summary=true;
	var summary= $('#summary').val();
	if( !summary)
	{
	     document.getElementById("summary").focus();
		$('#summary_error_message').text("*Please enter your summary");
		$('#summary_error_message').removeAttr('hidden');
		valid_summary=false;
	}
	else
	{
		if (valid_summary)
			{
				$('#summary_error_message').text("");
				$('#summary_error_message').attr("hidden","hidden");
			}	
	}
	return valid_summary;
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate_email(){
	var valid_email=true;
	var email= $('#email').val();
	if( !email)
	{
	     document.getElementById("email").focus();
		$('#email_error_message').text("*Please enter your email");
		$('#email_error_message').removeAttr('hidden');
		valid_email=false;
	}
	else if (email.length > 1) 
		{	
			 if (validateEmail(email)) {
			 	$('#email_error_message').text("");
				$('#email_error_message').attr("hidden","hidden");
				valid_email=true;
			}else{
				document.getElementById("email").focus();
		        $('#email_error_message').text("*Please enter valid email");
		        $('#email_error_message').removeAttr('hidden');
		        valid_email=false;
			}	
		}
	else
	{
		if (valid_email)
			{
				$('#email_error_message').text("");
				$('#email_error_message').attr("hidden","hidden");
			}	
	}
	return valid_email;
}

function phonenumber(inputtxt) {
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(inputtxt.match(phoneno)) {
    return true;
  }
  else {
    return false;
  }
}

function validate_phone_number(){
	var valid_phone_number=true;
	var phone_number= $('#phone-number').val();
	if( !phone_number)
	{
	     document.getElementById("phone-number").focus();
		$('#phone_number_error_message').text("*Please enter your phone number");
		$('#phone_number_error_message').removeAttr('hidden');
		valid_phone_number=false;

	}else if(isNaN(phone_number)){
		        document.getElementById("phone-number").focus();
		        $('#phone_number_error_message').text("*You must enter a number");
		        $('#phone_number_error_message').removeAttr('hidden');
		        valid_phone_number=false;

			
	}else if (phone_number.length <9 && phone_number.length >20) 
		{	

                document.getElementById("phone-number").focus();
		        $('#phone_number_error_message').text("*Please enter valid phone number");
		        $('#phone_number_error_message').removeAttr('hidden');
		        valid_phone_number=false;	
		}
 
	else
	{
		if (valid_phone_number)
			{
				$('#phone_number_error_message').text("");
				$('#phone_number_error_message').attr("hidden","hidden");
			}	
	}
	return valid_phone_number;
}

function validate_file()
{	
	
	flag = true;
	var imgVal= $('#finput').val();
	if(imgVal=='') 
        {
        	$('#cv_file_error_message').text("*Please choose a CV file");
			$('#cv_file_error_message').removeAttr('hidden');
			flag = false;
        }
    else
    {
    	var size = document.getElementById('finput').files[0].size;
    	if(size > 10000000) 
    	{
			$('#cv_file_error_message').text("*Your CV file exceed the maximun allowed size 10 MB");
			$('#cv_file_error_message').removeAttr('hidden');
			flag = false;
    	}else{
    		    $('#cv_file_error_message').text("");
				$('#cv_file_error_message').attr("hidden","hidden");
    	}
    	
    }

    return flag;
}

function apply_job(){
	    var valid_fname = validate_fname();
	    var valid_lname = validate_lname();
	    var valid_email = validate_email();
	    var valid_phone_number = validate_phone_number();
	    var valid_cv_file = validate_file();
	    var valid_city=validate_city();
	    var valid_career_level =validate_career_level();
	    var valid_university =validate_university();
		var valid_major = validate_major();
		var valid_gpa =validate_gpa();
		var valid_expernice_year=validate_expernice_year();
		var valid_prev_job_title=validate_prev_job_title();
		var valid_summary=validate_summary();
	    

	 if(valid_city && valid_career_level && valid_fname && valid_lname && valid_email && valid_phone_number && valid_cv_file && valid_university && valid_major && valid_gpa && valid_expernice_year && valid_prev_job_title && valid_summary){
	    var company_id = document.getElementById("company_id").textContent;
		var job_id = document.getElementById("job_id").textContent;
		var ids=job_id+"/"+company_id ;
		var fname= $('#fname').val();
		var lname= $('#lname').val();
        var city= $('#city').val();
        var career_level= $('#career_level').val();
        var email= $('#email').val();
        var phone_number= $('#phone-number').val();
        var cvVal= $('#image_file').val();
        var valid_prev_job_title= $('#prev_job_title').val();
        var valid_expernice_year= $('#expernice_year').val();
        var valid_summary=$('#summary').val();

		var form = $('form')[0]; // You need to use standard javascript object here
		var formData = new FormData(form);
		$.ajax({
             url:'/job_seeker/home/add_job_application/'.concat(ids),
             type:"post",
             data:formData,
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){

                 url='/job_seeker/home/applied_successfully/'.concat(ids);
                 window.location.replace(url);
                    
           }
         });		
	    }
} 