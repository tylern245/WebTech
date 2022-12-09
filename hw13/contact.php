<?php
	// initialize variables
	$firstName;
	$lastName;
	$email;
	$username;
	$comment;

	if (!isset($_REQUEST['page']))
		redirect("index.php?page=home");

	if 	(
		isset($_REQUEST['page']) && $_REQUEST['page'] == "contact" &&
		isset($_REQUEST['msg']) && $_REQUEST['msg'] == "success"
		) {
			echo '<script type="text/javascript">alert("Form submitted! Click OK to view results.");</script>';
			redirect("index.php?page=results");
	}
	
?>

<title>Contact</title>
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
	// if form is successfully submitted, redirect to same page with msg parameter  = success
	if (
		isset($_POST['submit']) && !isset($_POST['msg'])
	) {
		$firstName=$_POST['fname'];
		$lastName=$_POST['lname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$comment=$_POST['comment'];

		// INSERT to database
		$dblink = db_connect("contactData");
		$sql = "INSERT INTO `user_input` (`firstName`, `lastName`, `username`, `email`, `comments`) VALUES ('$firstName', '$lastName', '$username', '$email', '$comment')";
		$dblink->query($sql);
		// $dblink->query($sql) or 
		// 	die ("Something went wront with $sql" . $dblink->error);

		redirect("index.php?page=contact&msg=success");
	}
?>

<script src="assets/js/validation.js"></script>