<?php
require('connect.php');

function getItem($key, $id){
  $sqli = connect();
  $result = $sqli->query("SELECT $key FROM tasks WHERE id = $id");
  $sqli->close();
  return $result;
}

function getAll() {
  $sqli = connect();
  return $sqli->query("SELECT * FROM tasks");
}

function addRow($name, $postcode, $description, $price, $contactemail, $image){
  $sqli = connect();
  $sqli->query("INSERT INTO tasks (name, postcode, description, price, contactemail, image)
               VALUES ('$name', '$postcode', '$description', '$price', '$contactemail', '$image')");
}

?>