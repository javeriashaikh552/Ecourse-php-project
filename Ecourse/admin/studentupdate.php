<?php
$conn = mysqli_connect("localhost","root","","ecourse");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}

$id =$_POST['id'];
$name =$_POST['txtname'];
$age =$_POST['txtage'];
$add =$_POST['txtadd'];
$email =$_POST['txtemail'];
$course =$_POST['txtcourse'];
$query ="UPDATE `student` SET `name`='$name',`age`='$age',`add`='$add',`course`='$course',`email`='$email' WHERE id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:student.php');
}
?>