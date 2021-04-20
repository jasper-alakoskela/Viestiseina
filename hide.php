<?php
include("moderation.php");

$id = $_GET['id'];
$hidesql = "INSERT INTO hidden_messages (id, user_name, message, publish_time) SELECT id, user_name, message, publish_time FROM messages WHERE id = '$id'; DELETE FROM messages WHERE id = '$id';";


$data = mysqli_query($conn,$hidesql);


header('Location: moderation.php');