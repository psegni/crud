
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add User</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
      
   </head>
   <body>

  
         <h1>Add New Customer </h1>
        
         <form class="box" action="insertUser.php" method="POST">
            <p>
               <label for="full_Name">Full Name:</label>
               <input type="text" name="full_name" id="full_Name" required >
            </p>
            <p>
               <label for="phone">Phone Number:</label>
               <input type="text" name="phone" id="phone" value='+251' minlength='13' maxlength='13' required>
            </p>
            <p>
               <label for="age">Age:</label>
               <input type="number" name="age" id="age"  required min='0' max="20">
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