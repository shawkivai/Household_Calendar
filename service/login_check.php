<?php
require ("DatabaseConnection.php");
session_start();
if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    //$employee_name=$_POST['employee_name'];

    // $username = mysqli_real_escape_string($connect,$offiece_id);
    // $password = mysqli_real_escape_string($connect, $password);
    $query = "select * from tbl_user where username='$username' and password='$password'";
    
    $req = $DBcon->prepare($query);
    $req->execute();
    $login_check = $req->fetch(PDO::FETCH_ASSOC);
    // $users = $login_check->fetchColumn();
    // $run=mysqli_query($connect,$query);
    if($login_check > 0) {
        $_SESSION['user']=$username;
        $_SESSION['user_id'] = $login_check['user_id'];
        $_SESSION['family_name'] = $login_check['family_name'];
        $_SESSION['user_role'] = $login_check['user_role'];
        $_SESSION['family_status'] = $login_check['family_status'];
        echo "<script> window.open('../calendar_dashboard.php','_self')</script>";
        exit();
    }
    else {
        echo"<script> alert('user not verified'); window.location.href='../index.php';</script>";
    }
}
?>