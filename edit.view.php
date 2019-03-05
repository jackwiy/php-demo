<?php
require 'functions.php';
$pdo = connectionDB();

$id  = $_GET['id'];
$studens = getStudentById($pdo, $id);

include 'edit_form.view.php';
?>
