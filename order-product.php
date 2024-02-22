<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
         <h1>Order Product </h1>
         <form action="display-product.php" method="POST">
            <p>
  <label for="name">Product:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Select Product</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</p>
<p>
<label for="type">Type:</label>
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Select type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
            </p>
            <p>
               <label for="type">Amount:</label>
               <input type="number" name="type" id="type" required>
            </p>
            <input type="submit" name="Submit" value="Order">
         </form>
   </body>
</html>