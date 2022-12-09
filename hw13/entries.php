<head>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-3.5.1.js"></script>
</head>
<?php
include("assets/php/functions.php");
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
        <tbody id="results"></tbody>
	</table>
</div>

<script>
function refresh_div() {
    $.ajax({
        type: 'POST',
        url: 'https://ec2-13-58-76-195.us-east-2.compute.amazonaws.com/hw13/query.php',
        success: function(data) {
            $('#results').html(data);
        }
    })
};
setInterval(function() {refresh_div(); }, 500);
</script>


