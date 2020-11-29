<?php
require_once (dirname(__FILE__)."/../layout/user_header.php");
?>
<div class="delete-user">
    <h2 class="delete-name"><?= $_SESSION['user']['name'] ?></h2>
    <p class="delete-text">上記、ユーザーを削除しますか？</p>
    <form action="" method="post">
      <input class="delete-btn" type="submit" value="OK" name="user_delete">
    </form>
</div>
</body>
</html>