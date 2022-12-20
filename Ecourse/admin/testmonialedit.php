<?php
 $conn = mysqli_connect("localhost","root","","ecourse");         //hostname username password databasename
 if(!$conn) {
     echo "connection refuse!";
     header('Location:testimonial.php');
 } 
 else {
     echo "connection established!";
 }


     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from testmonial1 where id='$id'"));


    //  header('Location:showData.php');
        ?>
    

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>




<div class="container card card-body">
    <h1>Form edit</h1>
    <form action="testmonialupdate.php" method="post">
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" readonly value="<?= $row['id'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="id">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['name'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="name">
                </div>
               
               
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">description</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['description'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your description " name="description">
                </div>
                <!-- <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">image</label>
                <div class="col-sm-10">
                    <input type="file"  value="<?= $row['image'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your image" name="image">
                </div> -->
                
                <br><br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>


        <a href="./testimonial.php">showdata</a>
       
    </div>
    

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>