<?php
        session_start();
        session_destroy();
        header("Location: login.php");
        exit();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php 
  include "navbar.php";
  ?>
    <h1> You must sign in </h1>
   
        <button href='login.php'>Click to Login</button>
   
</body>
</html>