<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function get_schecdule(){
		$acc_uname = isset($_REQUEST['acc_uname'])?$_REQUEST['acc_uname']:"";
		$acc_id = $_SESSION['acc_id'];
		$data = array();
		$qry = $this->db->query("SELECT * FROM student_course WHERE student_id = '$acc_id'");
		while($row=$qry->fetch_assoc()){
			if($row['is_repeating'] == 1){
				$rdata = json_decode($row['ClassDate']);
				foreach($rdata as $k =>$v){
					$row[$k] = $v;
				}
			}
			$data[] = $row;
		}
			return json_encode($data);
	}
} ?>