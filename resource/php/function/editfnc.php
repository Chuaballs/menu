<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\menu\resource\php\db\config.php';

class edit extends config{
public $id;
  public $menu;

  function __construct($id=null, $menu=null){
    $this->menu = $menu;
    $this->id = $id;
}

  public function editmenu(){
    $pdo = new config;
    $pdo = $pdo->connect();
    $menu = $this->menu;
    $id = $this->id;
    $sql = "UPDATE `menu` SET `menu` = ? WHERE `id` = ?";
    $pdo = $pdo->prepare($sql);
    $pdo->execute([$menu, $id]);
  }

}

 ?>
