<?php
require 'functions.php';
$pdo = connectionDB();

$students = getAllStudents($pdo);

include 'index.view.php';
?>
