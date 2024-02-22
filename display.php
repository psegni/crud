<?php
  include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display Users</title>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
    <div class="container">
        <button class="btn btn-primary"><a href="insert.php" class="text-light">Add Customer</a></button>
        <button class="btn btn-success"><a href="displayProduct.php" class="text-light">View Products</a></button>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
  <?php
   $sql = 'SELECT * FROM user';
   
    $result = mysqli_query($connection, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){ 
          // ['id' => '', 'full_name' => '', ...]
            $id = $row['id'];
            $full_name = $row['full_name'];
            $phone = $row['phone'];
            $age = $row['age'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$full_name.'</td>
            <td>'.$phone.'</td>
            <td>'.$age.'</td>
            <td> <button class="btn btn-info"><a href="editUser.php?user_id='.$id.'" class="text-light">Edit</a></button>
            <button class="btn btn-danger"><a href="deleteUser.php?user_id='.$id.'" class="text-light">Delete</a></button></td>
            </tr>';
      
    }
}
?>
  </tbody>
</table>
<!-- <button class="btn btn-warning"><a href="cart.php" class="text-light">Carts</a></button> -->
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<style>
  .btn-primary{
    position: absolute;
    left:10px;
    top:20%;
  }
.btn-success{
  position: absolute;
    left:10px;
    top:30%;
}
</style>
</html>