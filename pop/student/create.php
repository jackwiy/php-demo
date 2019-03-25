<?php

require __DIR__ . '../function/pdo.php';

$pdo = mysql();

$name  = $_POST["name"];
$age   = $_POST["age"];
$class = $_POST["class"];

$sql = "INSERT INTO students (name, age, class) VALUES('$name','$age','$class')";

$data = $pdo->exec($sql);

if ($data and $data > 0) {
    header('Location:' . __DIR__ . '/view/index.php');
}

?>
