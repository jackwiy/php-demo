<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<form action="edit.php" method="post">
    <?php foreach ($students as $student): ?>
        名字: <input type="text" name="name" value="<?= $student['name'] ?>">
        年龄: <input type="text" name="age" value="<?= $student['age'] ?>">
        班级: <input type="text" name="class" value="<?= $student['class'] ?>">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
    <?php endforeach ?>
    <input type="submit" value="提交">
</form>
</body>
</html>
