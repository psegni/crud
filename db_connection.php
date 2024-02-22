<?php
$username = 'root';
$database = 'shop';
$database_url = 'localhost';
$database_password = '';


$connection = mysqli_connect($database_url, $username, $database_password, $database);

if(!$connection){
    echo 'unable to connect' . mysqli_connect_error();
}