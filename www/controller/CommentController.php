<?php
require_once(dirname(__FILE__)."/../model/Comment.php");

class CommentController
{
  // commment 一覧取得
  function index($id)
  {
    $obj = new Comment();
    $sql = "SELECT * FROM comment WHERE id={$id}";
    $items = $obj->index($sql);
    return $items;
  }
 //comment 作成
  function create($user_id,$post_id,$username,$comment)
  {
    $obj = new Comment();
    $sql = "INSERT INTO comment(user_id,post_id,name,comment) values (?,?,?,?)";
    $obj->create($sql,$user_id,$post_id,$username,$comment);
    header('Location: ../post/show.php?id='.$post_id);
  }
 //comment 削除
  function delete($id)
  {
    $obj = new Comment();
    $sql = "DELETE FROM comment WHERE id=:id";
    $obj->delete($sql,$id);
  }
}
?>