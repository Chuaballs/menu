
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
  <div class="container">
<form method="POST">

    <?php
      require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/function/view.php';
        $view = new view;
        $view->viewAllData();

      ?>

<span> <a href="add.php" class="btn btn-primary ml-4">ADD</a> </span></br>
</div>
    </form>
  </body>

  <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/menu/resource/php/db/config.php';
  $pdo = new config;
  $pdo = $pdo->connect();
  $stmt=$pdo->prepare("SELECT * FROM `menu` ORDER BY `id` DESC");
  $stmt->execute();
  if($stmt->rowCount()>0)
  {
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
  extract($row);
}
}
  ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
