<?php 
$mysqli = new mysqli("localhost","root","","kp_db");

// Check connection
if (!$mysqli) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>