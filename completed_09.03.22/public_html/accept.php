<?php
include 'dbconn.php';
$te=$_GET['emailid'];
//echo $te;
//echo $res['nam'];
$q = "INSERT INTO alluser (nam,dept,yr,emailid,pswrd) SELECT nam,dept,yr,emailid,pswrd FROM input WHERE emailid=$te";
$in = mysqli_query($conn,$q);
$dele = mysqli_query($conn,"DELETE FROM input WHERE emailid=$te");
header('location:pendingReq.php');
?>