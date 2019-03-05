<?php
require 'functions.php';
$pdo = connectionDB();

$name  = $_POST["name"];
$age   = $_POST["age"];
$class = $_POST["class"];

$sql   = "INSERT INTO students (name, age, class) VALUES('$name','$age','$class')";
$count = $pdo->exec($sql);

if ($count and $count > 0) {
    header('Location:/index.php');
}
?>
