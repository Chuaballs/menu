<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/function/editfnc.php';
$_SESSION['id'] = $_GET['id'];
  if(isset($_POST['edit'])){
  $edit = new edit( $_SESSION['id'], $_POST['menu']);
  $edit->editmenu();
  header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MENU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
</head>
<body>
<div class="card text-black bg-white  text-center" style=" width: 50%;margin-left:25%; margin-top:5%;">
  <h5 class="card-header" style="background-color:white;">Register</h5>
<form  class="form-group bg-white text-black"action="" method="POST" style="height:100%;">
  <label>MENU</label>
  <input type="text"  class="form-control" name="menu" style="width:50%; margin-left:25%;" placeholder="Menu name" /required/><br>
 <input type="submit" name="edit" class="btn text-white" style="background-color:black;margin-left:0%;" value="Submit"/>
</body>
</html>
