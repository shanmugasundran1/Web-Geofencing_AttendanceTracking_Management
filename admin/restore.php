<?php

$mykey1 = $_REQUEST['id'];

$conn = new mysqli('localhost', 'root', '', 'attendanceum');

$query = '';
$sqlScript = file('backup/' . $mykey1 . '  attendanceum.sql');
foreach ($sqlScript as $line) {

	$startWith = substr(trim($line), 0, 2);
	$endWith = substr(trim($line), -1, 1);

	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}

	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn, $query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query . '</b></div>');
		$query = '';
	}
}
header('Location: scheduler.php');
