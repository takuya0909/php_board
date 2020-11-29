<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
?>

<div class="post_create">
  <p class="error"><?php if(isset($item)){ echo $item;} ?></p>
  <form action="" method="post">
    <textarea name="post" cols="20" rows="1" maxlength="20"></textarea>
    <input type="submit" name="post-submit"　 value="投稿">
  </form>
</div>
</body>
</html>