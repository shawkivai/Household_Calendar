<?php 
require ("DatabaseConnection.php");

// Escape user inputs for security

if(isset($_POST['signup'])){

    $full_name =  $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];
    $family_status = $_POST['family_status'];
    $phone_number = $_POST['phone_number'];
    $join_family = isset($_POST['join_family']) ? $_POST['join_family'] : '';
    $family_name = !empty($_POST['family_name']) ? $_POST['family_name'] : $join_family;
    $email= $_POST['email'];

    // attempt insert query execution
        $sql = "INSERT INTO tbl_user (family_name, family_status, phone_number, full_name, username,  password, user_role, email) VALUES ('$family_name','$family_status','$phone_number','$full_name','$username','$password','$user_role','$email')";
        $singnup_data = $DBcon->prepare($sql);
        $insert_data = $singnup_data->execute();

        if($insert_data) {
            echo "<script> window.open('login.php','_self')</script>";
            exit();
        }
        else {
            echo"<script> alert('Registration is not successful'); window.location.href='signup.php';</script>";
        }

    }
?>