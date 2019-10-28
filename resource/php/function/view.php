<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/db/config.php';
class view extends config{
  public $id;
  public $menu;

    function __construct($id = null, $menu=null){
      $this->id= $id;
      $this->menu= $menu;

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
echo '<th>#</th> <th>MENU</th> <th>Action</th>';
echo '</thead>';
foreach ($results as $result) {
    echo '<tr>';
    echo  '<td>'.$result->id.'</td>';
    echo  '<td>'.$result->menu.'</td>';
    echo  '<td><a href="edit.php?id='.$result->id.'" class="btn btn-warning ml-4">Edit</a><a href="delete.php?id='.$result->id.'" class="btn btn-danger ml-4">DELETE</a></td>';
    echo '</tr>';
}
echo '<table>';
}
}
?>
