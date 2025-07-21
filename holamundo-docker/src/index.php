<?php
$host = 'mysql';
$user = 'root';
$pass = '123456';
$db = 'holamundo';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Hola Mundo desde PHP con conexión exitosa a MySQL 🚀";
?>
 
