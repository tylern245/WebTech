<?php
	switch($page) {
		case "home": ?>
			<div class="navMain row">
				<div class="navActive col"><a class="activeLink">Home</a></div>
				<div class="navItem col"><a href="index.php?page=resume">Resume</a></div>
				<div class="navItem col"><a href="index.php?page=miscellaneous">Miscellaneous</a></div>
				<div class="navItem col"><a href="index.php?page=contact">Contact</a></div>
				<div class="navItem col"><a href="index.php?page=results">Results</a></div>
			</div>
<?php
			break;
            
        case "resume": ?>
			<div class="navMain row">
				<div class="navItem col"><a href="index.php?page=home">Home</a></div>
				<div class="navActive col"><a class="activeLink">Resume</a></div>
				<div class="navItem col"><a href="index.php?page=miscellaneous">Miscellaneous</a></div>
				<div class="navItem col"><a href="index.php?page=contact">Contact</a></div>
				<div class="navItem col"><a href="index.php?page=results">Results</a></div>
			</div>
<?php	
        	break;

		case "miscellaneous": ?>
			<div class="navMain row">
				<div class="navItem col"><a href="index.php?page=home">Home</a></div>
				<div class="navItem col"><a href="index.php?page=resume">Resume</a></div>
				<div class="navActive col"><a class="activeLink">Miscellaneous</a></div>
				<div class="navItem col"><a href="index.php?page=contact">Contact</a></div>
				<div class="navItem col"><a href="index.php?page=results">Results</a></div>
			</div>
<?php
			break;

		case "contact": ?>
				<div class="navMain row">
					<div class="navItem col"><a href="index.php?page=home">Home</a></div>
					<div class="navItem col"><a href="index.php?page=resume">Resume</a></div>
					<div class="navItem col"><a href="index.php?page=miscellaneous">Miscellaneous</a></div>
					<div class="navActive col"><a class="activeLink">Contact</a></div>
					<div class="navItem col"><a href="index.php?page=results">Results</a></div>
				</div>
<?php
				break;

		case "results": ?>
			<div class="navMain row">
				<div class="navItem col"><a href="index.php?page=home">Home</a></div>
				<div class="navItem col"><a href="index.php?page=resume">Resume</a></div>
				<div class="navItem col"><a href="index.php?page=miscellaneous">Miscellaneous</a></div>
				<div class="navItem col"><a href="index.php?page=contact">Contact</a></div>
				<div class="navActive col"><a class="activeLink">Results</a></div>
			</div>
<?php
			break;

		default: ?>
			<div class="navMain row">
				<div class="navActive col"><a class="activeLink">Home</a></div>
				<div class="navItem col"><a href="index.php?page=resume">Resume</a></div>
				<div class="navItem col"><a href="index.php?page=miscellaneous">Miscellaneous</a></div>
				<div class="navItem col"><a href="index.php?page=contact">Contact</a></div>
				<div class="navItem col"><a href="index.php?page=results">Results</a></div>
			</div>
<?php
			break;
	}	// end of switch statement
?>