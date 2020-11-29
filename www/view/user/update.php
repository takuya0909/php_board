<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
?>
<div class="update">
  <form action="" method="post">
    <input type="text" name="id" id="" hidden value="<?= $_SESSION['user']['id'] ?>">
    <p>user:<input type="text" name="name" id="" value="<?= $_SESSION['user']['name'] ?>"></p>
    <p>pass: <input type="password" name="pass" id=""></p>
    <p class="comment">comment:
    <textarea name="comment" id="" cols="20" rows="3"></textarea>
    </p>
    <p><input class="submit" type="submit" name="update" value="更新"></p>
  </form>
</div>
</body>
</html>