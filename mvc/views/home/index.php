<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
        <?php foreach($products as $item):?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td>
                    <a href="?ctrl=ProductController&action=detail&id=<?= $item->id ?>">Sửa</a>
                </td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>