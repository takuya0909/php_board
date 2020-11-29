<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
?>
  <div class="search">
    <div class="select_search">
      <p>USER検索画面</p>
      <p><a href="search_post.php">POST検索へ</a></p>
    </div>
    <div class="search_input">
      <form action="" method="get">
          <input class="search_input" type="text" name="search_user" id="">
          <input class="search_submit" type="submit" name="search_user_submit" value="search">
      </form>
    </div>
  </div>

<?php if(isset($search_user_conunt)): ?>
  <?php if($search_user_conunt > 0): ?>
    <p class="conut magin"><?= $search_user_conunt ?>件取得 <?= $page ?>/<?= $search_user_pagination ?></p>

    <div class="users_index magin">
    <?php foreach($search_user_items as $row): ?>
      <div class="user">
        <h2><?= $row['name']; ?></h2>
        <p><?= $row['comment']; ?></p>
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
      <?php for ($x=1; $x <= $search_user_pagination ; $x++): ?>
        <a class="pagination_num" href="?search_user=<?= $_GET['search_user'] ?>&page=<?= $x ?>"><?php echo $x; ?></a>
      <?php endfor; ?>
   </div>
  <?php else: ?>
    <p class="seach_error">該当するデータなし</p>
  <?php endif; ?>
<?php else: ?>
    <p class="seach_error"><?if(isset($error)){ echo $error; } ?></p>
<?php endif; ?>