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

    $images=$_FILES['image']['name'];
    $tmp_dir=$_FILES['image']['tmp_name'];
    $imageSize=$_FILES['image']['size'];

    $upload_dir='uploads/';
    $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
    $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
    $picProfile=rand(1000, 1000000).".".$imgExt;
    move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
    $sql = "INSERT INTO `menu`(`menu`, `price`, `image`) VALUES (?,?,?)";
    $data = $pdo->prepare($sql);
    $data->execute([$menu,$price,$picProfile]);
}
}
?>
