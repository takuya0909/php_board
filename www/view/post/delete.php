<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
$post_id = $_GET['id'];
$items = $Psot->show($post_id);
?>
<div class="delete_contents">
  <p>投稿を削除しますか？</p>
  <form action="" method="post">
    <?php foreach($items as $row): ?>
      <p><?= $row['post']; ?></p>
      <input class="btn" type="submit" name="delete" value="delete">
    <?php endforeach; ?>
  </form>
</div>

</body>
</html>