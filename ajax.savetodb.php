<?php require_once('class.mysql.php');

$mysql = new Mysql();

$perm_id = $_POST['perm_id'];
$image_url = $_POST['image_url'];
$image_type = $_POST['image_type'];
$recipient_name = $_POST['recipient_name'];
$recipient_email = $_POST['recipient_email'];
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];


echo $mysql->saveToDb( $perm_id , $image_url , $recipient_email, $recipient_name, $sender_email, $sender_name, $image_type );


?>