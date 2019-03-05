<?php
function connectionDB()
{
    try {
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=demo', 'root', '123456');
    } catch (PDOException $e) {
        die('Error:' . $e->getMessage());
    }
}

function getAllStudents($pdo)
{
    $sql = 'SELECT * FROM students';
    return $pdo->query($sql)->fetchAll();
}

function getStudentById($pdo, $id)
{
    $sql = "SELECT * FROM students WHERE id='$id'";
    return $pdo->query($sql)->fetchAll();
}

function deleteStudent($pdo, $id)
{
    $sql = "DELETE FROM students WHERE id='$id'";
    return $pdo->exec($sql);
}

?>

	
