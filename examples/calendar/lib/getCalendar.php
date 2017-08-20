<?php
	// autolouder, kuri užkraus mums visas klases pagal loder.php aprašytą logiką
	require_once("loader.php");

	// kuriame klasės Connection objektą (ty prisijungimo prie duomenų bazės objektą)
	$connection = new Connection("localhost", "root", "", "menai");

	// atliekame duomenu paeimima kviesdami savo anksčiau klasėje Connection aprašytą metodą
	// metodas gražina eilučių objektų masyvą pagal MYSQL užklausą
	// MYSQL užklausa yra kabutėse (imame duomenis iš calendarevents lentelės - ivykį iš event stulpelio ir datą iš date stulpelio)
	$rows = $connection->get_data("SELECT event, date FROM calendarevents order by date");

	//http://php.net/manual/en/function.date.php
	$days = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); // gaunam einamojo mėnesio dienų skaičių

	$firstCurrentMonthDay = date('Y-m-01'); // pirma sio menesio diena

	$day = 0;
	printf("<h1>".Months::get_current_months_lithuania(date('n')-1)."</h1>"); // Kreipiamės į statinę klasę kurioje aprašyti lietuviški mėnesiai (months.php)
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
					"<div class=\"day\"><label>
					%s
					</label>",
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
	// uždarome prisijungimą
?>
