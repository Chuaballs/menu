<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/survey/resource/db/db.php';



class view extends db{


public function viewAll(){
    $pdo = new DB;
    $pdo= $pdo->connect();

    $sql = "SELECT * FROM `survey` ";
    $pdo = $pdo->prepare($sql);
    $pdo->execute();
    $datas= $pdo->fetchAll(PDO::FETCH_OBJ);
    echo '<table class="table tavle-primary">';
    echo '<thead>';
    echo '<th> Name </th> <th> Q1 </th> <th> Q2 </th> <th> Q3 </th> <th> Q4 </th> <th> Q5 </th> <th> Date </th>';
    echo '</thead>';
    foreach ($datas as $data) {

      echo '<tr>';

      echo '<td>'.$data->name.'</td>';
      echo '<td>'.$data->A1.'</td>';



      echo'</tr>';

    }

    echo '</table>';
}

}


 ?>
 <!DOCTYPE html>
 <html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<div class="container">
  <div class="button">
      <a href="start.php" class="btn btn-primary btn-lg " type="btn" >START</a>
  </div>
</div>
</head>

 </html>
