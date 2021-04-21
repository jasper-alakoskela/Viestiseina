<?php
include("moderation.php");

$id = $_GET['id'];

$conn->autocommit(false);
$conn->query("INSERT INTO messages (id, user_name, message, publish_time) SELECT id, user_name, message, publish_time FROM hidden_messages WHERE id = '$id';");
$conn->query("DELETE FROM hidden_messages WHERE id = '$id';");
$conn->commit();

header('Location: moderation.php');