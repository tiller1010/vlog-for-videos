if($('.pagination').length){
	var paginate = function(url){
		$.ajax(url)
			.done(function(response){
				$('body').html(response);
				$('html').animate({
					scrollTop: 0
				});
				window.history.pushState(
					{url: url},
					document.title,
					url
				);
			})
			.fail(function(response){
				alert('Error: ' + response.responseText);
			})
	}
	$('.pagination a').click(function(event){
		event.preventDefault();
		var url = $(this).attr('href');
		paginate(url);
	});
	window.onpopstate = function(e) {
	    if (e.state.url) {
	        paginate(e.state.url);
	    }
	    else {
	        e.preventDefault();
	    }
	}; 
}