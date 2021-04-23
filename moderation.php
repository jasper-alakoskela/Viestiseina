<?php
    if(isset($_POST["submit"])) {
   
        if ($_POST["user_name"] != "admin" && $_POST["password"] != "admin") {
            echo "<script>alert('Kirjautuminen epäonnistui')</script>";
            echo "<script>location.href='moderation_sign-in.php'</script>";
            return false;
        }
    }

    // Tietokanta yhteys
    $dbserverName = "localhost";
    $dbuserName = "root";
    $dbpassWord = "";
    $dbname = "viestiseina";

    $conn = mysqli_connect($dbserverName, $dbuserName, $dbpassWord, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderaatio</title>
</head>
<body>

<style>
*{
    box-sizing: border-box;
}

body {
    background-color: #6EC5FF;
    font-family: 'Lato', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    width: 300px;
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

.link {
    background-color: #266FFF;
    border: 2px solid #266FFF;
    border-radius: 4px;
    color: #fff;
    display: block;
    font-family: inherit;
    font-size: 16px;
    padding: 5px;
    width: 100%; 
    margin-bottom: 2px;
    text-decoration: none;
}

.link:hover {
    background-color: #0A4DE9;
    border: 2px solid #0A4DE9;
}

</style>

<div class="container">
    <div class="header">
        <h2>Piilotetut Viestit</h2>
    </div>
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
                echo "<a class='link' href = 'delete_hidden.php?id=$row[id]'>Poista</a>";
                echo "<a class='link' href = 'show.php?id=$row[id]'>Näytä</a>" . '<br>';
            }
        }
    ?>
</div>

<div class="container">
    <div class="header">
        <h2>Näkyvät Viestit</h2>
    </div>
    <?php
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
                echo "<a class='link' href = 'delete.php?id=$row[id]'>Poista</a>";
                echo "<a class='link' href = 'hide.php?id=$row[id]'>Piilota</a>" . '<br>';
            }
        }
    ?>
</div>


</body>
</html>