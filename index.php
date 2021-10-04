<?php
$sql = "SELECT * FROM 'boipoka' WHERE ";
$result = mysqli_query($conn, $sql) or die("Unsuccessful Query");
if (mysqli_num_rows($result) > 0) {
    ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Boi Poka</title>
</head>
<body>

    <div class="container">
<H1>Welcome To My World</H1>

<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
    <a href="edit.php">Edit</a>
    <a href="delete.php">Delete</a>
    </td>
    </tr>
    
    
  </tbody>
</table>
<?php
}
?>
    </div>
</body>
</html>