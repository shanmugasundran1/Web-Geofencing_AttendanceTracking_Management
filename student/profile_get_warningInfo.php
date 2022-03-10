
		  <?php
				if (isset($_POST["get_data"])) {
					$id = $_POST["id"];
					$sql = "SELECT * FROM warning WHERE warning_id='$id'";
					$result = mysqli_query($mysqli, $sql);
					$row = mysqli_fetch_object($result);
					echo json_encode($row);
					exit();
				}
				?>
