//document.getElementById("dezute").addEventListener("click", zinute );
$('#dezute').on('click', dink);
$('#dezute').on('mouseout', atsirask);

function dink() {
	$('#dezute').css("background-color","red");
	$('#dezute').animate({"opacity":0},400);
}

function atsirask() {
	$('#dezute').animate({"opacity":1},400, keiciamRaudona);
	//$('#dezute').css("background-color","yellow");
}

function keiciamRaudona(){
	$('#dezute').css("background-color","yellow", sekPaskuiPele);
}
// var currentMousePos = { x: -1, y: -1 };
// $(document).mousemove(function(event) {
	// currentMousePos.x = event.pageX;
	// currentMousePos.y = event.pageY;
	// $('#dezute').css("left", currentMousePos.x);
// });


