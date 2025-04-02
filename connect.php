<?php

//Declaring the varaibles
$host="localhost";
$user="root";
$pass="";
$db="user_accounts";

$conn=new mysqli($host, $user, $pass, $db);
//Creating the object to establish the connection

//Connecting to the database
if ($conn->connect_error) { 
    echo "Failed to connect DB:" . $conn->connect_error;
} 

?>