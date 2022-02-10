<?php
    $title = $_POST['title'];
    $body = $_POST['body'];
    $conn = new mysqli('localhost','root','','notice');
    if ($conn -> connect_error) {
        die('Failed to connect to MySQL:'.$conn->connect_error);
  }
  else{
    $insert = "insert into notice (title, body) values(?,?)";
    $stmt=$conn->prepare($insert);
    $stmt->bind_param("ss",$title,$body);
    $stmt->execute();
    header("Location: home_admin.html");
  }
?>