<?php
include("moderation.php");

$id = $_GET['id'];
$deletesql = "DELETE FROM messages WHERE id = '$id';";

$data = mysqli_query($conn,$deletesql);

header('Location: moderation.php');