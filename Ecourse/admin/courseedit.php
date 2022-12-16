<?php
 $conn = mysqli_connect("localhost","root","","ecourse");         //hostname username password databasename
 if(!$conn) {
     echo "connection refuse!";
    //  header('Location:showData.php');
 } else {
     echo "connection established!";
 }


     $id = $_GET['id'];
     $row = mysqli_fetch_assoc(mysqli_query($conn,"select * from course where id='$id'"));


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
    <form action="cupdate.php" method="post">
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" readonly value="<?= $row['id'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="id">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">course Name</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['course name'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your course Name" name="txtcourse name">
                </div>
               
               
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">instructor</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['instructor'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your instructor" name="txtinstructor">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">rating</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?= $row['rating'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your rating" name="txtrating">
                </div>
                

                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">lectures</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['lectures'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your lectures" name="txtlectures">
                </div>


                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">duration</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['duration'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your duration" name="txtduration">
                </div>



                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">skill level</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['skill level'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your skill level" name="txtskill level">
                </div>


                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">language</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['language'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your language" name="txtlanguage">
                </div>


                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">course price</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?= $row['course price'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your course price" name="txtcourse price">
                </div>
                <br><br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>


        <a href="./course.php">showdata</a>
       
    </div>
    

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>