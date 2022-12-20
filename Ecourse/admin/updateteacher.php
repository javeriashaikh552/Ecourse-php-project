<?php
$conn = mysqli_connect("localhost","root","","ecourse");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}


$id =$_POST['id'];
$name =$_POST['name'];
$subject =$_POST['subject'];
// $image= $_FILES['image'];
// $imagename = $image['name'];
// $tempimagename = $image['tmp_name'];

$query ="UPDATE `teacher` SET `name`='$name',`subject`='$subject' WHERE   id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:teacher.php');
}
?>


<script>
    window.location.assign("teacher.php");
</script>