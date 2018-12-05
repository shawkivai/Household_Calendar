<?php 
require ("DatabaseConnection.php");

// Escape user inputs for security

if(isset($_POST['signup'])){

    $full_name =  $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];
    $family_name = $_POST['family_name'];
    $family_status = $_POST['family_status'];
    $phone_number = $_POST['phone_number'];

    // $fetch_user = "SELECT * FROM tbl_user";
    // $stmt = $DBcon->prepare($fetch_user);
    // $stmt->execute(); 
    // $user = $stmt->fetch();
    // echo($user);
    // die();

    // attempt insert query execution
    $sql = "INSERT INTO tbl_user (family_name, family_status, phone_number, full_name, username,  password, user_role) VALUES ('$family_name','$family_status','$phone_number','$full_name','$username','$password','$user_role')";
    $singnup_data = $DBcon->prepare($sql);
    $insert_data = $singnup_data->execute();

    if($insert_data) {
        echo "<script> window.open('index.php','_self')</script>";
        exit();
    }
    else {
        echo"<script> alert('Registration is not successful'); window.location.href='signup.php';</script>";
    }

}
?>