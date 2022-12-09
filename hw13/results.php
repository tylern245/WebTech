<?php
$dblink = db_connect("contactData");

$sql = "SELECT * FROM `user_input`";
$result = $dblink->query($sql) or 
    die("Something went wrong with $sql" . $dblink->error);

    $data=$result->fetch_all(MYSQLI_ASSOC);
?>

<title>Results</title>
<div class="div1">
    <h2 align="center">Users</h2>
    <table>
        <tr>
            <th>Record #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Comments</th>
        </tr>
        <?php foreach ($data as $row):  ?>
            <tr>
                <td><?=$row['auto_id'] ?></td>
                <td><?=$row['firstName'] ?></td>
                <td><?=$row['lastName'] ?></td>
                <td><?=$row['username'] ?></td>
                <td><?=$row['email'] ?></td>
                <td><?=$row['comments'] ?></td>
            </tr>
        <?php endforeach; ?>
	</table>
</div>


