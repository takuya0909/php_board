<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
?>

<p class="conut"><?= $user_conunt ?>件取得 <?= $page  ?>/<?= $user_pagination ?></p>

<div class="users_index">
  <?php foreach($user_items as $item): ?>
    <div class="user">
      <h2><?= $item['name']; ?></h2>
      <p><?= $item['comment']; ?></p>
        <div class="command">
          <div class="follow">
              <form action="#" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="follow">
              </form>
          </div>

          <div class="show">
            <form action="show.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="show">
            </form>
          </div>
        </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="pagination">
        <?php for ($x=1; $x <= $user_pagination ; $x++): ?>
          <a class="pagination_num" href="?page=<?= $x ?>"><?php echo $x; ?></a>
        <?php endfor; ?>
</div>