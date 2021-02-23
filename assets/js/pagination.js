jQuery('document').ready(function(){
    var item_per_page=2;
	var block=jQuery('.active-job');
	var block_count=block.length;
	var number_of_pages=Math.ceil(block_count/item_per_page);
	
	//append pagination in body
	jQuery('.jobs').append(("<div class='pagination col-md-12 col-md-offset-5'></div>)"));
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


	
  });