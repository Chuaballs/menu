
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
<form method="POST">
<div class="container">
  <table class="table ">
    <div class="row" >
      <div class="form-group col-4">
        <input type="text" class="form-control" id="Lastname" name="name" aria-describedby="emailHelp" placeholder="Name" required>
          <input class="btn login_btn btn-info" type="submit" value="SUBMIT">
      </div>
    </div>
    <thead class="thead-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">M E N U</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Chicken</td>
      <td><input type="radio" name="RB1" value="A"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Adobo</td>
      <td><input type="radio" name="RB2" value="A"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sinigang</td>
      <td><input type="radio" name="RB3" value="A"></td>

    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Bangus</td>
      <td><input type="radio" name="RB4" value="A"></td>

    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Tilapia</td>
      <td><input type="radio" name="RB5" value="A"></td>

    </tr>
  </tbody>

  </table>
</div>


</form>
</body>
</html>
