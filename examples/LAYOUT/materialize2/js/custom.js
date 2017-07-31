$(document).ready(function(){
	$(".articleimg").on("click", function(){
		var bigImgPath = $(this).attr("src").replace('_small','');
		
		$("#modal").append("<img id='imageToRemove' src='"+bigImgPath+"'  />");
		$(".background").css("visibility", "visible");
		$(".background").animate({"opacity":1}, 400);

	});
	
	$("#background").on("click", function(){
		
		$(".background").animate({"opacity":0}, 400, function(){
			$(".background").css("visibility", "hidden");
			$("#imageToRemove").remove();
			
		});
		
	});
	
});
























	
    // $("img.forarticle").on("click", function(){
		// var bigImgPath = $(this).attr("src").replace('_small','');
		
		// $("#modal").append("<img id='imageToRemove' src='"+bigImgPath+"' />")
		// $(".background").css("visibility", "visible");
		
		// $(".background").animate({"opacity":1}, 400);
	// });
	
	// $(".background").on("click", function(){
		// $(".background").animate({"opacity":0}, 400, function(){
			// $("#imageToRemove").remove();
			// $(".background").css("visibility", "hidden");
		// });
	// });

