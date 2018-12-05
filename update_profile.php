<?php 
require ("DatabaseConnection.php");

session_start();
$current_user = $_SESSION['user'];

if(isset($_POST['profile'])){

    $full_name =  $_POST['full_name'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];
    $family_name = $_POST['family_name'];
    $family_status = $_POST['family_status'];
    $phone_number = $_POST['phone_number'];
    $email= $_POST['email'];

    $imageName = $_FILES["image"]["name"];
    $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
    $imageType = $_FILES["image"]["type"];

    // if(substr($imageType,0,5)=="image")
    // {
    //    $dbQuery = $db->prepare("INSERT INTO blob ( name, image) VALUES ('$imageName', '$imageData')");
    //    $dbQuery->execute();
    // }
    // else
    // {
    //  echo "only images are allowed";
    // }

    // $fetch_user = "SELECT * FROM tbl_user";
    // $stmt = $DBcon->prepare($fetch_user);
    // $stmt->execute(); 
    // $user = $stmt->fetch();
    // echo($user);
    // die();

    // attempt insert query execution
    $sql = "UPDATE tbl_user SET family_name = ? , family_status = ?, phone_number = ?, full_name = ?, email = ?,  password = ?, user_role = ?, image = ? WHERE username = ?";
    $update_profile = $DBcon->prepare($sql);
    $data = $update_profile->execute([$family_name,$family_status,$phone_number,$full_name,$email,$password,$user_role,$imageData,$current_user]);

    if($data) {
        echo "<script> window.open('calendar_dashboard.php','_self')</script>";
        exit();
    }
    else {
        echo"<script> alert('Registration is not successful'); window.location.href='signup.php';</script>";
    }

}
else{
    echo "not updated";
}
?>