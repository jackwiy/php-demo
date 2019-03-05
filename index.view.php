<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<div class="center">
    <table border="1px">
        <tr>
            <td>名称</td>
            <td>年纪</td>
            <td>班级</td>
            <td>操作</td>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['class'] ?></td>
                <td>
                    <a href="/del.php?id=<?= $student['id'] ?>">删除</a>
                    <a href="/edit.view.php?id=<?= $student['id'] ?>">编辑</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <div><a href="/add_form.view.php">add student</a></div>
</div>
</body>
</html>
