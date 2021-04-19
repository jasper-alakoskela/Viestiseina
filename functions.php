<?php

// Anna muuttujille tyhjät arvot 
    $name_err = $message_err = "";
     $name = $message = $success = "";

     if(isset($_POST["send"])) {
        
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
            $message_err = "Palaute Tarvitaan!";
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
            unset($_POST["send"]);
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
            
        $sql = "INSERT INTO messages (user_name, message) VALUES ('$name', '$message');";
        mysqli_query($conn, $sql);


    }


    // Anna muuttujille tyhjät arvot 
    $userName_err = $passWord_err = "";
     $userName = $passWord = "";

     if(isset($_POST["sign-in"])) {
        
        // Validoi käyttäjänimikenttä
        if (empty($_POST["userName"])) {
            $userName_err = "Käyttäjänimi Tarvitaan!";
            return false;
        }

        else if ($userName != "admin") {
                $name_err = "Väärä Käyttäjänimi!";
                return false;
            }
        
        // Validoi salasanakenttä
        if (empty($_POST["passWord"])) {
            $passWord_err = "Salasana Tarvitaan!";
            return false;
        }

        else if ($passWord != "admin") {
                $passWord_err = "Väärä Salasana!";
                return false;
            }

        // Virhe viestien poisto
        if ($userName_err == ''  && $passWord_err == '') {
            unset($_POST["sign-in"]);
                $name = $message = "";
            } 

    }

    //Korjaus funktio
    function test_inputs($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }