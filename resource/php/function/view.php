<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/db/config.php';
class view extends config{
  public $id;
  public $menu;
  public $price;

    function __construct($id = null, $menu=null, $price=null){
      $this->id= $id;
      $this->menu= $menu;
      $this->price= $price;

    }

public function viewAllData(){
  $pdo = new config;
  $pdo = $pdo->Connect();
  $sql = "SELECT * FROM `menu`";
  $pdo = $pdo->prepare($sql);
  $pdo->execute();
  $results = $pdo->fetchAll(PDO::FETCH_OBJ);
  echo '<table class="table table-hover text-black  " style="background-color:white;">';
  echo '<thead>';
  echo '<th>#</th> <th>MENU</th> <th>PRICE</th> <th>PICTURE</th> <th>Action</th>';
  echo '</thead>';
foreach ($results as $result) {
    echo '<tr>';
    echo  '<td>'.$result->id.'</td>';
    echo  '<td>'.$result->menu.'</td>';
    echo  '<td>'.$result->price.'</td>';
    if ($result->menu == 'ADOBO') {
    echo '<td><img src="resource/img/adobo.jpg" width=100px; /> </td>';
  }elseif ($result->menu == 'TILAPIA') {
    echo '<td><img src="resource/img/tilapia.jpg" width=100px; /> </td>';
  }elseif ($result->menu == 'SISIG') {
    echo '<td><img src="resource/img/sisig.jpg" width=100px; /> </td>';
  }elseif ($result->menu == 'CHICKEN JOY'){
    echo '<td><img src="resource/img/jobiii.jpg" width=100px; /> </td>';
  }
    echo  '<td><a href="edit.php?id='.$result->id.'" class="btn btn-warning ml-4">Edit</a><a href="delete.php?id='.$result->id.'" class="btn btn-danger ml-4">DELETE</a></td>';
    echo '</tr>';
}
echo '<table>';
}
}
?>
