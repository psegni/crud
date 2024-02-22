<?php
include 'db_connection.php';

$selectedProduct = $_GET['product_id'];

$sql = 'SELECT * FROM products WHERE id = ' . $selectedProduct;
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0){
    $product = mysqli_fetch_assoc($result);
    $id =  $product['id'];
    $name =  $product['name'];
    $Brand =  $product['Brand'];
    $type =  $product['type'];
    $price =  $product['price'];
}else{
    echo "<script>
        alert('product cannot be found!');
        window.location.pathname = 'crud/displayProduct.php'
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Edit Product</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
   </head>
   <body>
         <h1>Edit Product </h1>
         <form action="updateProduct.php" method="POST">
            <p>
               <label for="name">Name:</label>
               <input type="text" name="name" id="name" value='<?php echo $name ?>' required >
            </p>
            <p>
               <label for="Brand">Brand:</label>
               <input type="text" name="Brand" id="Brand" value='<?php echo $Brand ?>' required >
            </p>
            <p>
               <label for="type">type:</label>
               <input type="text" name="type" id="type" value='<?php echo $type?>' required>
            </p>
            <p>
               <label for="price">price(birr):</label>
               <input type="number" name="price" id="price" value='<?php echo $price?>'  required min='0' max="100">
            </p>
            <input type="hidden" name='product_id' value='<?php echo $id ?>' />
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