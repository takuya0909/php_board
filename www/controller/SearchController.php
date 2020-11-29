<?php
require_once(dirname(__FILE__)."/../model/Pagination.php");

class SearchController
{
  function search_user_conunt($user)
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM users WHERE name LIKE '%".$user."%'";
    $items = $obj->page_conunt($sql);
    return $items;
  }

  function search_user_data($user,$start)
  {
    $obj = new Pagination();
    $sql="SELECT * FROM users WHERE name LIKE '%".$user."%' LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }

  function search_post_conunt($post)
  {
    $obj = new Pagination();
    $sql = "SELECT COUNT(*) FROM posts WHERE post LIKE '%".$post."%'";
    $items = $obj->page_conunt($sql);
    return $items;
  }

  function search_post_data($post,$start)
  {
    $obj = new Pagination();
    $sql="SELECT * FROM posts WHERE post LIKE '%".$post."%' LIMIT {$start}, 3";
    $items = $obj->page_data($sql);
    return $items;
  }
}
?>