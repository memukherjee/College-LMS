<?php

	$email = $_POST['email'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root','password','signup');
	if ($conn -> connect_error) {
  		die('Failed to connect to MySQL:'.$conn->connect_error);
	}
	else{

		$s = "select * from input where emailid='$email' and pswrd='$password' ";
		$t = "select * from teacher where emailid='$email' and pswrd='$password'";

		$res = mysqli_query($conn,$s);
		$ret = mysqli_query($conn,$t);

		if((mysqli_num_rows($res) == 1) or (mysqli_num_rows($ret) == 1)){
			echo "login successful....";
		}
		else{
			echo "Wrong email or password!! Check again..";
		}
	}
?>