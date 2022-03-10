			<?php
			$sqlanalysis = "SELECT week, attendance_count FROM analysis_data WHERE course_id = '$course_id'";
			$resultanalysis = mysqli_query($mysqli, $sqlanalysis);
			$countanalysis = mysqli_num_rows($resultanalysis);

			$arrayanalysis = array();

			while ($row = mysqli_fetch_array($resultanalysis)) {
				$arrayanalysis[] = $row['attendance_count'];
			}


			$outcome = '';
			$outcomearray = array();
			$upward = 0;
			$downward = 0;
			$stable = 0;


			for ($i = 0; $i < $countanalysis - 1; $i++) {
				if ($arrayanalysis[$i] < $arrayanalysis[$i + 1]) {
					$outcome = 'Upward';
					$upward = $upward + 1;
				} elseif ($arrayanalysis[$i] > $arrayanalysis[$i + 1]) {
					$outcome = 'Downward';
					$downward = $downward + 1;
				} else {
					$outcome = 'Stable';
					$stable = $stable + 1;
				}
				$outcomearray[$i] = $outcome;
			}

			$finaloutcome = '';

			if (($upward > $downward) && ($upward > $stable)) {
				$finaloutcome = 'Upward';
			} elseif (($downward > $upward) && ($downward > $stable)) {
				$finaloutcome = 'Downward';
			} elseif (($stable > $upward) && ($stable > $stable)) {
				$finaloutcome = 'Stable';
			}


			$sqlav = "SELECT DISTINCT student_uname FROM attendance_data WHERE course_id = '$course_id'";
			$resultav = mysqli_query($mysqli, $sqlav);
			$total = 0;
			if (mysqli_num_rows($resultav) > 0) {
				while ($row = mysqli_fetch_array($resultav)) {
					$total = $total + 1;
				}
			}

			$weekcounter = 0;

			for ($counter = 0; $counter < $countanalysis; $counter++) {
				if ($arrayanalysis[$counter] == $total / 2) {
					$weekcounter = $counter + 1;
				}
			}
			?>
