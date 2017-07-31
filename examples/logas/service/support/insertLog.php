<?php
	//require_once('../db/connect.php');
	require_once('../db/connect.php');

	
	$stmt = $conn->prepare("INSERT INTO logs (event, date) 
										VALUES (?, now())");
	
	$stmt->bind_param("s", $event);
	$event = $_POST['data'];
	// set parameters and execute
	if ($stmt->execute()) { 
		
	} else {
	   echo $stmt->error;
	}
	
	$stmt->close();
	
	require_once('../db/disconnect.php');
	
	//echo $_POST['data'];
	
	//require_once('../db/disconnect.php');
	
	// Nukreipiame á kità svetainæ
	//header('Location: /LAYOUT/asmeninis/index.php');
?>