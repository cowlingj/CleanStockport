<?php
function connect() {
  $sqli = new mysqli("HOST", "USERNAME", "PASSWORD", "DB");

  // Check connection
  if ($sqli->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $sqli;
}
?>
