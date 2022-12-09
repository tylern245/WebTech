<?php
include("assets/php/functions.php");
$dblink = db_connect("contactData");
$sql = "SELECT * FROM `user_input`";

$result = $dblink->query($sql) or 
    die("Something went wrong with $sql" . $dblink->error);

    $data=$result->fetch_ALL(MYSQLI_ASSOC);

    // foreach ($data as $row){
    //     echo $row['auto_id'] . $row['firstName'] . $row['lastName'] . $row['username'] . $row['email'] . $row['comments'] . "\n";
    // }

        foreach ($data as $num=>$loan) {
        echo ($num + 1) . " => " . $loan['auto_id'] . $loan['firstName'] . $loan['lastName'] . $loan['username'] . $loan['email'] . $loan['comments'] . "\n";
    }
?>