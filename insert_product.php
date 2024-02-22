<?php
include 'db_connection.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $Brand = $_POST['Brand'];
    $type= $_POST['type'];
    $price= $_POST['price'];

    $sql = "INSERT INTO products(name,Brand,type,price) VALUES('$name','$Brand','$type','$price')";

    $result = mysqli_query($connection,$sql);
    if($result){
        echo "<script>
                alert('Product added succesfully');
                window.location.pathname = 'crud/displayProduct.php'
            </script>";
   }else{
      die(mysqli_error($connection));
   }
   mysqli_close($connection);

}


?>