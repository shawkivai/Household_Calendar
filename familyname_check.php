<?php 
require ("DatabaseConnection.php");

// Escape user inputs for security

$family_name = $_POST['family_name'];


if(isset($family_name)){
    $fetch_family = "SELECT `family_name` FROM `tbl_user` WHERE `family_name`='$family_name'";
    $req = $DBcon->prepare($fetch_family);
    $req->execute();
    $events = $req->fetchAll(PDO::FETCH_COLUMN);
    
    if(count ($events)){
        echo 'taken';
    } else{
        echo 'nottaken';
    }
}
?>