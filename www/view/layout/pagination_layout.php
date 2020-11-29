<?php
 // GETで現在のページ数を取得する（未入力の場合は1を挿入）
if (empty($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET['page'];
}

// スタートのポジションを計算する
if ($page > 1)
{
  // 例：２ページ目の場合は、『(2 × 10) - 10 = 10』
    $start = ($page * 3) - 3;
}
else
{
    $start = 0;
}

$mypost_items = $Pagination->mypost_page_data($start,$_SESSION['user']['id']);
$mypost_conunt = $Pagination->mypost_page_conunt($_SESSION['user']['id']);
$mypost_pagination = ceil($mypost_conunt / 3);

$post_items = $Pagination->post_page_data($start);
$post_conunt = $Pagination->post_page_conunt();
$post_pagination = ceil($post_conunt / 3);

$user_items = $Pagination->user_page_data($start);
$user_conunt = $Pagination->user_page_conunt();
$user_pagination = ceil($user_conunt / 3);

if(!empty($_GET['id']))
{
 $comment_items = $Pagination->comments_page_data($start,$_GET['id']);
 $comeent_conunt = $Pagination->comments_page_conunt($_GET['id']);
 $comment_pagination = ceil($comeent_conunt / 3);
}

//use検索
if(isset($_GET['search_user_submit']))
{
  if(!empty($_GET["search_user"]))
  {
    $search_user_items = $Search->search_user_data($_GET['search_user'],$start);
    $search_user_conunt = $Search->search_user_conunt($_GET['search_user']);
    $search_user_pagination = ceil($search_user_conunt / 3);
  }
  else
  {
    $error = '検索';
  }
}
//post検索
if(isset($_GET['search_post_submit']))
{
  if(!empty($_GET["search_post"]))
  {
    $search_post_items = $Search->search_post_data($_GET['search_post'],$start);
    $search_post_conunt = $Search->search_post_conunt($_GET['search_post']);
    $search_post_pagination = ceil($search_post_conunt / 3);
  }
  else
  {
    $error = '検索';
  }
}
?>