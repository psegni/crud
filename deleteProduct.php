<?php

include 'db_connection.php';

$theProduct = $_GET['product_id'];

if(isset($theProduct)){

    $sql = "DELETE FROM products WHERE id = '$theProduct'";

    if(mysqli_query($connection, $sql)){
        echo "<script>
        alert('product DELETED succesfully');
        window.location.pathname = 'displayProduct.php'
        </script>";
    }else{
        echo "<script>
        alert('product can not be found');
        window.location.pathname = 'displayProduct.php'
        </script>";
    }
    
}else{
    echo "<script>
    alert('product can not be found');
    window.location.pathname = 'displayProduct.php'
    </script>";
}


