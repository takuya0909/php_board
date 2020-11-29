<?php
  require_once(__DIR__ .'/../../confg/config.php');
  if(isset($_POST['login'])){
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $item = $UserRequest->LoginRequest($mail,$pass);
   }
   if(isset($_POST['sing']))
   {
     $name = $_POST['name'];
     $pass =$_POST['pass'];
     $mail = $_POST['mail'];
     $item = $UserRequest->SingupRequest($name,$pass,$mail);
   }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../destyle/destyle.css">
  <title>Document</title>
</head>
<header class="home_header">
  <a href="http://192.168.99.100:8080/view/index.php">PHP_BOARD</a>
  <a class="link-sing" href="http://192.168.99.100:8080/view/home/singup.php">SINGUP</a>
  <a class="link-login" href="http://192.168.99.100:8080/view/home/login.php">LOGIN</a>
</header>
<body>