<?php
$con = new mysqli('localhost','root','','sis');
function redirect($url){
	header("Location: ".URL_ROOT."$url");
}

function verify($password,$hash) {
	return password_verify($password,$hash);
}

function hashing($password) {
	return password_hash($password,PASSWORD_DEFAULT);
}

function notify($type,$message,$success) {
	echo json_encode(['type' => $type, 'message' => $message, 'success' => $success]);
}

function count_sections($section_id) {
	global $con;
	$syq = $con->query("SELECT * FROM school_year");
	$row = $syq->fetch_object();
	$sy  = $row->school_year;
	$query = $con->query("SELECT * FROM assign_students WHERE section_id = $section_id AND school_year = '$sy'");
	return $query->num_rows;
}

function error_message($data){
	echo '<div class="errorMsg">'; 
    foreach ( $data as $message )
	echo "$message\n";
	echo '</div>';
 
}

function success_message($data){
	 echo '<div class="successMsg">'; 
    foreach ( $data as $message )
    echo "$message\n";
    echo '</div>';
} 