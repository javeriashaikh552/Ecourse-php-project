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
        <title>Course - sb admin</title>
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
                        <h1 class="mt-4">COURSE</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">course</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloremque.
                                <code>.sb-sidenav-light</code>
                                class to the
                                <code>.sb-sidenav</code>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloremque.
                                <code>.sb-sidenav-dark</code>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloremque.
                            </div>
                        </div>
                        <a class="btn btn-primary" href="./addcourse.php" role="button">Add New Course</a>
<br>
<br>
<br>
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
                                            <th>course Name</th>
                                            <th>price</th>
                                              <th>lectures</th>
                                            <th>duration</th>
                                            <th>instructor</th>
                                        
                                
                                           
                                        
                                        </tr>
                                    </thead>


                                    
                                    <tfoot>
                                        <tr>
                                        <th>id</th>
                                            <th>course Name</th>
                                            <th>price</th>
                                              <th>lectures</th>
                                            <th>duration</th>
                                            <th>instructor</th>
                                          
                                            
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
 <?php
 include('include/config.php');
   $query="SELECT * from `course`";
   $result = mysqli_query($conn,$query);
   if(mysqli_num_rows($result)){
   
 while ($row = mysqli_fetch_array($result)){
    ?>

<tr> 
                                        <td><?php echo $row[0] ?></td>
                                         <td><?php echo $row[1] ?></td>
                                         <td><?php echo $row[2] ?></td>
                                         <td><?php echo $row[3] ?></td>
                                         <td><?php echo $row[4] ?></td>
                                         <td><?php echo $row[5] ?></td>
                       
     <td> <a  href ="courseedit.php?id=<?=$row['id']?>" class="btn btn-success">Edit</a></td>
    <td> <a  href ="courseremove.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
     </tr>
    
    <?php
   } }
  ?>
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

<!-- <td><?= $row['id'] ?></td>
    <td><?= $row['coursename'] ?></td>
    <td><?= $row['courseprice'] ?></td>
    <td><?= $row['lectures'] ?></td>
   <td><?= $row['duration'] ?></td>
   <td><?=$row['instructor'] ?></td> -->