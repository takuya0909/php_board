<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
$post_id = $_GET['id'];
$item = $Psot->show($post_id);
?>

<p class="conut"><?= $comeent_conunt ?>件取得 <?= $page ?>/<?= $comment_pagination ?></p>

<div class="show">
  <form class="post-user" action="../comment/create.php" method="get">
    <?php foreach($item as $show): ?>
      <h2 class="post-name"><?= $show['name']; ?></h2>
      <p class="post-post"><?= $show['post']; ?></p>
    <?php endforeach; ?>
    <input type="text" name="post_id" id="" hidden value="<?= $show['id']; ?>">
    <input class="commnet-btn" type="submit" value="コメントする">
  </form>

  <?php foreach($comment_items as $row): ?>
   <div class="comments">
      <h3 class="comment-user"><?= $row['name']; ?></h3>
      <p class="comment"><?= $row['comment']; ?></p>
      <?php if($_SESSION['user']['id'] === $row['user_id']): ?>
      <div class="delete">
        <form action="../comment/delete.php" method="get">
         <input type="text" name="comment_id" id="" hidden value="<?= $row['id']; ?>">
         <input type="text" name="post_id" id="" hidden value="<?=$post_id ; ?>">
         <input type="submit" value="delete">
        </form>
      </div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>

  <div class="pagination">
        <?php for ($x=1; $x <= $comment_pagination ; $x++): ?>
          <a class="pagination_num" href="?page=<?= $x ?>&id=<?=$post_id ?>"><?php echo $x; ?></a>
        <?php endfor; ?>
  </div>
</div>
</body>
</html>