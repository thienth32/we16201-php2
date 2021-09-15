<?php
require_once './User.php';
$users = User::getAll();



?>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
    </thead>
    <tbody>
        <?php foreach($users as $item):?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->convertGender() ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>