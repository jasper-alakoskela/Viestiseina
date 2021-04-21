<?php

    // Muuttujille tyhjät arvot
    $userName_err = $passWord_err = "";
    $userName = $passWord = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
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
            unset($_POST["submit"]);
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