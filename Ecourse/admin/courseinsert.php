<?php
include('include/config.php');
$coursename=$_POST['txtcoursename'];
$courseprice=$_POST['txtcourse price'];
$lectures=$_POST['txtlectures'];
$duration=$_POST['txtduration'];
$instructor=$_POST['txtinstructor'];
$image= $_FILES['image'];
$imagename = $image['name'];
$tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into course values('null','$coursename','$course price','$lectures','$duration','$instructor','$imagename')");

  header('Location:course.php');
?>