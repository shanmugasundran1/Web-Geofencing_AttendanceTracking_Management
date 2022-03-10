<?php
error_reporting( 0 );
include '../session.php';
include '../config.php';
include "checkSession.php";
ob_start();
if(isset($_POST['assign'])){
    $_SESSION['week']=$_POST['week'];
    $_SESSION['course']=$_POST['course'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mark Attendance | E-Attendance@UM</title>
<link rel = "icon" href ="../sources/um_logo.png" type = "image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<style>
            .onoffswitch {
                position: relative; width: 60px;
                -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
            }
            .onoffswitch-checkbox {
                display: none;
            }
            .onoffswitch-label {
                display: block; overflow: hidden; cursor: pointer;
                height: 36px; padding: 0; line-height: 36px;
                border: 2px solid #E3E3E3; border-radius: 36px;
                background-color: #FFFFFF;
                transition: background-color 0.3s ease-in;
            }
            .onoffswitch-label:before {
                content: "";
                display: block; width: 36px; margin: 0px;
                background: #FFFFFF;
                position: absolute; top: 0; bottom: 0;
                right: 22px;
                border: 2px solid #E3E3E3; border-radius: 36px;
                transition: all 0.3s ease-in 0s; 
            }
            .onoffswitch-checkbox:checked + .onoffswitch-label {
                background-color: #49E845;
            }
            .onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
            border-color: #49E845;
            }
            .onoffswitch-checkbox:checked + .onoffswitch-label:before {
                right: 0px; 
            }
        </style>
 		<!-- css end  -->
        <!-- script start -->
        <script>
            // Compare User's Current Location with Supposed Location
            var coordinates={
                lat:0,
                lng:0,
                acc:0,
                address:"",
                distance:0,
                velocity:0,
                speed:0,
            }
                success=(pos)=>{
                    coordinates.lat=pos.coords.latitude;
                    coordinates.lng=pos.coords.longitude;
                    // check employee current location status
                    checkStatus();                    
                }

                error=(err)=> {
                    console.warn(`ERROR(${err.code}): ${err.message}`);
                    alertify.error(`<span style='color:#fff;font-size:12px;'>ERROR(${err.code}): ${err.message}) Try Again OR Open In Diffrent Browser</span>`);
                }

                var options = {
                    timeout: 500, 
                    enableHighAccuracy: true 
                };

            // watch user position
                getCurrentPositions=()=>{                
                    let watchId=navigator.geolocation.watchPosition(success,error,options);
                }
                getCurrentPositions();
                // getCurrentPosition    
        </script>
        <!-- script end -->
</head>

<body class="hold-transition sidebar-mini" >
    <?php include 'header_student.php'; ?>
    <div class="content-wrapper" >
        <section class="content-header card bg-dark rounded-0">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-family:Franklin Gothic Medium; font-weight:bold;">MARK ATTENDANCE</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="attendance.php">Attendance</a></li>
                            <li class="breadcrumb-item active">Choose Course to Mark Attendance</li>
                            <li class="breadcrumb-item">Mark Attendance</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <?php
                if(isset($_POST['submit'])){
                    $courseid=$_SESSION['course'];
                    $lecturerquery = mysqli_query($mysqli, "SELECT lecturer_course.acc_uname AS lecturer_uname FROM student_course LEFT JOIN lecturer_course ON student_course.subject_id = lecturer_course.subject_id WHERE student_course.subject_id = '$courseid'");
                    $rowlec = mysqli_fetch_assoc($lecturerquery);
                    $studentuname=$loggedin_session;
                    $lectureruname=$rowlec["lecturer_uname"];
                    $date=date("d/m/Y");
                    $week=$_SESSION['week'];
                   /* $timeresult = mysqli_query($mysqli, "SELECT * FROM student_course WHERE subject_id = '$courseid' AND acc_uname = '$studentuname'");
                    $rowtime = mysqli_fetch_array($timeresult);
                    $starttime = date("H:i:s", strotime($rowtime["StartTime"]));
                    $endtime = date("H:i:s", strotime($rowtime["EndTime"]));
                    $currenttime = date("H:i:s");
                    $currenttime = date("H:i:s", strtotime($currentDate));
                    if ($currenttime >= $starttime && $currenttime <= $endtime) {
                        $attstatus="1";
                    } else {
                        $attstatus="0";
                    } */
                    $attstatus="1";
                    $sql="INSERT INTO attendance_data(course_id,student_uname,lecturer_uname,date,week,attendance_status)
                          VALUES('$courseid','$studentuname','$lectureruname','$date','$week','$attstatus')";
                    mysqli_query($mysqli, $sql);
                }
            ?>
        <div class="page-content-wrap">  
                <div class="card" style="padding:10px;">
                    <div class="card-body"> 
                        <form action="" method="post"> 
                            <div class="row"><!---row-->
                                <div class="col-md-2"><!---col1--->
                                    <div class="form-block">
                                        <label><b>Date:</b></label>
                                        <input type="text" name="date" class="form-control" value="<?php echo date("d/m/Y");?>" style="color:#4CAF50;font-weight:600" disabled readonly>
                                    </div>
                                </div><!---col1--->	    
                                <div class="col-md-2"><!---col2--->
                                    <div class="form-block">
                                        <label><b>Time:</b></label>
                                        <input type="text" name="time" id="time" class="form-control" value="<?php echo date("H:i:s");?>" disabled readonly>
                                    </div>
                                </div><!---col2--->									
                            </div><!---row--->									 
                            <!-- another row start here -->
                            <div class="row" style="margin-top:20px;">
                                <center>
                                    <button type="submit" name="submit" id="submitBtn" class="btn btn-success">Mark Attendance</button>
                                </center>
                            </div>
                        </form>
                        <!--another row end here  -->
                        <hr>
                        <!-- employee current locaton details start -->
                        <div class="container" style="overflow-x:auto;">
                            <center>
                                <h4 style="background-color:#1B1464;color:#fff;padding:7px;">Current Location Detail's</h4>
                            </center>
                            <table class="table">
                                <thead">
                                    <tr>
                                        <th>Lat</th>
                                        <th>Lng</th>
                                        <th>Distance</th>
                                        <th>Address</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td id="lat"></td>
                                        <td id="lng"></td>
                                        <td id="distance"></td>
                                        <td id="address"></td>
                                    </tr>
                                </tbody>   
                            </table>
                        </div>
                        <!-- employee current locaton details  end  -->
                        <!--  info row -->
                        <div class="row bg-dark">
                            <div class="col-md-2" ></div>
                            <div class="col-md-2" ></div>
                            <div class="col-md-5" ></div>
                            <div class="col-md-3" ></div>
                        </div><!---row end--->
                        <div id="map" style="width: 100%; height:300px;"></div>
                    </div><!-------card-body----->
                </div><!-----------card------------->
            <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
        </section>
    </div>
</body>
  
<footer class="main-footer" style="background-color: black; color:white;"> <strong>FCSIT ATTENDANCE &copy; 2021 </strong> FYP 1.
    <div class="float-right d-none d-sm-inline-block"> <b>University of Malaya</b> </div>
</footer>
  
<script src="../plugins/jquery/jquery.min.js"></script> 
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="../plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> 
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> 
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> 
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> 
<script src="../plugins/jszip/jszip.min.js"></script> 
<script src="../plugins/pdfmake/pdfmake.min.js"></script> 
<script src="../plugins/pdfmake/vfs_fonts.js"></script> 
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script> 
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script> 
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> 
<script src="../dist/js/adminlte.min.js"></script> 
<script src="../dist/js/demo.js"></script> 
<script src="checkDistance.js"></script>
<script src="./checkDistance.js"></script>
            <!-- checkDistance function added -->
        <script>
            //VERY IMPORTANT
            function getTime(){
                date=new Date();        
                document.querySelector("#time").value=date.toLocaleTimeString();
                document.querySelector("#time").style.color="#2ecc71";					
                document.querySelector("#time").style.fontWeight="600";					
            }
            let timeInterval = setInterval(getTime,1000);
            // time function end
            // Function of checking User's current location with supposed location 
            function checkStatus(){  
                let storeLat = <?php echo getAssignedLocationLat($_SESSION['course'], $loggedin_id);?>;
                let storeLng = <?php echo getAssignedLocationLng($_SESSION['course'], $loggedin_id);?>;
                let distance = findDistance(storeLat, storeLng, coordinates.lat, coordinates.lng, "M"); 
                console.log(distance);
                coordinates.distance=distance;       
                $("#distance").text(distance);
                $("#lat").text(coordinates.lat);
                $("#lng").text(coordinates.lng);
                // get user current location name start
                let myApi="https://maps.googleapis.com/maps/api/geocode/json?latlng="+coordinates.lat+","+coordinates.lng+"&key=AIzaSyB5rRysJ-hkqdmwZ6BlyT3PYve5DzFjQ4k";
                $.ajax({
                    url:myApi,
                    success:function(data){             
                        //console.log("data: "+JSON.stringify(data));
                        if(data.results.length<=1){
                                let address="<?php echo getAssignedLocation($_SESSION['course'], $loggedin_id);?>";
                                $("#address").text(address)
                        }else{
                            coordinates.address=JSON.stringify(data.results[0].formatted_address);                            
                            $("#address").text(coordinates.address);           
                        }
                                        
                    } 
                }); 
                // get user currrent location name end
                // check distance
                if( (distance)<=(1000) ){
                    console.log("Inside In Approx. 100 meter");
                    $("#submitBtn").prop("disabled",false);                
                }
                else{
                    // outside from location         
                    $("#submitBtn").prop("disabled",true);             
                    // $("select[name=options]").attr("id","newId");
                }  
            }
            setInterval(checkStatus,1000)
            // 
            // END OF VERY IMPORTANT
            //  take action Start
            function takeAction(){
                    //console.log("i am check in");
                    let userId=<?php echo $_SESSION["emp_id"];?>;
                    let userLat=coordinates.lat;
                    let userLng=coordinates.lng;                
                    let url="./checkInEntry.php";
                    $.post(url,{userId:userId,userLat:userLat,userLng:userLng,address:coordinates.address,distance:coordinates.distance},function(result){
                        let myHTML="<center><i class='fa fa-check-circle' style='color:green;font-size:100px;'></i><center>";
                        alertify.alert('Message', `${myHTML} Checked-In`, function(){ window.location.reload();});
                    });  
            }//takeaction end 
            // VERY IMPORTANT
            // google map.............
            var map, infoWindow;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: coordinates.lat, lng: coordinates.lng},
                    zoom: 16,
                    mapTypeId: 'hybrid',
                    heading: 90,
                    tilt: 45
                });
                map.setTilt(45);
                var marker = new google.maps.Marker({
                    position: map.center,
                    map: map,
                    title: 'You are here'
                });
                infoWindow = new google.maps.InfoWindow;
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.watchPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,             
                        };
                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Hey, You Are Here.');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, 
                    function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } 
                else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }
        // google map end
        </script>
        <!---script end--->

        <!-- google map api  -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5rRysJ-hkqdmwZ6BlyT3PYve5DzFjQ4k&callback=initMap">
        </script>  
        <!---google map api--->
        <?php include "./mainScripts.php";?>
        <!---END OF VERY IMPORTANT--->
</html>
