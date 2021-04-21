<?php
include("validate_mod.php");
// VALIDOI JAVASCRIPTILLÄ!!!!!!!!!!!!!
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirjautuminen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<style>
    .error {
    color: red;
    font-size: 16px;
  }
  
  .succes {
    color: #13a100; 
    font-size: 20px;
    text-align: center;
    font-weight: bolder;
  }
    .my-custom-row {
    background-color: #9fb5ff ;
    font-size: larger;
    font-family: 'Lato', sans-serif;
    color: rgb(0, 0, 0);
    text-align: center;
}
</style>

<div class="container-fluid ">
<div class="row my-custom-row justify-content-center align-items-center">
    <div class="col-sm-12">
        <form action="moderation.php" method="POST">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" placeholder="Käyttäjänimi" aria-label="Username" aria-describedby="basic-addon1" name="userName" value="<?= $userName; ?>">
        <br><div class="row justify-content-center align-items-center"><span class="error"><?= $userName_err; ?></span></div><br>
        </div>

        <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="password" class="form-control" placeholder="Salasana" aria-label="Password" aria-describedby="basic-addon1" name="passWord" value="<?= $passWord; ?>">
        <br><div class="row justify-content-center align-items-center"><span class="error"><?= $passWord_err; ?></span></div><br>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Kirjaudu" name="submit">
            <br>
            <br>
        </form>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>