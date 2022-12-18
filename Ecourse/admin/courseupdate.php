<?php
$conn = mysqli_connect("localhost","root","","ecourse");
if ($conn){
    echo "connection refuse";
}
else{
    echo "connection established";
}


$id = $_POST['id'];
$coursename = $_POST['txtcoursename'];
$courseprice = $_POST['txtcourse price'];
$lectures = $_POST['txtlectures'];
$duration = $_POST['txtduration'];
$instructor = $_POST['txtinstructor'];

$query ="UPDATE `course` SET `coursename`='$coursename',`course price`='$course price',`lectures`='$lectures',`duration`='$duration',`instructor`='$instructor' WHERE id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:course.php');
}
?>

<script>
    window.location.assign("course.php");
</script>