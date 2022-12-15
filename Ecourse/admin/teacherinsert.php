<?php
 include('include/config.php');
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into teacher values(null,'$name','$subject','$imagename')");

  header('Location:teacher.php');
?>