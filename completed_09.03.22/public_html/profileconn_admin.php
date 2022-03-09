<?php
session_start();
include 'dbconn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$semail = $_SESSION['emal'];

//echo $password;

if($semail==$email){
	$up = mysqli_query($conn,"UPDATE adminn SET emailid='$email',pswrd='$password' WHERE emailid='$semail'");
	echo '<script>alert("Details updated successfully..Please login again")
			window.location.href="index.html";
			</script>';
}
else{
		$stemail_query = mysqli_query($conn , "SELECT * FROM adminn WHERE emailid = '$email' ");
		if(mysqli_num_rows($stemail_query) > 0){
			echo '<script>alert("Email already exist...Try using different email..")
			window.location.href="profile_admin.php";
			</script>';

			//header("Location: register.html");
		}
		else{
			$up = mysqli_query($conn,"UPDATE adminn SET emailid='$email',pswrd='$password' WHERE emailid='$semail'");
			echo '<script>alert("Details updated successfully..Please login again")
			window.location.href="index.html";
			</script>';
		}
}

?>