<?php
include("moderation.php");

$id = $_GET['id'];

$conn->autocommit(false);
$conn->query("INSERT INTO hidden_messages (id, user_name, message, publish_time) SELECT id, user_name, message, publish_time FROM messages WHERE id = '$id';");
$conn->query("DELETE FROM messages WHERE id = '$id';");
$conn->commit();

header('Location: moderation.php');