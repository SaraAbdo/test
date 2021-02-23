
function search() {
	var jobs_array =document.getElementsByClassName("company-list");
    var company_name_array =document.getElementsByClassName("company-name");
    var job_type_array =document.getElementsByClassName("job-type1");
    var career_array =document.getElementsByClassName("career1");
    var length=jobs_array.length;
	for (var i = 0; i <length; i++) {
		  jobs_array[i].style.display = "block";
		  jobs_array[i].classList.add("active-job");		
		}

	var check_company_name=$.trim($("#company_name1").val());
	var check_career=$.trim($("#career").val());
	var check_job_type=$.trim($("#job_type").val());

	if(check_company_name!=0 && check_career==0 && check_job_type==0 ){
		// document.getElementById("p").style.display = "none";

		var company_name= $('#company_name1').val();

        if(company_name=="All"){

          for ( var i = 0; i <length; i++) {
		
		    jobs_array[i].style.display = "block";
		     jobs_array[i].classList.add("active-job");	
		 
		  }
		
		  		
		
		  	       

        }else{
        	var block_count=0;
            for (var i = 0; i <length; i++) {
			  if(company_name_array[i].textContent!=company_name){
				jobs_array[i].style.display = "none";
				jobs_array[i].classList.remove("active-job");
			  }

		    }

           

        }

       $('html,body').animate({
        scrollTop: $(".jobs").offset().top},
        'slow');

	}else if(check_company_name==0 && check_career==0 && check_job_type!=0){
        document.getElementById("p").style.display = "none";
        var job_type= $('#job_type').val();
        if(job_type=="All"){
          for (var i = 0; i <length; i++) {
		
		    jobs_array[i].style.display = "block";	
		    jobs_array[i].classList.add("active-job");
		}

        }else{
            for (var i = 0; i <length; i++) {
			  if(job_type_array[i].textContent!=job_type){
				jobs_array[i].style.display = "none";
				jobs_array[i].classList.remove("active-job");
			  }	
		    }
           
		    
        }

        $('html,body').animate({
        scrollTop: $(".jobs").offset().top},
        'slow');

	}else if(check_company_name==0 && check_career!=0 && check_job_type==0){
        document.getElementById("p").style.display = "none";
        var career= $('#career').val();
        if(career=="All"){
          for (var i = 0; i <length; i++) {
		
		    jobs_array[i].style.display = "block";
		    jobs_array[i].classList.add("active-job");	
		  }

        }else{
            for (var i = 0; i <length; i++) {
			  if(career_array[i].textContent!=career){
				jobs_array[i].style.display = "none";
				jobs_array[i].classList.remove("active-job");
			  }	
		    }

		    
        }

        $('html,body').animate({
        scrollTop: $(".jobs").offset().top},
        'slow');
    }

	// }else if(check_company_name!=0 && check_career!=0 && check_job_type==0){
	// 	document.getElementById("p").style.display = "none";
 //     //company name has a value and career has a value
 //        var career= $('#career').val();
 //        var company_name= $('#company_name1').val();
 //        if(career=="All" && company_name== "All"){
 //          for (var i = 0; i <length; i++) {
		
	// 	    jobs_array[i].style.display = "block";	
	// 	    jobs_array[i].classList.add("active-job");
	// 	  }

 //        }else if(career=="All" && company_name!= "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(company_name_array[i].textContent!=company_name){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
 //        }else if(career!="All" && company_name== "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(career_array[i].textContent!=career){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(career!="All" && company_name!= "All"){

	// 	    for (var i = 0; i <length; i++) {
	// 	    	career_element=career_array[i].textContent;
	// 	    	company_name_element=company_name_array[i].textContent;
	// 		  if((career_element==career) && (company_name_element==company_name)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }

 //        }

 //        $('html,body').animate({
 //        scrollTop: $(".jobs").offset().top},
 //        'slow');

	// }else if(check_company_name!=0 && check_career==0 && check_job_type!=0){
	// 	document.getElementById("p").style.display = "none";
 //     //company name has a value and job_type has a value
 //        var job_type= $('#job_type').val();
 //        var company_name= $('#company_name1').val();
 //        if(job_type=="All" && company_name== "All"){
 //          for (var i = 0; i <length; i++) {
		
	// 	    jobs_array[i].style.display = "block";
	// 	    jobs_array[i].classList.add("active-job");	
	// 	  }

 //        }else if(job_type=="All" && company_name!= "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(company_name_array[i].textContent!=company_name){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
 //        }else if(job_type!="All" && company_name== "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(job_type_array[i].textContent!=job_type){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type!="All" && company_name!= "All"){

	// 	    for (var i = 0; i <length; i++) {
	// 	    	job_type_element=job_type_array[i].textContent;
	// 	    	company_name_element=company_name_array[i].textContent;
	// 		  if((job_type_element==job_type) && (company_name_element==company_name)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }

 //        }

 //        $('html,body').animate({
 //        scrollTop: $(".jobs").offset().top},
 //        'slow');

	// }else if(check_company_name!=0 && check_career!=0 && check_job_type!=0){
	// 	document.getElementById("p").style.display = "none";
 //     //company name has a value and job_type has a value
 //        var job_type= $('#job_type').val();
 //        var career= $('#career').val();
 //        if(job_type=="All" && career== "All"){
 //          for (var i = 0; i <length; i++) {
		
	// 	    jobs_array[i].style.display = "block";
	// 	    jobs_array[i].classList.add("active-job");	
	// 	  }

 //        }else if(job_type=="All" && career!= "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(career_array[i].textContent!=career){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
 //        }else if(job_type!="All" && career== "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(job_type_array[i].textContent!=job_type){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type!="All" && career!= "All"){

	// 	    for (var i = 0; i <length; i++) {
	// 	    	job_type_element=job_type_array[i].textContent;
	// 	    	career_element=career_array[i].textContent;
	// 		  if((job_type_element==job_type) && (career_element==career)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }

 //        }

 //        $('html,body').animate({
 //        scrollTop: $(".jobs").offset().top},
 //        'slow');

	// }else if(check_company_name!=0 && check_career!=0 && check_job_type!=0){
	// 	document.getElementById("p").style.display = "none";
 //     //company name has a value and job_type has a value
 //        var job_type= $('#job_type').val();
 //        var career= $('#career').val();
 //        var company_name= $('#company_name1').val();
 //        if(job_type=="All" && career== "All" && company_name== "All"){
 //          for (var i = 0; i <length; i++) {
		
	// 	    jobs_array[i].style.display = "block";	
	// 	    jobs_array[i].classList.add("active-job");
	// 	  }

 //        }else if(job_type=="All" && career!= "All" && company_name== "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(career_array[i].textContent!=career){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
 //        }else if(job_type!="All" && career== "All" && company_name== "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(job_type_array[i].textContent!=job_type){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	} else if(job_type=="All" && career== "All" && company_name!= "All"){
 //            for (var i = 0; i <length; i++) {
	// 		  if(company_name_array[i].textContent!=company_name){
	// 			jobs_array[i].style.display = "none";
	// 			jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type=="All" && career!= "All" && company_name!= "All"){
	// 	    for (var i = 0; i <length; i++) {
	// 	    	career_element=career_array[i].textContent;
	// 	    	company_name_element=company_name_array[i].textContent;
	// 		  if((career_element==career) && (company_name_element==company_name)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type!="All" && career== "All" && company_name!= "All"){
	// 	    for (var i = 0; i <length; i++) {
	// 	    	job_type_element=job_type_array[i].textContent;
	// 	    	company_name_element=company_name_array[i].textContent;
	// 		  if((job_type_element==job_type) && (company_name_element==company_name)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type=="All" && career!= "All" && company_name== "All"){
	// 	    for (var i = 0; i <length; i++) {
	// 	    	job_type_element=job_type_array[i].textContent;
	// 	    	career_element=career_array[i].textContent;
	// 		  if((job_type_element==job_type) && (career_element==career)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }
	// 	}else if(job_type!="All" && career!= "All" && company_name!= "All"){

	// 	    for (var i = 0; i <length; i++) {
	// 	    	job_type_element=job_type_array[i].textContent;
	// 	    	career_element=career_array[i].textContent;
	// 	    	company_name_element=company_name_array[i].textContent;
	// 		  if((job_type_element==job_type) && (career_element==career) && (company_name_element==company_name)){
	// 			jobs_array[i].style.display = "block";
	// 			jobs_array[i].classList.add("active-job");
	// 		  }else{
	// 		  	jobs_array[i].style.display = "none";
	// 		  	jobs_array[i].classList.remove("active-job");
	// 		  }	
	// 	    }

 //        }

 //        $('html,body').animate({
 //        scrollTop: $(".jobs").offset().top},
 //        'slow');

	// }
	
pagination();	
}

function pagination(){

    var item_per_page=2;
	var block=jQuery('.active');
	var block_count=block.length;
	var number_of_pages=Math.ceil(block_count/item_per_page);
	
	//append pagination in body
	jQuery('.jobs').append("<div class='row' id='p'><div class='col-md-12 text-center'><div class='site-block-27'><div class='pagination'></div></div></div></div>");
	for(var i=1; i<=number_of_pages; i++){
		jQuery('.pagination').append("<div class='page'>"+i+"</div>");	
	}
	
	//activate first page
	jQuery(".page:first-child").addClass('active');
	jQuery('.active-job').filter(function( index ) { return index < item_per_page;}).addClass('active');
	
	//activate pagination on click
	jQuery('.jobs').delegate('.page','click',function(){
		var page_index=jQuery(this).index();
		var start=page_index*item_per_page;
		block.removeClass('active');
		jQuery(".page").removeClass('active');
		jQuery(".page").eq(page_index).addClass('active');
		for(var j=0;j<item_per_page;j++){
			block.eq(start+j).addClass('active');
		}
	
	});

}