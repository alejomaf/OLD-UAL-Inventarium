<?php
global $conn; 
$servername = "db";
$username = "root";
$password = "test";
$dbname = "ualinventarium";

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function getConnection(){ return $conn;}
function closeConnection($conn){
  $_SESSION["email"]=null;
  $_SESSION["password"]=null;
  session_destroy();
  return $conn->close();}

?>