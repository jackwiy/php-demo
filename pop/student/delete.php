<?php

require __DIR__ . '../function/pdo.php';

$pdo = mysql();

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";

$data = $pdo->exec($sql);

if ($data and $data > 0) {
    header('Location:' . __DIR__ . '/view/index.php');
}

?>
