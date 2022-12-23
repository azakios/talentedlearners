<?php 

//connecting to Database
$username;
$server;
$database;
$pass;

//starting conn

try {
$conn = mysqli_connect($username,$server,$database,$pass);
}
catch(Exception $e){

 echo "Error - connecting...";
}

echo "Talented Learners";
