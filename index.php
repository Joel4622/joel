<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='header'>
<?php
session_start();
if(!isset($_SESSION['email'])){
echo"
    <a href='index.php'>HOME</a> 
    <a href='login.php'>LOGIN </a>";
    }
   
       ?>
</div>

<p> WELCOME TO THE WEB DOCTOR</p>
</body>
</html>