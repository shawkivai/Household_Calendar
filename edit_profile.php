<?php
require ("DatabaseConnection.php");
session_start();
$username = $_SESSION['user'];
$data = $DBcon->prepare("SELECT * FROM tbl_user WHERE username = ?");
$data->execute([$username]);

/* Fetch all of the remaining rows in the result set */
$result = $data->fetch(PDO::FETCH_ASSOC);
return $result;
?>