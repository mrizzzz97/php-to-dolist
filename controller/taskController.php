<?php

require_once "./model/koneksi.php";

/* ==============
    READ LOGIC
================= */

$stmt = $pdo->query('SELECT * FROM task ORDER BY id DESC');
$task = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>