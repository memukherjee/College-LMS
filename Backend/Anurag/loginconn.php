<?php
    session_Start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$_SESSION['em']=$email;

	$conn = new mysqli('localhost','/','/','/');
	if ($conn -> connect_error) {
  		die('Failed to connect to MySQL:'.$conn->connect_error);
	}
	else{

		$s = "select * from student where emailid='$email' and pswrd='$password' ";      //student
		$t = "select * from teacher where emailid='$email' and pswrd='$password'";       //teacher
		$a =  "select * from adminin where emailid='$email' and pswrd='$password'";      //admin

		$res = mysqli_query($conn,$s);
		$ret = mysqli_query($conn,$t);
		$rea = mysqli_query($conn,$a);

		$rows=mysqli_fetch_array($res);
		$rowt=mysqli_fetch_array($ret);
		
		if((mysqli_num_rows($res) == 1)){
		$_SESSION['name']=$rows['nam'];
		$_SESSION['dept']=$rows['dept'];

		}
		else{
			$_SESSION['name']=$rowt['nam'];
			$_SESSION['dept']=$rowt['dept'];

		}
		

		if((mysqli_num_rows($res) == 1) or (mysqli_num_rows($ret) == 1)){
			header("Location: home.php");
			//echo $row['emailid'];

		}
		else if((mysqli_num_rows($rea) == 1))
		{
			header("Location: home_admin.html");
		}
		else{
			header("Location: loginfail.html");
		
		}
	}
?>