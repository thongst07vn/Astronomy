import '../bootstrap'
$(document).ready(function(){
	//open popup

	$(window).on('load', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
});