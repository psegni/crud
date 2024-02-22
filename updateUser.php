<?php
include 'db_connection.php';

if(isset($_POST['submit'])){

   $full_name = $_POST['full_name'];
   $phone = $_POST['phone'];
   $age = $_POST['age'];
   $id = $_POST['user_id'];

//    $sql = 'UPDATE user SET full_name ='. $full_name . ', phone='. $phone . ', age=' . $age . ' WHERE id='.$id;
    $sql = "UPDATE user SET full_name = '$full_name', phone = '$phone', age = '$age' WHERE id = '$id'";
   $result = mysqli_query($connection,$sql);

   if($result){
    echo "<script>
        alert('User updated succesfully');
        window.location.pathname = 'display.php'
        </script>";
   }else{
      die(mysqli_error($connection));
   }
}
?>

