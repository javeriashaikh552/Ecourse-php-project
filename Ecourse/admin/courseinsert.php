<?php
include('include/config.php');
$coursename=$_POST['txtcoursename'];
$price=$_POST['txtprice'];
$lectures=$_POST['txtlectures'];
$duration=$_POST['txtduration'];
$instructor=$_POST['txtinstructor'];


  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into course values('null','$coursename',$price,'$lectures','$duration','$instructor')");

  header('Location:course.php');
?>