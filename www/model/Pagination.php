<?php
require_once (dirname(__FILE__)."/Database.php");

class Pagination extends Database
{
  function page_data($sql)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute();
    return $stmt;
  }

 function page_conunt($sql)
  {
    $hoge = $this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute();
    $stmt = $stmt->fetchColumn();
    return $stmt;
  }
}

?>