<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 10; URL=$url");
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
    .my-custom-row {
    background-color: #9fb5ff ;
    font-size: larger;
    font-family: 'Lato', sans-serif;
    color: rgb(0, 0, 0);
    text-align: center;
}
</style>

<div class="row my-custom-row justify-content-center align-items-center">
    <div class="col-sm-12">
        <?php 
            // Tietokanta yhteys
            $dbserverName = "localhost";
            $dbuserName = "root";
            $dbpassWord = "";
            $dbname = "viestiseina";

            $conn = mysqli_connect($dbserverName, $dbuserName, $dbpassWord, $dbname);

        // Näytä data
        $show_messages = "SELECT * FROM messages;";
        $result = mysqli_query($conn, $show_messages);
        $checkResult = mysqli_num_rows($result);
        if ($checkResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['id'] . "<br>";
                echo $row['user_name'] . "<br>";
                echo $row['message'] . "<br>";
                echo $row['publish_time'] . "<br>";
                echo "<a href = 'delete.php?id=$row[id]'>Poista</a>" . '<br>';
                echo "<a href = 'hide.php?id=$row[id]'>Piilota</a>" . '<br><br>';
            }
        }
        ?>
    </div>
</div>

</body>
</html>