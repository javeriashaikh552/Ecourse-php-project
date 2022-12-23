<?php
session_start();
error_reporting(0);
if($_SESSION["status"] == ""){
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


<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">login form</h5>
                <h1>login For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="index.php" method="POST">
                            <!-- <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div> -->
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" id="pass" placeholder="password" name="pass" required="required" data-validation-required-message="Please enter a password" />
                                <p class="help-block text-danger"></p>
                            </div>
                          
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
include_once("conn.php");

if(isset($_REQUEST["submit"])){

    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];


    $query = "SELECT * FROM 'user' WHERE  `email` = '$email' AND `password`= '$pass'";

    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_array($result)){
                $_SESSION["name"] = $row [1];
                $_SESSION["status"] = $row [5];

            


            
        }
    }

}


?>


<script>
        window.location.assign("index.php");

</script>
<?php
}
else{
    ?>

<script>
        window.location.assign("login.php?invalid=email");

</script>
<?php
}
?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>