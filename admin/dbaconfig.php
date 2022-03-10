<?php 
	Class Dba{
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $db = "attendanceum";
		private $conn;

		public function __construct(){
			try {	
			  $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

        public function insert(){
			if (isset($_POST['submit'])) {
				if (isset($_POST['courseid']) && isset($_POST['coursetype']) && isset($_POST['coursecode']) && isset($_POST['coursename']) && isset($_POST['classdetail']) && isset($_POST['classday']) && isset($_POST['classdate']) && isset($_POST['starttime']) && isset($_POST['endtime']) && isset($_POST['locationid']) && isset($_POST['locationname'])) {
					if (!empty($_POST['courseid']) && !empty($_POST['coursetype']) && !empty($_POST['coursecode']) && !empty($_POST['coursename']) && !empty($_POST['classdetail']) && !empty($_POST['classday']) && !empty($_POST['classdate']) && !empty($_POST['starttime']) && !empty($_POST['endtime']) && !empty($_POST['locationid']) && !empty($_POST['locationname'])) {
						$courseid = $_POST['courseid'];
						$coursetype = $_POST['coursetype'];
						$coursecode = $_POST['coursecode'];
						$coursename = $_POST['coursename'];
						$classdetail = $_POST['classdetail'];
                        $classday = $_POST['classday'];
						$classdate = $_POST['classdate'];
                        $starttime = $_POST['starttime'];
                        $endtime = $_POST['endtime'];
						$locationid = $_POST['locationid'];
						$locationname = $_POST['locationname'];
						$query = "INSERT INTO course (courseid,CourseType,CourseCode,CourseName,ClassDetail,ClassDay,ClassDate,StartTime,EndTime,location_ID,location_name) VALUES ('$courseid','$coursetype','$coursecode','$coursename','$classdetail','$classday','$classdate','$starttime','$endtime','$locationid','$locationname')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}
					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'insertcourse.php';</script>";
					}
				}
			}
		}

        public function fetch(){
			$data = null;
			$query = "SELECT * FROM course";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function edit($id){
			$data = null;
			$query = "SELECT * FROM course WHERE courseid = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){
			if (isset($_POST['update'])) {
				if (isset($_POST['courseid']) && isset($_POST['coursetype']) && isset($_POST['coursecode']) && isset($_POST['coursename']) && isset($_POST['classdetail']) && isset($_POST['starttime']) && isset($_POST['endtime'])) {
					if (!empty($_POST['courseid']) && !empty($_POST['coursetype']) && !empty($_POST['coursecode']) && !empty($_POST['coursename']) && !empty($_POST['classdetail']) && !empty($_POST['starttime']) && !empty($_POST['endtime'])) {
						$courseid = $_POST['courseid'];
						$coursetype = $_POST['coursetype'];
						$coursecode = $_POST['coursecode'];
						$coursename = $_POST['coursename'];
                        $classdetail = $_POST['classdetail'];
                        $starttime = $_POST['starttime'];
                        $endtime = $_POST['endtime'];
						$query = "UPDATE course SET courseid='$courseid', CourseType='$coursetype', CourseCode='$coursecode', CourseName='$coursename', ClassDetail='$classdetail', StartTime='$starttime', EndTime='$endtime' WHERE courseid='$courseid '";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}
					}	else{
							echo "<script>alert('empty');</script>";
							echo "<script>window.location.href = 'insertcourse.php';</script>";
						}
    			}
			}
		}

		public function check($id){
			$query = "SELECT * FROM course WHERE courseid = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$query = "DELETE FROM course where courseid = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function insertcsv($courseid, $coursetype, $coursecode, $coursename, $classdetail, $classday, $classdate, $starttime, $endtime, $locationid, $locationname){
			$query = "INSERT INTO course (courseid,CourseType,CourseCode,CourseName,ClassDetail,ClassDay,ClassDate,StartTime,EndTime,location_ID,location_name) VALUES ('$courseid','$coursetype','$coursecode','$coursename','$classdetail','$classday','$classdate','$starttime','$endtime','$locationid','$locationname')";
			if ($sql = $this->conn->query($query)) {
				echo "<script>alert('records added successfully');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}else{
				echo "<script>alert('failed');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}
		}

		public function updatecsv($courseid, $coursetype, $coursecode, $coursename, $classdetail, $classday, $classdate, $starttime, $endtime, $locationid, $locationname){
			$query = "UPDATE course SET courseid = '$courseid', CourseType = '$coursetype', CourseCode = '$coursecode', CourseName = '$coursename', ClassDetail = '$classdetail', ClassDay = '$classday', ClassDate = '$classdate', StartTime = '$starttime', EndTime = '$endtime', location_ID = '$locationid', location_name = '$locationname' WHERE courseid='$courseid'";
			if ($sql = $this->conn->query($query)) {
				echo "<script>alert('records added successfully');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}else{
				echo "<script>alert('failed');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}
		}

		//Key In Geolocation Data functions

		public function insertgeo(){
			if (isset($_POST['submit'])) {
				if (isset($_POST['locationid']) && isset($_POST['locationname']) && isset($_POST['locationlat']) && isset($_POST['locationlong'])) {
					if (!empty($_POST['locationid']) && isset($_POST['locationname']) && isset($_POST['locationlat']) && isset($_POST['locationlong'])) {
						$locationid = $_POST['locationid'];
						$locationname = $_POST['locationname'];
						$locationlat = $_POST['locationlat'];
						$locationlong = $_POST['locationlong'];
						$query = "INSERT INTO geolocation (location_ID,location_name,location_lat,location_long) VALUES ('$locationid','$locationname','$locationlat','$locationlong')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}
					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'insertcourse.php';</script>";
					}
				}
			}
		}

		public function fetchgeo(){
			$data = null;
			$query = "SELECT * FROM geolocation";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function editgeo($id){
			$data = null;
			$query = "SELECT * FROM geolocation WHERE location_ID = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function updategeo($data){
			if (isset($_POST['update'])) {
				if (isset($_POST['locationid']) && isset($_POST['locationname']) && isset($_POST['locationlat']) && isset($_POST['locationlong'])) {
					if (!empty($_POST['locationid']) && isset($_POST['locationname']) && isset($_POST['locationlat']) && isset($_POST['locationlong'])) {
						$locationid = $_POST['locationid'];
						$locationname = $_POST['locationname'];
						$locationlat = $_POST['locationlat'];
						$locationlong = $_POST['locationlong'];
						$query = "UPDATE geolocation SET location_ID='$locationid', location_name='$locationname', location_lat='$locationlat', location_long='$locationlong' WHERE location_ID='$locationid '";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'keyincourse.php';</script>";
						}
					}	else{
							echo "<script>alert('empty');</script>";
							echo "<script>window.location.href = 'insertcourse.php';</script>";
						}
    			}
			}
		}

		public function checkgeo($id){
			$query = "SELECT * FROM geolocation WHERE location_ID = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function deletegeo($id){
			$query = "DELETE FROM geolocation where location_ID = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function insertgeocsv($locationid, $locationname, $locationlat, $locationlong){
			$query = "INSERT INTO geolocation (location_ID,location_name,location_lat,location_long) VALUES ('$locationid','$locationname','$locationlat','$locationlong')";
			if ($sql = $this->conn->query($query)) {
				echo "<script>alert('records added successfully');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}else{
				echo "<script>alert('failed');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}
		}

		public function updategeocsv($locationid, $locationname, $locationlat, $locationlong){
			$query = "UPDATE geolocation SET location_ID = '$locationid', location_name = '$locationname', location_lat = '$locationlat', location_long = '$locationlong' WHERE location_ID='$locationid '";
			if ($sql = $this->conn->query($query)) {
				echo "<script>alert('records added successfully');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}else{
				echo "<script>alert('failed');</script>";
				echo "<script>window.location.href = 'keyincourse.php';</script>";
			}
		}
	}
?>