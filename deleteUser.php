<?php

include 'db_connection.php';
$userToBeDeleted = $_GET['user_id'];


   

if(isset($userToBeDeleted)){

    $sql = "DELETE FROM user WHERE id = '$userToBeDeleted'";
    // $result = mysqli_query($connection, $sql);

    if(mysqli_query($connection, $sql)){
        echo "<script>
        alert('User DELETED succesfully');
        window.location.pathname = 'display.php'
        </script>";
    }else{
        echo "<script>
        alert($'User can not be found');
        window.location.pathname = 'display.php'
        </script>";
    }
    
}else{
    echo "<script>
    alert('User can not be found');
    window.location.pathname = 'display.php'
    </script>";
}


