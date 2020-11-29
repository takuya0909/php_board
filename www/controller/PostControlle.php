<?php
require_once(dirname(__FILE__)."/../model/Post.php");

class PostControlle
{
 //post　一覧
  function index()
  {
    $obj = new Post();
    $sql="SELECT * FROM posts";
    $items = $obj->index($sql);
    return $items;
  }
  //mypost　一覧
  function mypost($user_id)
  {
    $obj = new Post();
    $sql = "SELECT * FROM posts WHERE user_id=:user_id LIMIT 0, 3";
    $items = $obj->mypost($sql,$user_id);
    return $items;
  }
  //post 詳細
  function show($id)
  {
    $obj = new Post();
    $sql = "SELECT * FROM posts WHERE id=:id";
    $items = $obj->show($sql,$id);
    return $items;
  }
  //post 作成
  function create($id,$name,$post)
  {
    $obj = new Post();
    $sql = "INSERT INTO posts(user_id,name,post) values (?,?,?)";
    $obj->create($sql,$id,$name,$post);
    header('Location: ../post/index.php');
  }
 //post 削除
  function delete($id)
  {
    $obj = new Post();
    $sql = "DELETE FROM posts WHERE id=:id";
    $obj->delete($sql,$id);
    header("Location: index.php");
  }
}
?>