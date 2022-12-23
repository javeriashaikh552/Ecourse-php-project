<?php
$conn = mysqli_connect("localhost","root","","ecourse");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <div class="container">
        <div class="load">
            <div class="start">
                <!-- <img id="loader" class="ldd  " src="./loader gif/loader.gif" alt=""> -->
                <a href="login.php"></a>
            </div>
        </div>
    </div>

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
                                Courses
                            </a>


                            <a class="nav-link" href="testimonial.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Testimonial
                            </a>
                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                contact
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
          
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Teacher</div>
                                    <span>
                                      <?php
                                    // $query="SELECT COUNT(*) AS 'count' FROM 'teacher'";
                                    // $result =mysqli_query($conn,$query);
                                    // $row =mysqli_fetch_assoc($result);
                                    // echo $count =$row['count'];
                                    ?>
                                    </span>
                                    

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="teacher.php">View Details</a>
                                     
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Student</div>
                                    <?php
                                    // $query="SELECT COUNT(*) AS 'count' FROM 'student'";
                                    // $result =mysqli_query($conn,$query);
                                    // $row = mysqli_fetch_assoc($result);
                                    // echo $count = $row['count'];
                                    ?>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="student.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">COURSE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="course.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">TABLE</div>
                                   
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                   
                                        <a class="small text-white stretched-link" href="tables.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                      <span>
                                      <?php
                                    // $query="SELECT COUNT(*) AS 'count' FROM 'users'";
                                    // $result = mysqli_query($conn,$query);
                                    // $row = mysqli_fetch_assoc($result);
                                    // echo $count = $row['count'];
                                    ?>
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        
        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                              <th>password</th>
                                             
                                           
                                        
                                        </tr>
                                    </thead>



                                    <tfoot>
                                        <tr>
                                        <th>id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                              <th>password</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
 <?php
   $query="SELECT * from `index`";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)){
    
  while ($row = mysqli_fetch_array($result)){
    ?>

    <tr>
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
     
      <!-- <td> <a  href ="?id=<?=$row['id']?>" class="btn btn-success">Edit</a></td>  -->
     <td> <a  href ="indexremove.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td> 
    </tr>
    
    <?php
   } }
  ?>
                       
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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
