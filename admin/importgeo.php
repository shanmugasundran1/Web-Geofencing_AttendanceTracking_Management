<?php
// Load the database configuration file
include_once '../config.php';

if(isset($_POST['import'])){
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $locationid   = $line[0];
                $locationname  = $line[1];
                $locationlat  = $line[2];
                $locationlong = $line[3];

                // Check whether member already exists in the database with the same email
                $prevQuery = "DELETE FROM geolocation WHERE location_ID = '".$line[0]."'";
                $prevResult = mysqli_query($mysqli, $prevQuery);               
                    // Insert member data in the database
                    mysqli_query($mysqli, "INSERT INTO geolocation (location_ID, location_name, location_lat, location_long) VALUES ('".$locationid."','".$locationname."', '".$locationlat."', '".$locationlong."')");
                
            }
            // Close opened CSV file
            fclose($csvFile);
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
// Redirect to the listing page
header("Location: keyingeo.php".$qstring);