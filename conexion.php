<?php
$servername = "localhost";
$username = "minisuperelwero";
$password = "elwero167.5";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexion exitosa";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 