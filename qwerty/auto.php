<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
    <div class="auto">
        <h1>Authorization</h1>
        <form action="blan/autodb.php" method="post">
<input type="text" name="login" placeholder="login">
<br>
<input type="password" name="password" placeholder="password">
<br>
<button type = "submit">
log in 
</button>
<?php
if ($_SESSION["message"]){
    echo"<p style = 'text-align: center; font-size: 24px; margin-top: 10px;'>", $_SESSION["message"], "</p>";
}
unset($_SESSION["message"]);
?>
        </form>
    </div>
    <!--<img src="style/tenor.gif" alt="">-->
</body>
</html>