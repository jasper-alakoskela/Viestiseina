<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirjautuminen</title>
</head>
<body>
<style>
    *{
    box-sizing: border-box;
}

.error {
    color: red;
    font-size: 16px;
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
    width: 400px;
    max-width: 100%;
}

.header {
    background-color: #f7f7f7;
    border-bottom: 1px solid #f0f0f0;
    padding: 20px 40px;
}

.header h2 {
    margin: 0;
}

.form {
    padding: 30px 40px;
}

.form-control {
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label {
    display: inline-block;
    margin-bottom: 5px;
}

.form-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-family: inherit;
    font-size: 14px;
    padding: 10px;
    width: 100%;
}


.form button {
    background-color: #266FFF;
    border: 2px solid #266FFF;
    border-radius: 4px;
    color: #fff;
    display: block;
    font-family: inherit;
    font-size: 16px;
    padding: 10px;
    width: 100%; 
}
</style>

<div class="container">
    <div class="header">
        <h2>Kirjaudu</h2>
    </div>
    <form action="moderation.php" method="POST" class="form" id="form">
        <div class="form-control">
            <label>Käyttäjänimi</label>
            <input type="text" name="user_name">
        </div>
        <div class="form-control">
            <label>Salasana</label>
            <input type="password" name="password">
            <br>
        </div>

        <button id="submit" name="submit">Kirjaudu</button>
    </form>
</div>
</body>
</html>