<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charser="utf-8" />
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/log.js"></script>
		<script>
			$(document).ready(function(){
				$('.skaiciai').on("click", function(){
					log("Paspaustas mygtukas " + $(this).val());
				});
			});
		</script>
	</head>
	<body>
		<input class="skaiciai" id="ok" type="button" value="OK" />
		<input class="skaiciai" id="vienas" type="button" value="1" />
		<input class="skaiciai" id="du" type="button" value="2" />
		<input class="skaiciai" id="trys" type="button" value="3" />
		<input class="skaiciai" id="keturi" type="button" value="4" />
		<input class="skaiciai" id="penki" type="button" value="5" />
		<div id="calendar">
			
		</div>
	</body>
</html>