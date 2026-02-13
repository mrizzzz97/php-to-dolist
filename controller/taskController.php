<?php

require_once "./model/koneksi.php";

/* ==============
    READ LOGIC
================= */

$stmt = $pdo->query('SELECT * FROM task ORDER BY id DESC');
$task = $stmt->fetchAll(PDO::FETCH_ASSOC);



/* ======================
CREATE LOGIC
======================== */

if(isset($_POST['submit'])){
    $body = $_POST['body'];

    if(!$body == ""){
        $stmt = $pdo->prepare("INSERT INTO task (body) VALUES (?)");
        $stmt-> execute([$body]);
    }

    header("Location: index.php");
    exit;
}

if(isset($_GET['delete'])){
    $id = (int) $_GET['delete'];

    $stmt = $pdo->prepare("DELETE FROM task WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
    exit;
}


?>