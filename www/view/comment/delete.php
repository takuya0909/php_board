<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");

?>
<div class="delete_contents">
  <p>コメントを削除しますか？</p>
  <form action="" method="post">
    <?php foreach($items as $row): ?>
      <p class="content"><?= $row['comment']; ?></p>
      <input class="btn" type="submit" name="comment-delete" value="delete">
    <?php endforeach; ?>
  </form>
</div>

</body>
</html>