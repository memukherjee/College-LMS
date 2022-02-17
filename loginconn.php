<?php
    session_Start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$_SESSION['em']=$email;

	$conn = new mysqli('localhost','root','','signup');
	if ($conn -> connect_error) {
  		die('Failed to connect to MySQL:'.$conn->connect_error);
	}
	else{

		$s = "select * from members where emailid='$email' and pswrd='$password' ";      //student
		$t = "select * from members where emailid='$email' and pswrd='$password'";       //teacher
		$a =  "select * from adminin where emailid='$email' and pswrd='$password'";      //admin

		$res = mysqli_query($conn,$s);
		$ret = mysqli_query($conn,$t);
		$rea = mysqli_query($conn,$a);

		$rows=mysqli_fetch_array($res);
		$rowt=mysqli_fetch_array($ret);
		$rowa=mysqli_fetch_array($rea);
		
		if((mysqli_num_rows($res) == 1)){
		$_SESSION['name']=$rows['nam'];
		$_SESSION['dept']=$rows['dept'];
		$_SESSION['yr']=$rows['yr'];
		$_SESSION['ID']=$rows['ID'];

		}
		else if((mysqli_num_rows($ret) == 1)){
			$_SESSION['name']=$rowt['nam'];
			$_SESSION['dept']=$rowt['dept'];
			$_SESSION['yr']=$rowt['yr'];
			$_SESSION['ID']=$rowt['ID'];

		}
		else{
			$_SESSION['name']=$rowa['nam'];
			$_SESSION['dept']=$rowa['dept'];
			$_SESSION['yr']=$rowa['yr'];
			$_SESSION['ID']=$rowa['ID'];
		}

		if((mysqli_num_rows($res) == 1) or (mysqli_num_rows($ret) == 1)){
			header("Location: home.php");
			
		}
		else if((mysqli_num_rows($rea) == 1))
		{
			header("Location: home_admin.php");
		}
		else{
			header("Location: loginfail.html");
		
		}
	}
?>