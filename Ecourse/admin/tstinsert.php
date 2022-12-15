<?php
 include('include/config.php');
  $name = $_POST['name'];
  $description = $_POST['description'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into testmonial1 values(null,'$name','$description','$imagename')");

  header('Location:testimonial.php');
?>


