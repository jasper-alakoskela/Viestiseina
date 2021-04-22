<?php

// Anna muuttujille tyhjät arvot 
    $name_err = $message_err = "";
     $name = $message = $success = "";


     if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Validoi nimikenttä
        if (empty($_POST["name"])) {
            $name_err = "Nimi Tarvitaan!";
            return false;
        }
        else {
            $name = test_inputs($_POST["name"]);
            if (!preg_match("/^[a-äA-Ä ]*$/",$name)) {
                $name_err = "Käytä vain aakkosia a-ä, A-Ä!";
                return false;
            }
        }
        
        // Validoi viestikenttä
        if (empty($_POST["message"])) {
            $message_err = "Viesti Tarvitaan!";
            return false;
        }
        else {
            $message = test_inputs($_POST["message"]);
            if (!preg_match("/^[a-äA-Ä ]*$/",$message)) {
                $message_err = "Käytä vain aakkosia a-ä, A-Ä";
                return false;
            }
        }


        // Virhe viestien poisto
        if ($name_err == ''  && $message_err == '') {
            unset($_POST["submit"]);
                $name = $message = "";
                $succes = "Viesti lähetetty onnistuneesti!";
            } 
            
            // Tietokanta yhteys
        $dbserverName = "localhost";
        $dbuserName = "root";
        $dbpassWord = "";
        $dbname = "viestiseina";

        $conn = mysqli_connect($dbserverName, $dbuserName, $dbpassWord, $dbname);    

        // tiedot tietokantaan
        $name = $_POST['name'];
        $message = $_POST['message'];
            
        $sql = "INSERT INTO hidden_messages (user_name, message) VALUES ('$name', '$message');";
        mysqli_query($conn, $sql);

    }


    //Korjaus funktio
    function test_inputs($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }