<?php
// Anna muuttujille tyhjät arvot 
    $name_err = $message_err = "";
    $name = $message = $success = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

        $user_name = $_POST['name'];
        $message = $_POST['message'];

        // Tietokanta yhteys
        $connection = new mysqli('localhost','root','','','viestiseina');
        if ($connection -> connect_error){
            die('Yhteys Epäonnistui : '.$connection->connect_error);
        }
        else {
            $stmt = $connection->prepare("insert into messages(user_name, message) values(?, ?)");
            $stmt->bind_param("ss", $user_name, $message);
            $stmt->execute();
            $success = "Viesti on lähetetty onnistuneesti!";
            $stmt->close();
            $connection->close();
        }

        // Virhe viestien poisto
        if ($name_err == ''  && $message_err == '') {
            unset($_POST["submit"]);
                $name = $message = "";
            }

        function test_inputs($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }