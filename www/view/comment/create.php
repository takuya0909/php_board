<?php
 require_once (dirname(__FILE__)."/../layout/user_header.php");
?>
<div class="comment-create">
  <p><?php if(isset($item)){ echo $item; } ?></p>
  <form class="comment-form" action="" method="post">
    <textarea class="comment" name="comment" id="" cols="20" rows="1"></textarea>
    <input class="comment-btn" type="submit" name="comment-create" value="コメント">
  </form>
</div>
</body>
</html>