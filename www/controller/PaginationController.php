<?php
require_once(dirname(__FILE__)."/../model/Pagination.php");

class PaginationController
{
  function mypost_page_data($start,$user_id)
  {
    $obj = new Pagination();
    $sql="SELECT * FROM posts WHERE user_id={$user_id} LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }

  function mypost_page_conunt($user_id)
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM posts WHERE user_id={$user_id}";
    $items = $obj->page_conunt($sql);
    return $items;
  }

  function post_page_data($start)
  {
    $obj = new Pagination();
    $sql="SELECT * FROM posts LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }

  function post_page_conunt()
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM posts";
    $items = $obj->page_conunt($sql);
    return $items;
  }


  function user_page_data($start)
  {
    $obj = new Pagination();
    $sql="SELECT * FROM users LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }

  function user_page_conunt()
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM users";
    $items = $obj->page_conunt($sql);
    return $items;
  }

  function comments_page_data($start,$post_id)
  {
    $obj = new Pagination();
   $sql="SELECT * FROM comment WHERE post_id={$post_id} LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }

  function comments_page_conunt($post_id)
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM comment WHERE post_id={$post_id}";
    $items = $obj->page_conunt($sql);
    return $items;
  }
}
?>