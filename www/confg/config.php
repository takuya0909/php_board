<?php
require_once(__DIR__ .'/functions.php');
require_once(__DIR__ . '/autolado.php');

ini_set("display_errors", 1);
error_reporting(E_ALL);

$loader = new ClassLoader();
//ディレクトリを探すように登録
$loader->registerDir(dirname(__FILE__).'/../model');
$loader->registerDir(dirname(__FILE__).'/../controller');
$loader->registerDir(dirname(__FILE__).'/../validation');
$loader->register();


 $UserRequest = new UserRequest();
 $PostRequest = new PostRequest();
 $CommentRequest = new CommentRequest();
 $User = new UserController();
 $Psot = new PostControlle();
 $Comment = new CommentController();
 $Search = new SearchController();
 $Pagination = new PaginationController();

?>