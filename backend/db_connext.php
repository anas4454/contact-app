<?php

$host = "localhost";
$username  = "root";
$password = "";
$database = "contacts-app";

$connection = mysqli_connect($host,$username,$password,$database);

if(!$connection){
    echo "error establishing connection with the database $database";
}else{
    echo "Connection to the database $database successful";
}


?>