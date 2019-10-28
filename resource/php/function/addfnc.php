<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\menu\resource\php\db\config.php';

class add extends config{
  public $menu;
  public $price;

  function __construct($menu=null, $price=null){
    $this->menu = $menu;
    $this->price = $price;
}

public function addmenu(){
  $pdo = new config;
  $pdo = $pdo->connect();
  $menu = $this->menu;
  $price = $this->price;
  $sql = "INSERT INTO `menu`(`menu`, `price`) VALUES (?,?)";
  $pdo = $pdo->prepare($sql);
  $pdo->execute([$menu, $price]);
}
}
?>
