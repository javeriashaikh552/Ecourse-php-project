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
$description =$_POST['description'];
// $image= $_FILES['image'];
// $imagename = $image['name'];
// $tempimagename = $image['tmp_name'];

$query ="UPDATE `testmonial1` SET `name`='$name',`description`='$description' WHERE   id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:testmonial.php');
}
?>


<script>
    window.location.assign("testmonial.php");
</script>