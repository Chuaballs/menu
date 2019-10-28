<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\menu\resource\php\db\config.php';

class delete extends config{
  public $id;

  function __construct($id=null){
    $this->id = $id;
}

  public function deletemenu(){
    $pdo = new config;
    $pdo = $pdo->connect();
    $id = $this->id;
    $sql = "DELETE FROM menu WHERE id = ? ";
    $pdo = $pdo->prepare($sql);
    $pdo->execute([$id]);
  }

}

 ?>
