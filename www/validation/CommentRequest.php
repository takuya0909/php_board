<?php
require_once(dirname(__FILE__)."/../controller/CommentController.php");

class CommentRequest
{
  function create($user_id,$post_id,$username,$commnet)
  {
    if(empty($commnet))
    {
      $error = '未入力です。';
      return $error;
    }
    elseif(mb_strlen($commnet) > 30)
    {
      $error = '30文字以内で入力してください';
      return $error;
    }
    else
    {
      $obj = new CommentController();
      $obj->create($user_id,$post_id,$username,$commnet);
    }
  }
}

?>