jQuery( document ).ready(function($) {


	$(document).on('click','.laod_more_post:not(.loading)',function(){
		
		var that = $(this);
		var page = that.data('page');
		var newPage = page+1;
		var ajaxurl = that.data('url');
		
		that.addClass('loading').find('.but-text').slideUp(320);
		that.find('.icon-text').addClass('spin');
		
		var paged = total_pages.total_pages;

		console.log( paged );
		//console.log(page);

		if( paged > page ) {


			$.ajax({
				
				url : ajaxurl,
				type   : 'post',
				data : {
					page   : page,
					action : 'post_load_more',
				},
				error : function( response ){
					console.log(response);
				},
				success : function( response ){
					//that.data('page', newPage);
					//$('.custom-posts-container').append( response );
					
					//that.removeClass('loading').find('.but-text').slideUp(320);
					//that.find('.icon-text').removeClass('spin');
					
					
					setTimeout(function(){
						that.data('page', newPage);
						$('#ajax-content').append( response );
					
						that.removeClass('loading').find('.but-text').slideUp(320);
						
						that.find('.icon-text').removeClass('spin');
						
					},1000);
				}
			});

		} else {

		$('#ajax-content').append( '<h3 class="entry-title text-center">No more post found!</h3>' );
		that.addClass('loading');
		
		//that.removeClass('');
		$( ".laod_more_post" ).remove();


		}



	});


	 
	
   
});