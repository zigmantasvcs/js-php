function log(entry){
	$.ajax({
		url: '/service/support/insertLog.php',
		type: 'POST',
		data: {data:entry},
		success: function(data) {                                       
			console.log(data);                                                                  
		}  
	});
}
