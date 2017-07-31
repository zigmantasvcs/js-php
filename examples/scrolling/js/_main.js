$(document).ready(function() {
	
	$("#mars").on('click', function(){
		
		var img = $('<img />', {
			src: 'images/mars.jpg',
		});
		
		img.css({position:"relative"});
		img.appendTo(".modal");
		
		$(".modal").css("display", "block");
		
		$(".modal").animate(
		{
			'opacity': '1'
		}, 400);
		
	});
	
	$(".modal").on('click', function(){
		$(".modal").animate(
		{
			'opacity': '0'
		}, 400, 
		function(){
			$(".modal").hide()
		});
	});
	
});