<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
?>

<p class="conut"><?= $post_conunt ?>件取得 <?= $page ?>/<?= $post_pagination ?></p>

<div class="myposts">
  <?php foreach($post_items as $item ): ?>
    <div class="mypost">
      <h2><?= $item['name']; ?></h2>
      <p><?= $item['post']; ?></p>
        <div class="command">
          <div class="favo">
            <form action="#" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="favo">
            </form>
          </div>

          <div class="show">
            <form action="show.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="show">
            </form>
          </div>

          <?php if($_SESSION['user']['id'] === $item['user_id']): ?>
          <div class="delete">
            <form action="delete.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="delete">
            </form>
          </div>
          <?php endif; ?>
        </div>
    </div>
  <?php endforeach; ?>

  <div class="pagination">
        <?php for ($x=1; $x <= $post_pagination ; $x++): ?>
          <a class="pagination_num" href="?page=<?= $x ?>"><?php echo $x; ?></a>
        <?php endfor; ?>
  </div>
</div>

