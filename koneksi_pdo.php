<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "prak_pemweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Koneksi gagal. Pesan error: " . $e->getMessage();
}
?>