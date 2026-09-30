<?php

include("db.php");
session_start();

?>
<h3> Hello <?php echo $_SESSION['name'] ?></h3>

<a href="logout.php"> Logout</a>