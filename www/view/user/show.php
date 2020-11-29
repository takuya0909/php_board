<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
if(!empty($_GET['id']))
{
  $user_items = $User->show($_GET['id']);
  $post_items = $Psot->mypost($_GET['id']);
}
?>

<div class="user_date">
  <?php foreach($user_items as $item): ?>
  <h1><?= $item['name']  ?></h1>
  <p><?= $item['comment']  ?></p>
  <?php endforeach; ?>
  <table class="data">
    <tr>
      <td>post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   :</td>
      <td>follow &nbsp;&nbsp;&nbsp;:</td>
      <td>follower&nbsp;:</td>
    </tr>
  </table>
</div>

<div class="myposts">
  <?php foreach($post_items  as $item ): ?>
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
        </div>
    </div>
  <?php endforeach; ?>
  </div>