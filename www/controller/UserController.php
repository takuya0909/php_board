<?php
require_once(dirname(__FILE__)."/../model/User.php");
session_start();
class UserController
{
  //user一覧取得
  function index()
  {
    $obj = new User();
    $sql = "SELECT * FROM users";
    $items = $obj->index($sql);
    return $items;
  }
 //login情報取得
 function login($mail,$pass)
 {
  $flg = 0;
  $obj = new User();
  $sql="SELECT * FROM users WHERE email=:mail AND password=:pass AND del_flg=:flg";
  $items=$obj->login($sql,$mail,$pass,$flg);
  unset($_SESSION['user']);
  foreach($items as $item)
  {
    $_SESSION['user'] =
    [
      'id'=>$item['id'],
      'name'=>$item['name'],
      'password'=>$item['password'],
      'comment'=>$item['comment'],
      'flg'=>$item['del_flg'],
    ];
    if(!isset($_SESSION['user'])){
      $item = '情報が一致しません';
      return $item;
    }
    elseif(isset($_SESSION['user'])){
      header("Location: ../user/myhome.php");
     }
  }
 }

 //logout
 function logout()
 {
    session_destroy();
    header("Location: ../index.php");
 }

 //新規登録
 function singup($name,$pass,$mail)
 {
  date_default_timezone_set('Asia/Tokyo');
  $obj = new User();
  $data = date("Y/m/d H:i:s");
  $sql = "INSERT INTO users(name,password,email,sing) values (?,?,?,?)";
  $obj->singup($sql,$name,$pass,$mail,$data);
 }

 //退会
 function delete($id,$name,$pass)
  {
    $obj = new User();
    $sql = "UPDATE users SET del_flg=1 WHERE id=:id AND name=:name AND password=:pass";
    $obj->delete($sql,$id,$name,$pass);
    header("Location: ../index.php");
  }

  //user情報更新
  function updata($name,$pass,$comment,$id)
  {
    $obj = new User();
    $sql = "UPDATE users SET name = :name , password = :pass , comment = :comment WHERE id = :id";
    $obj->updata($sql,$name,$pass,$comment,$id);
    header("Location: ../home/login.php");
  }

  function show($id)
  {
    $obj = new User();
    $sql = "SELECT * FROM users WHERE id=:id";
    $items = $obj->show($sql,$id);
    return $items;
  }
}

?>