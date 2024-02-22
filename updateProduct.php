<?php
include 'db_connection.php';

if(isset($_POST['submit']))
{
    $id = $_POST['product_id'];
    $name = $_POST['name'];
    $Brand = $_POST['Brand'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    
    $sql = "UPDATE products SET name= '$name',Brand = '$Brand',type = '$type',price ='$price' WHERE id = '$id'";
    $result = mysqli_query($connection,$sql);
    if($result){
        echo "<script>
            alert('Product updated succesfully');
            window.location.pathname = 'crud/displayProduct.php'
            </script>";
       }else{
          die(mysqli_error($connection));
       }
}


?>