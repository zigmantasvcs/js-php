<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charser="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body>
		<div id="calendar">
			<?php require_once("service/support/getCalendar.php"); ?>
		</div>
	</body>
</html>