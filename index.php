<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Viestiseinä</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php include('functions.php'); ?>

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
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" placeholder="Nimi" aria-label="Username" aria-describedby="basic-addon1" name="name" value="<?= $name; ?>">
        <br><div class="row justify-content-center align-items-center"><span class="error"><?= $name_err; ?></span></div><br>
        </div>

        <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <textarea placeholder="Lisää viesti" class="form-control" aria-label="With textarea" name="message" value="<?= $message; ?>"></textarea>
        <br><div class="row justify-content-center align-items-center"><span class="error"><?= $message_err; ?></span></div><br>
        </div>
        <br>
        <input class="btn btn-primary" type="submit" value="Submit">
            <br><br>
            <br><div class="row justify-content-center align-items-center"><div class="succes"><?= $success; ?></div></div><br> 
        </form>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
