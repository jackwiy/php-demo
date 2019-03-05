<?php
require 'functions.php';
$pdo = connectionDB();

$id  = $_GET['id'];
$count = deleteStudent($pdo, $id);

if ($count and $count > 0) {
    header('Location:/index.php');
}

?>
