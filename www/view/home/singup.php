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
      <form  action="" method="post">
        <div class="sing_form">
          <p>name:<input class="name" type="text" name="name" id="" value=<?php $name; ?>></p>
          <p>password:<input class="pass" type="password" name="pass" id="" value=<?php $pass; ?> ></p>
          <p>mail:<input class="mail" type="email" name="mail" id="" value=<?php $mail; ?>></p>
        </div>
        <p class="submit"><input type="submit" name="sing" value="SINGUP"></p>
      </form>
  </div>

  <?php require_once (dirname(__FILE__)."/../layout/footer.php");  ?>