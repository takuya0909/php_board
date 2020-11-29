<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
?>

<div class="search">
    <div class="select_search">
      <p>POST検索画面</p>
      <p><a href="search_user.php">USER検索へ</a></p>
    </div>
    <div class="search_input">
      <form action="" method="get">
          <input class="search_input" type="text" name="search_post" id="">
          <input class="search_submit" type="submit" name="search_post_submit" value="search">
      </form>
    </div>
  </div>

<?php if(isset($search_post_conunt)): ?>
  <?php if($search_post_conunt > 0): ?>
    <p class="conut magin"><?= $search_post_conunt ?>件取得 <?= $page ?>/<?= $search_post_pagination ?></p>

    <div class="myposts magin">
    <?php foreach($search_post_items as $row): ?>
      <div class="mypost">
        <h2><?= $row['name']; ?></h2>
        <p><?= $row['post']; ?></p>
        <div class="command">

          <div class="favo">
            <form action="#" method="get">
              <input type="text" name="id" id="" hidden value="<?= $row['id']; ?>">
              <input type="submit" value="favo">
            </form>
          </div>

          <div class="show">
            <form action="../post/show.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $row['id']; ?>">
                <input type="submit" value="show">
            </form>
          </div>

          <?php if($_SESSION['user']['id'] === $row['user_id']): ?>
            <div class="delete">
              <form action="delete.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $row['id']; ?>">
                <input type="submit" value="delete">
              </form>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
    </div>

    <div class="pagination">
      <?php for ($x=1; $x <= $search_post_pagination ; $x++): ?>
        <a class="pagination_num" href="?search_post=<?= $_GET['search_post'] ?>&page=<?= $x ?>">
          <?php echo $x; ?>
        </a>
      <?php endfor; ?>
   </div>

  <?php else: ?>
    <p class="seach_error">該当するデータなし</p>
  <?php endif; ?>
<?php else: ?>
  <p class="seach_error"><?if(isset($error)){ echo $error; } ?></p>
<?php endif; ?>