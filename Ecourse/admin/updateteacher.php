<?php
$conn = mysqli_connect("localhost","root","","ecourse");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}

$name =$_POST['txtname'];
$subject =$_POST['txtsubject'];
$image= $_FILES['image'];
$imagename= $_FILES['image'] ["name"];
$imgtmp = $_FILES['img']['tmp_name'];

$query ="UPDATE `teacher` SET  `name`='$name',`subject`='$subject',`image`='$image' WHERE  id='$id'";

$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    // header('location:teacher.php');
}
?>