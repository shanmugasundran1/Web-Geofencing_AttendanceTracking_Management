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
                $id     = $line[0];
                $type   = $line[1];
                $code   = $line[2];
                $name   = $line[3];
                $detail   = $line[4];
                $day   = $line[5];  
                $date  = $line[6];
                $start   = $line[7];
                $end   = $line[8];
                $place   = $line[9];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "DELETE FROM course WHERE courseid = '".$line[0]."'";
                $prevResult = mysqli_query($mysqli, $prevQuery);               
                    // Insert member data in the database
                    mysqli_query($mysqli, "INSERT INTO course (courseid, CourseType, CourseCode, CourseName, ClassDetail, ClassDay, ClassDate, StartTime, EndTime, location_ID) VALUES ('".$id."','".$type."', '".$code."', '".$name."', '".$detail."', '".$day."', '".$date."', '".$start."', '".$end."', '".$place."')");
                
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
header("Location: keyincourse.php".$qstring);