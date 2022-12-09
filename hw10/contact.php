<?php

?>

<!doctype html>
<html>
<head>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<title>Contact</title>
</head>
<body>

<div class="banner">Welcome To My Homepage!</div>
<div class="navMain row">
	<div class="navItem col"><a href="index.php">Home</a></div>
	<div class="navItem col"><a href="resume.php">Resume</a></div>
	<div class="navActive col"><a class="activeLink">Contact</a></div>
	<div class="navItem col"><a href="miscellaneous.php">Miscellaneous</a></div>
</div>

<div class="contact div1">
    <div class="div1">
		<label>Personal E-mail</label>
        <br>tylern225@gmail.com
    </div>
    <div class="div1">
		<label>School E-mail</label>
        <br>tyler.nguyen@my.utsa.edu
    </div>
    <div class="div1">
		<label>Phone Number</label>
        <br>123-456-7890
        <br>(fake bc I don't want to show my real number)
    </div>
    <div class="div1">
		<label>Links</label>
        <br><a target="_blank" href="https://www.linkedin.com/in/tylernguyen11/">LinkedIn</a>
        <br><a target="_blank" href="https://github.com/tylern245">GitHub</a>
    </div>
</div>

<?php
	if(!isset($_POST['submit'])
	    || empty($_POST['fname'])
		|| empty($_POST['lname'])
		|| empty($_POST['email'])
		|| empty($_POST['username'])
		|| empty($_POST['comment'])
		)
		{
?>
<div class="fill-in-form-div">
	<form method="POST" action="" onSubmit="return onSubmit()" id="fill-in-form">
	<h3 class="m-3">Fill out contact form</h3>
	<div class="form-group">
		<label>First Name:</label>
		<input class="form-control" input="text" id="fname" name="fname" onBlur="checkName(this.value, this.id)" required>
		<p class="help-block" id="fnameHelp"></p>
	</div>
	<div class="form-group">
		<label>Last Name:</label>
		<input class="form-control" input="text" id="lname" name="lname" onBlur="checkName(this.value, this.id)" required>
		<p class="help-block" id="lnameHelp"></p>
	</div>
	<div class="form-group">
		<label>Email:</label>
		<input class="form-control" type="text" id="email" name="email" onBlur="checkEmail(this.value, this.id)" required>
		<p class="help-block" id="emailHelp"></p>
	</div>
	<div class="form-group">
		<label>Username:</label>
		<input class="form-control" input="text" id="username" name="username" onBlur="checkUsername(this.value, this.id)" required>
		<p class="help-block" id="usernameHelp"></p>
	</div>
	<div class="form-group">
		<label>Comments:</label>
		<textarea class="form-control" id="comment" name="comment" onBlur="checkComments(this.value, this.id)" required></textarea>
		<p class="help-block" id="commentHelp"></p>
	</div>
	<br>
		<button type="submit" name="submit" value="submit" class="m-3">Submit</button>
	</form>
</div>	
<?php
	}
?>

<?php
	if (
		isset($_POST['submit']) 
	&& !empty($_POST['fname'])
	&& !empty($_POST['lname'])
	&& !empty($_POST['email'])
	&& !empty($_POST['username'])
	&& !empty($_POST['comment'])
	) {
		$firstName=$_POST['fname'];
		$lastName=$_POST['lname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$comment=$_POST['comment'];
?>
	<style>
		.results{
			margin: 20px;
			padding: 20px;
		}
	</style>
	<div class="results">
		<h2>Results</h2>
		<p><label>First Name:</label> <?php echo $firstName?></p>
		
		<p><label>Last Name:</label> <?php echo $lastName?></p>

		<p><label>Email:</label> <?php echo $email?></p>

		<p><label>Username:</label> <?php echo $username?></p>

		<p><label>Comment:</label> <?php echo $comment?></p>
	</div>
<?php		
	}
?>

</body>
<script src="assets/js/validation.js"></script>
</html>
