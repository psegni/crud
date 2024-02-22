<?php
include 'db_connection.php';

$selectedUser = $_GET['user_id'];

$sql = 'SELECT * FROM user WHERE id = ' . $selectedUser;

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    $id =  $user['id'];
    $full_name =  $user['full_name'];
    $phone =  $user['phone'];
    $age =  $user['age'];
}else{
    echo "<script>
        alert('User cannot be found!');
        window.location.pathname = 'crud/display.php'
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Edit User</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
   </head>
   <body>
         <h1>Edit Customer </h1>
         <form action="updateUser.php" method="POST">
            <p>
               <label for="full_Name">Full Name:</label>
               <input type="text" name="full_name" id="full_Name" value='<?php echo $full_name ?>' required >
            </p>
            <p>
               <label for="phone">Phone Number:</label>
               <input type="text" name="phone" id="phone" value='+251 '   value='<?php echo $phone ?>' minlength='13' maxlength='13'  required>
            </p>
            <p>
               <label for="age">Age:</label>
               <input type="number" name="age" id="age" value='<?php echo $age ?>'  required min='0' max="50">
            </p>
            <input type="hidden" name='user_id' value='<?php echo $id ?>' />
            <input  class="btn btn-warning" type="submit" name="submit" value="submit">
         </form>
   </body>
   <style>
      body{
         background: teal;
      }
      h1{
         position: relative;
         left:45%;
         top:10px;
      }
      label{
         font-weight: bold;
      }
      form{
         position: relative;
         left:40%;
         top:10px;
      
      }
      input{
         position: absolute;
         left:10%
      }
   </style>
</html>