<?php
//connection test


$user = "ccardenas2";
$conn = new mysqli("localhost", $user, $user, $user);

// check connection

if (mysqli_connect_error()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}
else {
  echo "Connect established";
}



















?>