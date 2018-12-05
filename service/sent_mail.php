<?php
session_start();
require ("DatabaseConnection.php");
$current_user = $_SESSION['user'];
if(isset($_POST['email_submit'])){

    $to      = $_POST['invite_mail'];
    $subject = 'Invitation to our channel';
    $message = 'hello we invite you to our channel';
    $headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

}

?>