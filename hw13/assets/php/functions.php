<?php
function db_connect($db){
    require("credentials.php");

    $hostname="localhost";

    $dblink = mysqli_connect($hostname,$username,$password, $db);
    if (!$dblink) {
        die("Error connecting to database: " . mysqli_connect_error());
    }

	return $dblink;
}

function redirect($uri){
    ?>
        <script type="text/javascript">
            
            document.location.href="<?php echo $uri; ?>";
            
        </script>
    <?php die;
    }

?>