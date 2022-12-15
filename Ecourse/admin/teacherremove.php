<?php
$conn = mysqli_connect("localhost", "root", "", "ecourse"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}


    $id = $_GET["id"];

    $query = "DELETE FROM `teacher` WHERE `id` = $id";

    mysqli_query($conn,$query);

    // header("location: showData.php");   

?>

<script>
    window.location.assign("teacher.php");
</script>





