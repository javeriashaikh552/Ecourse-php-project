<?php
$conn = mysqli_connect("localhost","root","","ecourse"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}


    $id = $_GET["id"];

    $query = "DELETE FROM `course` WHERE `id` = $id";

    mysqli_query($conn,$query);

    // header("location: showData.php");   

?>

<script>
    window.location.assign("course.php");
</script>





<!-- $conn = mysqli_connect("localhost", "root", "", "formhandling"); 
if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}
    $id = $_GET["id"];
    $query = "DELETE FROM `userdetails` WHERE `id` = $id";
    mysqli_query($conn,$query);
    // header("Location: showData.php");    -->



<!-- <script>
    window.location.assign("showData.php");
</script> -->