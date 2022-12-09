<?php
include("assets/php/functions.php");
$dblink = db_connect("contactData");
$sql = "SELECT * FROM `user_input`";

$result = $dblink->query($sql) or 
    die("Something went wrong with $sql" . $dblink->error);

    $data=$result->fetch_all(MYSQLI_ASSOC);

    foreach ($data as $row): 
    ?>
        <tr>
            <td><?=$row['auto_id'] ?></td>
            <td><?=$row['firstName'] ?></td>
            <td><?=$row['lastName'] ?></td>
            <td><?=$row['username'] ?></td>
            <td><?=$row['email'] ?></td>
            <td><?=$row['comments'] ?></td>
        </tr>
    <?php 
    endforeach;
?>