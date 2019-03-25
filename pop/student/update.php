<?php

require __DIR__ . '../function/pdo.php';

$pdo = mysql();

$id    = $_POST['id'];
$name  = $_POST["name"];
$age   = $_POST["age"];
$class = $_POST["class"];

$sql = "UPDATE students SET name='$name', age='$age', class='$class' WHERE id='$id'";

$data = $pdo->exec($sql);

if ($data and $data > 0) {
    header('Location:' . __DIR__ . '/view/index.php');
}

?>
