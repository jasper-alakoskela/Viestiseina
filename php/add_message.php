<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style_add_message.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestiseinä</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<?php include('functions.php'); ?>
<div class="form">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name">Nimi</label>
        <br><br>
        <input type="text" name="name" value="<?= $name; ?>">
        <br><span class="error"><?= $name_err; ?></span><br>
        
        <label for="message">Viesti</label>
        <br><br>
        <textarea name="message" cols="30" rows="5" value="<?= $message; ?>"></textarea>
        <br><span class="error"><?= $message_err; ?></span><br>
        
        <input id="submit" type="submit" name="submit">
        <br><br>
        <div class="succes"><?= $success; ?></div>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" 
integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
 integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>