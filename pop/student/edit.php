<?php

require __DIR__ . '../function/pdo.php';

$pdo = mysql();

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";

$student = $pdo->exec($sql)->fetchAll();

include __DIR__ . '/view/edit_form.view.php';

?>
