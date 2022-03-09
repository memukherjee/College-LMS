<?php
    include 'dbconn.php';
    $title = $_POST['title'];
    $body = $_POST['body'];
    
  

    $insert = "insert into notice (title, body) values(?,?)";
    $stmt=$conn->prepare($insert);
    $stmt->bind_param("ss",$title,$body);
    $stmt->execute();
    header("Location: noticeAdmin.php");
  
?>