<?php
    session_Start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost','root','','signup');
    if ($conn -> connect_error) {
        die('Failed to connect to MySQL:'.$conn->connect_error);
  }
  else{
    $update = "update members set emailid= ? , pswrd= ? where emailid= ?";
    $stmt=$conn->prepare($update);
    $stmt->bind_param("sss",$email,$password,$_SESSION['em']);
    $stmt->execute();
    header("Location: index.html");
  }

?>