<?php

require __DIR__ . '../function/pdo.php';

$pdo = mysql();

$sql = 'SELECT * FROM students';

$students = $pdo->query($sql)->fetchAll();

include __DIR__ . '/view/index.view.php';

?>
