<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\menu\resource\php\db\config.php';

class edit extends config{
public $id;
  public $menu;
  public $price;

  function __construct($id=null, $menu=null, $price=null){
    $this->menu = $menu;
    $this->id = $id;
    $this->price = $price;
}

  public function editmenu(){
    $pdo = new config;
    $pdo = $pdo->connect();
    $price = $this->price;
    $menu = $this->menu;
    $id = $this->id;
    $sql = "UPDATE `menu` SET `menu` = ?, `price` =?  WHERE `id` = ?";
    $pdo = $pdo->prepare($sql);
    $pdo->execute([$menu, $price, $id]);
  }

}

 ?>
