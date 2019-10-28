<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\menu\resource\php\db\config.php';

class add extends config{
  public $username;

  function __construct($menu=null){
    $this->menu = $menu;
}

public function addmenu(){
  $pdo = new config;
  $pdo = $pdo->connect();
  $menu = $this->menu;
  $sql = "INSERT INTO `menu`(`menu`) VALUES (?)";
  $pdo = $pdo->prepare($sql);
  $pdo->execute([$menu]);
}
}
?>
