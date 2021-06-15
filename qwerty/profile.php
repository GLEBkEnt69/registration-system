<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profilь</title>
    <style>
    .p_1{
        text-align: center;
        font-size: 24px;
        margin-top: 15px;
    }
    </style>
</head>
<body>
    <h1>profilь</h1>
    <form class = "p_1">
    <span>login </span> <span><?=$_SESSION['user']['login']?></span>
    <br>
    <span>email </span> <span><?=$_SESSION['user']['email']?></span>
    </form>
</body>
</html>