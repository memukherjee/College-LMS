<?php
session_start();
if($_SESSION['yr']=="NA"){
    header("Location: notes_teacher.php");
}
else{
    header("Location: notes_student.php");
}
?>