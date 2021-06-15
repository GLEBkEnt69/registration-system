<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
    <div class="reg">
<h1>Registration</h1>
<form action="blan/insertdb.php" method="POST">
    <input type="text" name = "login" placeholder="insert login">
    <br>
    <input type="email" name = "email" placeholder="insert email">
    <br>
    <input type="password" name = "password" placeholder="insert password">
    <br>
    <input type="password" name = "password2" placeholder="insert password">
    <button>
    lets go
    </button>
    <?php
if ($_SESSION["message"]){
    echo"<p style = 'text-align: center; font-size: 24px; margin-top: 10px;'>", $_SESSION["message"], "</p>";
}
unset($_SESSION["message"]);
?>
</form>
    </div>
</body>
</html>