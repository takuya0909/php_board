<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
require_once (dirname(__FILE__)."/../layout/pagination_layout.php");
$user_id = $_SESSION['user']['id'];
?>

<div class="user_date">
  <h1><?= $_SESSION['user']['name'] ?></h1>
  <p><?= $_SESSION['user']['comment'] ?></p>
  <table class="data">
    <tr>
      <td>post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
      <td>follow &nbsp;&nbsp;&nbsp;:</td>
      <td>follower&nbsp;:</td>
    </tr>
  </table>
</div>

<p class="conut"><?=  $mypost_conunt ?>件取得 <?= $page ?>/<?= $mypost_pagination ?></p>

<div class="myposts">
  <?php foreach($mypost_items as $item ): ?>
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
            <form action="../post/show.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="show">
            </form>
          </div>

          <div class="delete">
            <form action="../post/delete.php" method="get">
                <input type="text" name="id" id="" hidden value="<?= $item['id']; ?>">
                <input type="submit" value="delete">
            </form>
          </div>
        </div>
    </div>
  <?php endforeach; ?>

  <div class="pagination">
        <?php for ($x=1; $x <= $mypost_pagination ; $x++): ?>
          <a class="pagination_num" href="?page=<?= $x ?>"><?php echo $x; ?></a>
        <?php endfor; ?>
  </div>
</div>
</body>
</html>