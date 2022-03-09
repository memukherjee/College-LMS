<?php

include 'dbconn.php';

//$stmt = $conn->prepare("insert into input(nam,dept,yr,emailid,pswrd,dt) values(?,?,?,?,?,?)");

//$stmt = $conn->prepare("UPDATE alluser SET (nam,dept,yr,emailid,pswrd,dt) values(?,?,?,?,?,?) WHERE ");
  
//$rec = $_GET['emailid'];

$i = $_POST['id'];
$n = $_POST['name'];
$d = $_POST['dept'];
$y = $_POST['year'];
$e = $_POST['email'];
$p = $_POST['password'];

//echo $i;
$same = mysqli_query($conn,"SELECT * FROM alluser WHERE id = '$i'");
$w = mysqli_fetch_array($same);
//echo $w['id'];
// $stemail_query = mysqli_query($conn , "SELECT * FROM alluser WHERE emailid = '$e' ");
// 		if(mysqli_num_rows($stemail_query) > 0){
// 			echo '<script>alert("Email already exist...Try using different email..")
// 			window.location.href="showdb.php";
// 			</script>';

// 			//header("Location: register.html");
// 		}
// else{
// $up = mysqli_query($conn,"UPDATE alluser SET nam='$n',dept='$d',yr='$y',emailid='$e',pswrd='$p' WHERE id='$i'");
// header('location: showdb.php');
// }

if($w['emailid']==$e){
	$up = mysqli_query($conn,"UPDATE alluser SET nam='$n',dept='$d',yr='$y',emailid='$e',pswrd='$p' WHERE id='$i'");
	header('location: showdb.php');
}
else{
		$stemail_query = mysqli_query($conn , "SELECT * FROM alluser WHERE emailid = '$e' ");
		if(mysqli_num_rows($stemail_query) > 0){
			echo '<script>alert("Email already exist...Try using different email..")
			window.location.href="showdb.php";
			</script>';

			//header("Location: register.html");
		}
		else{
			$up = mysqli_query($conn,"UPDATE alluser SET nam='$n',dept='$d',yr='$y',emailid='$e',pswrd='$p' WHERE id='$i'");
			header('location: showdb.php');
		}
}

?>