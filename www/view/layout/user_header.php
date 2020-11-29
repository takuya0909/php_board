<?php
require_once(__DIR__ .'/../../confg/config.php');
require_once(__DIR__ .'/../../confg/action.php');
if (!isset($_SESSION)) {
  session_start();
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
<body>
<header class="user_header">
<p class="title">PHP-BOARD</p>
<nav>
<ul>
    <li><a href="http://192.168.99.100:8080/view/user/myhome.php">HOME</a></li>
    <li><a href="http://192.168.99.100:8080/view/post/index.php">POST</a></li>
    <li><a href="http://192.168.99.100:8080/view/user/index.php">USERS</a></li>
    <li><a href="http://192.168.99.100:8080/view/search/search_user.php">SEARCH</a></li>
  </ul>
</nav>
<p class="login_user" >welcome！　<?php echo $_SESSION['user']['name'] ?></p>
<div class="menu-btn">
 <i class="fa fa-bars" aria-hidden="true"></i>
</div>
    <div class="menu">
      <div class="menu__item">
       <a href="../post/create.php">post</a>
      </div>
      <div class="menu__item">
       <form action="" method="post">
         <input type="submit" name="logout" value="logout">
       </form>
      </div>
      <div class="menu__item">
        <a href="../user/update.php">update</a>
      </div>
      <div class="menu__item">
        <a href="../user/delete.php">withdrawal</a>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
  $('.menu-btn').on('click', function(){
    $('.menu').toggleClass('is-active');
});
</script>
</header>

