<?php
require_once (dirname(__FILE__)."/Database.php");

class User extends Database
{
  //user一覧　取得
  function index($sql)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }

  //login情報　取得
  function login($sql,$mail,$pass,$flg)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':mail'=>$mail,':pass'=>$pass,':flg'=>$flg));
    return $stmt;
  }

  //新規登録
  function singup($sql,$name,$pass,$mail,$data)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array($name,$pass,$mail,$data));
    return $stmt;
  }

  //退会
  function delete($sql,$id,$name,$pass)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':id'=>$id,':name'=>$name,':pass'=>$pass));
    return $stmt;
  }

  //user情報更新
  function updata($sql,$name,$pass,$comment,$id)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':name'=>$name,':pass'=>$pass,':comment'=>$comment,':id'=>$id));
    return $stmt;
  }

  function show($sql,$id)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    return $stmt;
  }
}