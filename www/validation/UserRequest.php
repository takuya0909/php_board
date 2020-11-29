<?php
  require_once (dirname(__FILE__)."/../controller/UserController.php");

  class UserRequest
  {
    //ログイン　バリデーション
    function LoginRequest($mail,$pass)
    {
      if(empty($mail) || empty($pass))
      {
       $error = '入力して下さい';
       return  $error;
      }
      else
      {
       $obj = new UserController();
       $error = $obj->login($mail,$pass);
       $error = '情報が一致しません';
        return $error;
      }
    }

    //新規登録　バリデーション
    function SingupRequest($name,$pass,$mail)
    {
      if(empty($name) && empty($pass) && empty($mail))
      {
        $error = '入力してください';
        return $error;
      }
      elseif(empty($name) || empty($pass) || empty($mail))
      {
        $error = '未入力があります';
        return $error;
      }
      elseif(mb_strlen($name) > 8)
      {
        $error='8文字以上で入力してください';
        return $error;
      }
      elseif(mb_strlen($pass) > 16)
      {
        $error = '16文字以内で入力してください';
        return $error;
      }
      elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\?\*\[|\]%'=~^\{\}\/\+!#&\$\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/", $mail))
      {
        $error = 'メールアドレスの形式で入力してください';
        return $error;
      }
      else
      {
        $obj = new UserController;
        $items = $obj->index();

        foreach($items as $item)
        {
          if($mail === $item['email'])
          {
            $error = 'このアドレスは使用出来ません';
            return $error;
          }
          elseif($pass === $item['password'])
          {
            $error='このパスワードは使用出来ません';
            return $error;
          }
          elseif($mail !== $item['email'] && $pass !== $item['password'])
          {
            $obj->singup($name,$pass,$mail);
            $msse ='登録完了!!';
            return $msse;
          }
        }
      }
    }
  }
?>