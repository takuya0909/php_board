<?php
require_once (dirname(__FILE__)."/Database.php");

class Comment extends Database
{
  // commment 一覧取得
  function index($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
 //comment 作成
  function create($sql,$user_id,$post_id,$username,$comment)
  {
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute(array($user_id,$post_id,$username,$comment));
    return $stmt;
  }
  //comment 削除
  function delete($sql,$id)
  {
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    return $stmt;
  }
}
?>