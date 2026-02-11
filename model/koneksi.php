<?php
$host = "localhost";
$db = "my_agenda";
$user = "root";
$pw = "";

try {
    $pdo = new PDO('mysql:host=localhost; dbname=my_agenda', $user, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal:" . $e->getMessage());
}

?>