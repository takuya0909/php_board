<?php
require_once (dirname(__FILE__)."/../controller/PostControlle.php");

class PostRequest
{
  function create($id,$name,$post)
  {
    if(empty($post)){
      $error = '入力してください';
      return $error;
    }
    elseif(mb_strlen($post) > 30)
    {
      $error = '30文字以内で入力してください';
      return $error;
    }
    else
    {
      $obj = new PostControlle();
      $obj->create($id,$name,$post);
    }
  }
}

?>