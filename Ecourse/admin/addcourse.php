<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Course add page- sb admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Education Systems</a>
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
        <br>
                       <br>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                      
                      

                            <a class="nav-link collapsed" href="./teacher.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Teacher
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./teacher.php">Teacher</a>
                                  
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="./student.php" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                         Student
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="./student.php">STUDENTS</a>
                                    </nav>
                                </div>
                                    
                                  
                            <a class="nav-link" href="course.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                COURSE
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Contact
                            </a>
                            <a class="nav-link" href="Testimonial.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Testimonial
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
          

           
            <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Course Register</h1>
                        
   


                        <form action="course.php" method="post">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">CourseName</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your course name" name="txtcoursename">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">course price</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your course price " name="txtcourse price">
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

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Example file input</label>
<div class="col-sm-10">
<input type="file" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your instructor " name="txtimage">
</div>













<button class="btn btn-primary" name="submit" type="submit">Submit</button>

</form>

<?php 
error_reporting(0);
 
$coursename=$_POST['txtcourse name'];
$courseprice=$_POST['txtcourse price'];
$lectures=$_POST['txtlectures'];
$duration=$_POST['txduration'];

$instructor=$_POST['txtinstructor'];
$image=$_POST['txtimage'];



$conn = mysqli_connect("localhost","root","","ecourse");

if(!$conn){
    echo "connection refuse";
}

$query ="INSERT INTO `course`(`id`, `coursename`, `course price`, `lectures`, `duration`, `instructor`, `image`) VALUES ('null','$coursename','$course price','$lectures','$duration','$instructor','$image')";

$q= mysqli_query($conn,$query);


if(!$q){
    echo "query not exectired!";
}
else{
    echo "query sucess!";
}


// header('Location:showdata.php');
?> 




                     
                    </div>
          </main>
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
</html>


                                        
                                      