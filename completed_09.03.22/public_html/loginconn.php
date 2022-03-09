<?php
    //ob_start();

	session_start();
	include 'dbconn.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	    $_SESSION['em'] = $email;
	    
	    $_SESSION['status']= true;

		$st = "select * from alluser where emailid='$email' and pswrd='$password' ";
		
		$a = "select * from adminn where emailid='$email' and pswrd='$password'";

		$far=mysqli_query($conn,$a);
		$row=mysqli_fetch_array($far);

		$res = mysqli_query($conn,$st);
		$rea = mysqli_query($conn,$a);

		$rst = mysqli_fetch_array($res);

		$_SESSION['nm'] = $row['nam'];
		$_SESSION['emal'] = $row['emailid'];
		$_SESSION['nms'] = $rst['nam'];
		$_SESSION['depts'] = $rst['dept'];
		$_SESSION['year'] = $rst['yr'];
		$_SESSION['iD'] = $rst['id'];
		$_SESSION['eml'] = $rst['emailid'];
		$nvs = mysqli_query($conn,"select * from input where emailid='$email' and pswrd='$password'");
		$cnvs= mysqli_fetch_array($nvs);

		$veri = 'nv';
		
		if(mysqli_num_rows($rea) == 1){
			//echo $_SESSION['nm'];
			
			
			header("Location: showdatalogin.php");
			die();
		}
		else if(mysqli_num_rows($res) == 1 or mysqli_num_rows($nvs)==1){

				if($cnvs['verify']== $veri){
					header("Location: nonVerified.html");
					die();
				}
				else{header("Location: home_stud_tech.php");die();}
			}
		else{
				header("Location: loginfail.html");
				die();
			}
	//ob_end_flush();
?>
