

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update User</title>
   </head>
   <body>
         <h1>Update User </h1>
         <form action="display.php" method="POST">
            <p>
               <label for="full_Name">Full Name:</label>
               <input type="text" name="full_name" id="full_Name" required >
            </p>
            <p>
               <label for="phone">Phone Number:</label>
               <input type="text" name="phone" id="phone" required>
            </p>
            <p>
               <label for="age">Age:</label>
               <input type="number" name="age" id="age" required>
            </p>

            <input type="submit" name="Submit" value="Update">
         </form>
   </body>
</html>