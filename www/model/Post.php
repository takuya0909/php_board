<?php
require_once (dirname(__FILE__)."/Database.php");

class Post extends Database
{
  //post 一覧
  function index($sql)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }
  //mypost 一覧
  function mypost($sql,$user_id)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':user_id'=>$user_id));
    return $stmt;
  }
  // post 詳細
  function show($sql,$id)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    return $stmt;
  }
  //post 作成
  function create($sql,$id,$name,$post)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array($id,$name,$post));
    return $stmt;
  }
 //post 削除
  function delete($sql,$id)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    return $stmt;
  }
}
?>