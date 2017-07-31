<?php
	// Apsirašome parametrus prisijungimui prie duomenu bazes
	$servername = "localhost"; // server, lokalus dabar
	$username = "root"; 
	$password = "";
	$dbname = "menai"; // gali buti kita duomenu baze

	// Sukuriamas prisijungimas
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Patikriname prisijungimą
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	// atliekame duomenu paeimima ir atvaizdavimą
	if ($stmt = $conn->prepare("SELECT event, date FROM calendarevents order by date")) { // įvykių lentelė rašome MySQL užklausą
		
		$stmt->execute(); // inicijuojame duomenų paėmimą pagal užklausą

		$result = $stmt->get_result(); // pasiimame gautus rezultatus
		
		// sudedame gautus rezultatus iš duomenų bazės į masyvą
		while ($row = $result->fetch_assoc()) { 
			 $rows[] = $row; 
		} 
		
		$days = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); // gaunam einamojo mėnesio dienų skaičių
		
		$firstCurrentMonthDay = date('Y-m-01'); // pirma sio menesio diena
		
		$day = 0;
		printf("<h1>Liepa</h1>"); // antraštė
		while ($day < $days) { // ciklą vykdysime kiekvienai mėnesio dienai
		
			// atidarome div savaites dienoms
			printf(
				"<div class=\"week\">"
			);		

			// ciklas skirtas tik savaitei
			for($weekday = 1; $weekday <= 7; $weekday++) {
				
				// susikuriame menesio dieną
				$formatedDate = date('Y-m-d', strtotime($firstCurrentMonthDay. ' + '.$day.' days'));
				
				// paskaiciuojame menesio dienai savaitės dieną
				$dayofweek = date('w', strtotime($formatedDate));
				// keičiame formatą, nes pagal standartą 0 yra sekmadienis, o mums reikia 7 sekmadieniui
				if($dayofweek == 0) $dayofweek = 7;
				
				// tikriname ar mėnesio dienos savaitės diena atitinka ciklo savaitės dieną ir ar $day kintamasis vis dar m4nesio dienų rėmuose
				if(($dayofweek == $weekday) && ($day < $days)){
					
					$day++; // ciklo dienų kintamąjį padidiname vienetu
					
					// atvaizduojame dienai skirto elemento div pradžią
					printf(
						"<div class=\"day\">%s",
						$day
					);

					// ciklas skirtas surinkti visus tai dienai skirtus įvykius
					foreach($rows as $row) { 
						
						// pasitikriname ar diena is db atitinka dieną ciklo
						if($row["date"] == $formatedDate){
							// spausdiname ivyki
							printf(
								"<br /><span class=\"event\">%s</span>",
								$row["event"]
							);
						}
					}
					
					// po to kai surenkame dienos įvykius, uždarome ciklą
					printf(
						"</div>"
					);
					
				}
				else{
					// priešingu atveju spausdiname tuščią langą
					printf(
						"<div class=\"day\"></div>"
					);
				}
			}
			// uždarome savaitę
			printf(
				"</div>"
			);			
		}
		// uždarome paleidimą scripto
		$stmt->close();
	}
	// uždarome prisijungimą
	$conn->close();
?>