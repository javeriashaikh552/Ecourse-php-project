<?php
$conn = mysqli_connect("localhost","root","","ecourse");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}

$coursename=$_POST['txtcourse name'];
$courseprice=$_POST['txtcourse price'];
$lectures=$_POST['txtlectures'];
$duration=$_POST['txduration'];

$instructor=$_POST['txtinstructor'];
$image=$_POST['txtimage'];





$query ="UPDATE `course` SET `coursename`='$coursename',`course price`='$courseprice',`lectures`='$lectures',`duration`='$duration',`instructor`='$instructor',`image`='$image' WHERE 1id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:student.php');
}
?>