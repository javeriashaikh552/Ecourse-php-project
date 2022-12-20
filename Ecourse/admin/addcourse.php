<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Testimonial - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">E-courses Website</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="teacher.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Teacher
                            </a>

                            <a class="nav-link" href="student.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                             Student
                            </a> 

                            <a class="nav-link" href="course.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Couses
                            </a>


                            <a class="nav-link" href="testimonial.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Testimonial
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">  
                <main>
                <h1 style="text-align:center;">COURSE</h1> 
                <br>         

                                             
<form action="courseinsert.php" method="post" >
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">CourseName</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your course name" name="txtcoursename">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">course price</label>
<div class="col-sm-10">
<input type="number" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your course price " name="txtprice">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">lectures</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your lectures " name="txtlectures">
</div>
</div>



<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Duration</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your duration " name="txtduration">
</div>
</div>



<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">instructor</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your instructor " name="txtinstructor">
</div>
</div>



<button class="btn btn-primary" name="submit" type="submit">Submit</button>
<a href="./course.php">showdata</a>

</form>
</div>
    
<?php 
// error_reporting(0);
// $coursename=$_POST['txtcoursename'];
// $courseprice=$_POST['txtcourse price'];
// $lectures=$_POST['txtlectures'];
// $duration=$_POST['txtduration'];
// $instructor=$_POST['txtinstructor'];
// $image= $_FILES['image'];
// $imagename = $image['name'];
// $tempimagename = $image['tmp_name'];
// $path = "images/".$imagename;

// move_uploaded_file($imagetmp,$path);
// move_uploaded_file($tempiamgename,'images/'.$imagename.'');

// $conn = mysqli_connect("localhost","root","","ecourse");

// if(!$conn){
//     echo "connection refuse";
// }

// $query ="INSERT INTO `course`(`id`, `coursename`, `course price`, `lectures`, `duration`, `instructor`,`image`) VALUES ('null','$coursename','$course price','$lectures','$duration','$instructor','$imagename')";

// $q= mysqli_query($conn,$query);


// if(!$q){
//     echo "query not exectired!";
// }
// else{
//     echo "query sucess!";
// }


// header('Location:course.php');
?> 
                    </div>


                </main>
                
            </div>
          
                    </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</php>
         


 