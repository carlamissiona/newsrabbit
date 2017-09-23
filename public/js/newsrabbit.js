jQuery(document).ready(function($) {

	//***** Loading tags  ******//
	var urltopost =  $(location).attr('origin')+"/api/sources";
		$.ajax({
		 	url: urltopost,
			data: {
        fetchsize: "10"
			},
			error: function(data) {
				console.log("hii");
				console.log(data);
			},  
      success: function(data) {
				for (i = 0; i < data.length; i++) { 
					console.log(data[i].sourcename);
      		$( ".tags-nws" ).append( '<li><a href="#" class="tag-nws">'+data[i].sourcename+'</a></li>' );
				}
  		 },
  		 type: 'POST'
	 });
// 	 urltopost =  $(location).attr('origin')+"/api/category";
// 		$.ajax({
// 		 	url: urltopost,
// 			data: {
//         fetchsize: 5
//    		},
// 			error: function(data) {
// 				console.log("hii");
// 				console.log(data);
// 			},  
//       success: function(data) {
//       		console.log(data);
//   		 },
//   		 type: 'POST'
// 	 });
	
	
	
	
	
	//***** Loading tags  ******//
	//***** Searching News  ******/
	$(".search-news").click(function()  
	{
		var search_string = $("input.search-string").val();
		if( ! $(this).hasClass('active') ) { 
			current_item = this;
			// close all visible divs with the class of .section
			console.log(current_item);  
			//console.log(  $(location).attr('origin')+"/api/search");
			var urltopost =  $(location).attr('origin')+"/api/news/search";
				console.log( urltopost );

			
			
	$.ajax({
		 	url: urltopost,
			data: {
      needle: "politics"
   		},
			error: function(data) {
				console.log("hii");
				console.log(data);
			},  
      success: function(data) {
      		console.log(data);
  		 },
  		 type: 'POST'
	 });
			
			
// 			 jQuery.ajax({type: "POST", data: {  }, url: $(location).attr('origin')+"/api/search", success: function(result){
// 								console.log('hi ajax');	console.log(result);
//    		 }});
//			
// 			$('.section:visible').fadeOut( section_hide_time, function() { 
// 				$('a', '.mainmenu').removeClass( 'active' );  
// 				$(current_item).addClass( 'active' );
// 				var new_section = $( $(current_item).attr('target-div') );
// 				new_section.fadeIn( section_show_time );
// 			} );
			
			
		}
		return false;
	});		
});