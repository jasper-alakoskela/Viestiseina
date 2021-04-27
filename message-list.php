<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 5; URL=$url");
   include("mysql_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestiseinä</title>
</head>
<body>


<style>
    body {
    background-color: #6EC5FF;
    font-family: 'Lato', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    font-size: 24px;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    width: 400px;
    max-width: 100%;
    text-align: center;
    margin: 5px;
}

.header {
    background-color: #f7f7f7;
    border-bottom: 1px solid #f0f0f0;
    padding: 20px 40px;
}

.header h2 {
    margin: 0;
}
</style>

<div class="container">
    <div class="header">
        <h2>Viestit</h2>
    </div>
    <?php

        // Näytä data
        $show_messages = "SELECT * FROM messages;";
        $result = mysqli_query($conn, $show_messages);
        $checkResult = mysqli_num_rows($result);
        if ($checkResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['user_name'] . "<br><br>";
                echo $row['message'] . "<br><br>";
                echo $row['publish_time'] . "<br><hr><br>";
            }
        }
    ?>
</div>
</body>
</html>