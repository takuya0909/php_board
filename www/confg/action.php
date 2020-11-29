<?php
//ログアウト
if(isset($_POST['logout'])){
  $User->logout();
}
//情報更新
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $pass = $_POST['pass'];
  $comment = $_POST['comment'];
  $User->updata($name,$pass,$comment,$id);
}
//ユーザー情報　削除
if(isset($_POST['user_delete'])){
  $id = $_SESSION['user']['id'];
  $name = $_SESSION['user']['name'];
  $pass = $_SESSION['user']['password'];
  $item = $User->delete($id,$name,$pass);
  $User->logout();
}
// 投稿作成
if(isset($_POST['post-submit'])){
  $id = $_SESSION['user']['id'];
  $name = $_SESSION['user']['name'];
  $post = $_POST['post'];
  $item = $PostRequest->create($id,$name,$post);
}
// 投稿の削除
if(isset($_POST['delete'])){
  $post_id = $_GET['id'];
  $Psot->delete($post_id);
}
//コメントの作成
if(isset($_POST['comment-create']))
 {
  $user_id = $_SESSION['user']['id'];
  $post_id = $_GET['post_id'];
  $username = $_SESSION['user']['name'];
  $comment = $_POST['comment'];
  $item = $CommentRequest->create($user_id,$post_id,$username,$comment);
 }
//コメントの削除
 if(isset($_GET['comment_id']))
{
  $comment_id = $_GET['comment_id'];
  $post_id = $_GET['post_id'];
  $items = $Comment->index($comment_id);

  if(isset($_POST['comment-delete']))
  {
    $Comment->delete($comment_id);
    header("Location: ../post/show.php?page=1&id={$post_id}");
  }
}
?>