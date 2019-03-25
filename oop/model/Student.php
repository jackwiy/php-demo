<?php

namespace App\Model;

use Database\Mysql;

/**
 * Class Student
 */
class Student
{
    //pdo
    var $pdo;

    /**
     * Student constructor.
     */
    public function __construct()
    {
        $this->pdo = new Mysql();
    }

    /**
     * Create
     * @param $_POST
     */
    public function create($_POST)
    {
        $name  = $_POST["name"];
        $age   = $_POST["age"];
        $class = $_POST["class"];

        $sql = "INSERT INTO students (name, age, class) VALUES (:name, :age, :class)";

        $pdo = $this->pdo->prepare($sql);

        $pdo->bindParam(':name', $name);
        $pdo->bindParam(':age', $age);
        $pdo->bindParam(':class', $class);

        $data = $pdo->execute();

        return $data;
    }

    /**
     * Edit
     * @param $_GET
     */
    public function edit($_GET)
    {
        $id = $_GET["id"];

        $sql = "SELECT * FROM students WHERE id=:id";

        $pdo = $this->pdo->prepare($sql);

        $pdo->bindParam(':id', $id);

        $data = $pdo->execute()->fetchAll();

        return $data;
    }

    /**
     * Save
     * @param $id
     */
    public function save($_POST)
    {
        $id    = $_POST['id'];
        $name  = $_POST["name"];
        $age   = $_POST["age"];
        $class = $_POST["class"];

        $sql = "UPDATE students SET name=:name, age=:age, class=:class WHERE id=:id";

        $pdo = $this->pdo->prepare($sql);

        $pdo->bindParam(':id', $id);
        $pdo->bindParam(':name', $name);
        $pdo->bindParam(':age', $age);
        $pdo->bindParam(':class', $class);

        $data = $pdo->execute();

        return $data;
    }

    /**
     * Show
     * @param $id
     */
    public function show($_GET)
    {
        $id = $_GET["id"];

        $sql = "SELECT * FROM students WHERE id=:id";

        $pdo = $this->pdo->prepare($sql);

        $pdo->bindParam(':id', $id);

        $data = $pdo->execute()->fetchAll();;

        return $data;
    }

    /**
     * All
     */
    public function all()
    {
        $sql = "SELECT * FROM students";

        $pdo = $this->pdo->prepare($sql);

        $data = $pdo->execute()->fetchAll();

        return $data;
    }

    /**
     * Delete
     * @param $id
     */
    public function delete($_POST)
    {
        $id = $_POST["id"];

        $sql = "DELETE FROM students WHERE id=:id";

        $pdo = $this->pdo->prepare($sql);

        $pdo->bindParam(':id', $id);

        $data = $pdo->execute();

        return $data;
    }

}