<?php
require_once('DatabaseConnection.php');
session_start();
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$user = $_SESSION['user'];
	$user_id = $_SESSION['user_id'];
	$family_name= $_SESSION['family_name'];

	$sql = "INSERT INTO tbl_chores(title, start, end, color, user_id, family_name) values ('$title', '$start', '$end', '$color','$user_id','$family_name')";
	//$req = $DBcon->prepare($sql);
	//$req->execute();
	
	
	$query = $DBcon->prepare( $sql );
	if ($query == false) {
	 print_r($DBcon->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
