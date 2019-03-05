<?php
require 'functions.php';
$pdo = connectionDB();

$id    = $_POST['id'];
$name  = $_POST["name"];
$age   = $_POST["age"];
$class = $_POST["class"];

$sql   = "UPDATE students SET name='$name', age='$age', class='$class' WHERE id='$id'";
$count = $pdo->exec($sql);

if ($count and $count > 0) {
    header('Location:/index.php');
}

?>
