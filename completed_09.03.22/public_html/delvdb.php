<?php

include 'dbconn.php';
$te=$_GET['emailid'];
//echo $te;
$dele = mysqli_query($conn,"DELETE FROM alluser WHERE emailid=$te");
header('location:showdb.php');

?>