
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderaatio</title>
</head>
<body>


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


    <?php    
        // Näytä piilotettu data
        $show_hidden_messages = "SELECT * FROM hidden_messages;";
        $result = mysqli_query($conn, $show_hidden_messages);
        $checkResult = mysqli_num_rows($result);
        if ($checkResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['id'] . "<br>";
                echo $row['user_name'] . "<br>";
                echo $row['message'] . "<br>";
                echo $row['publish_time'] . "<br>";
                echo "<a href = 'delete.php?id=$row[id]'>Poista</a>" . '<br>';
                echo "<a href = 'show.php?id=$row[id]'>Näytä</a>" . '<br><br>';
            }
        }
    ?>
</body>
</html>