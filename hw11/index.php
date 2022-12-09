<!doctype html>
<html>
<head>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="banner">Welcome To My Homepage!</div>
<?php
	// if page variable is set and the file exists on the server
	if (isset($_REQUEST['page']) && file_exists($_REQUEST['page']) . '.php')
		$page=$_REQUEST['page'];
	else
		$page="home";
	
	// navbar
	include('navigation.php');

	// show page depending on page variable in URL
	include $page . '.php';
?>

</body>
</html>
