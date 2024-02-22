<?php
include 'db_connection.php';

if(isset($_POST['submit']))
{
   $full_name = $_POST['full_name'];
   $phone = $_POST['phone'];
   $age = $_POST['age'];

   $sql = "INSERT INTO user (full_name, phone, age) 
   VALUES ('$full_name','$phone','$age')";
         
   $result = mysqli_query($connection, $sql);
   if($result){
      echo "<script>
                alert('User added succesfully');
                window.location.pathname = 'crud/display.php'
            </script>";
   }else{
      die(mysqli_error($connection));
   }
   mysqli_close($connection);
}
?>