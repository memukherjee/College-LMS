<?php
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$year = $_POST['year'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root','password','signup');
	if ($conn -> connect_error) {
  		die('Failed to connect to MySQL:'.$conn->connect_error);
	}
	/*else{
		$stmt = $conn->prepare("insert into input(nam,dept,yr,emailid,pswrd)
								values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$name,$dept,$year,$email,$password);
		$stmt->execute();
		//echo "registration successfully";
		header("Location: nonVerified.html");
		$stmt->close();
		$conn->close();
	}*/
	else{

		$semail = "SELECT * FROM input WHERE emailid = '$email' ";
		$semail_query = mysqli_query($conn , $semail);

		$temail = "SELECT * FROM teacher WHERE emailid = '$email' ";
		$temail_query = mysqli_query($conn , $temail);

		if((mysqli_num_rows($semail_query) > 0) or (mysqli_num_rows($temail_query) > 0)){
			echo '<script>alert("Email already exist...Try using different email..")</script>';
			//header("Location: register.html");
		}
		else{
			$yearNA = 'NA';
			if($year == $yearNA){
				$stmt = $conn->prepare("insert into teacher(nam,dept,yr,emailid,pswrd)
									values(?,?,?,?,?)");
				$stmt->bind_param("sssss",$name,$dept,$year,$email,$password);
				$stmt->execute();
				//echo "registration successfully";
				header("Location: nonVerified.html");
				$stmt->close();
				$conn->close();
			}
			else{
				$stmt = $conn->prepare("insert into input(nam,dept,yr,emailid,pswrd)
									values(?,?,?,?,?)");
				$stmt->bind_param("sssss",$name,$dept,$year,$email,$password);
				$stmt->execute();
				//echo "registration successfully";
				header("Location: nonVerified.html");
				$stmt->close();
				$conn->close();
			}
		}
	}
?>