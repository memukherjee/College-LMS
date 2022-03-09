<?php
include 'dbconn.php';
$te=$_GET['emailid'];
//echo $te;
//echo $res['nam'];
$dele = mysqli_query($conn,"DELETE FROM input WHERE emailid=$te");
header('location:pendingReq.php');
?>