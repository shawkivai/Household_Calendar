<?php 
require ("DatabaseConnection.php");

// Escape user inputs for security
$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$user_role = $_POST['user_role'];

// attempt insert query execution
$sql = "INSERT INTO tbl_user (first_name, last_name, username, password, user_role) VALUES ('$first_name', '$last_name','$username','$password','$user_role')";
$singnup_data = $DBcon->prepare($sql);
$insert_data = $singnup_data->execute();

if($insert_data) {
    echo "<script> window.open('index.php','_self')</script>";
    exit();
}
else {
    echo"<script> alert('Registration is not successful'); window.location.href='signup.php';</script>";
}
?>