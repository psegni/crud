
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add Product</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   </head>
   <body>
         <h1>Add New Product </h1>
         <form action="insert_product.php" method="POST">
            <p>
               <label for="name">Name:</label>
               <input type="text" name="name" id="name" required >
            </p>
            <p>
               <label for="Brand">Brand:</label>
               <input type="text" name="Brand" id="Brand" required >
            </p>
            <p>
               <label for="type">type:</label>
               <input type="text" name="type" id="type"  required>
            </p>
            <p>
               <label for="price">price(birr): </label>
               <input type="number" name="price" id="price"  required min='0' max="100" >
            </p>

            <input class="btn btn-warning" type="submit" name="submit" value="submit">
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

