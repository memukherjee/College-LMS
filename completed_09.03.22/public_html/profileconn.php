<?php
session_start();
include 'dbconn.php';

$e = $_POST['email'];
$password = $_POST['password'];
$semail = $_SESSION['eml'];

// echo $semail;
// echo $e;

if($semail==$e){
	$up = mysqli_query($conn,"UPDATE alluser SET emailid='$e',pswrd='$password' WHERE emailid='$semail'");
	echo '<script>alert("Details updated successfully..Please login again")
			window.location.href="index.html";
			</script>';
}
else{
		$stemail_query = mysqli_query($conn , "SELECT * FROM alluser WHERE emailid = '$e' ");
		if(mysqli_num_rows($stemail_query) > 0){
			echo '<script>alert("Email already exist...Try using different email..")
			window.location.href="profile.php";
			</script>';

			//header("Location: register.html");
		}
		else{
			$up = mysqli_query($conn,"UPDATE alluser SET emailid='$e',pswrd='$password' WHERE emailid='$semail'");
			echo '<script>alert("Details updated successfully..Please login again")
			window.location.href="index.html";
			</script>';
		}
}

?>