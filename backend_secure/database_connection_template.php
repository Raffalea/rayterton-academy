<?php
//Perlu dicopy filenya menjadi database_connection.php
$host = "raytertonacademy.com";
$user = " ";
$pass = "";
$db   = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
