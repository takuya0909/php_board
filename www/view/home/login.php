<?php
require_once (dirname(__FILE__)."/../layout/header.php");
?>
<div class="view-home">
  <div class="title">
    <span>P</span>
    <span>H</span>
    <span>P</span>
    <span>-</span>
    <span>B</span>
    <span>O</span>
    <span>A</span>
    <span>R</span>
    <span>D</span>
  </div>
  <p class="error"><?php if(isset($item)){ echo $item;} ?></p>
  <form   action="" method="post">
    <div class="login_form">
        <p>mail:<input class="name" type="text" name="mail" id="" value="<?php if(isset($mail)){ echo $mail;}?>"></p>
        <p>password:<input class="pass" type="password" name="pass" id="" value="<?php if(isset($pass)){ echo $pass;}?>"></p>
    </div>
    <p class="submit"><input type="submit" name="login" value="LOGIN"></p>
  </form>
</div>
<?php require_once (dirname(__FILE__)."/../layout/footer.php");  ?>