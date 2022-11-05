<?php
    $data=file_get_contents("data.json");
    $users=json_decode($data);
?>
<html>
    <body>
        <h1>Admin List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
            </tr>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->Name; ?></td>
                <td><?= $user->Phone; ?></td>
            </tr>
            <?php }
            ?>
        </table>
    </body>
</html>