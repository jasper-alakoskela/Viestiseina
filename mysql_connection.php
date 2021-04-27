<?php
// Tietokanta yhteys
    $dbserverName = "localhost";
    $dbuserName = "alakoskela.jasper";
    $dbpassWord = "**********";
    $dbname = "alakoskela.jasper.db";

    $conn = mysqli_connect($dbserverName, $dbuserName, $dbpassWord, $dbname);