<?php

if(isset($_POST["submitadmin"])){

$username1 = $_POST['usname'];
$pass = $_POST['password'];



require 'DatabaseConnection.php';

if (!$conn)
{
  die("error:".mysqli_connect_error());
}
if($password1 == $password2) {
$sql = "INSERT INTO `admindetails`(`uname`, `password`) VALUES ('$username1','$pass')";

$ret = mysqli_query($conn,$sql);
echo "No of records inserted: $ret <br>";
// header("Location: admin_dash2.php?dashb=+Dashboard");

echo
            "
            <script>
              alert('registration successful!!!!');
              document.location.href = 'admin_setting.php';
            </script>
            ";
//Disconnect 
mysqli_close($conn);    
echo
"
<script>
  alert('registration successful!!!!');
  document.location.href = 'admin_setting.php';
</script>
";
            exit();
            

    


}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sabaragamuwa Uni</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .heading{
        color: rgb(13, 0, 114);
        font-size:100%;
        }
        .heading:hover {
        color: rgb(255, 255, 255);
        font-size:110%;
        }
    </style>
</head>

<body>

    <div class="main" id="go-home"></div>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <!--i class="fa fa-car me-3"--> </i>Add Admin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="admin_dash2.php?dashb=+Dashboard" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Home<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->








<!--Sign in Start-->

<div class="container-fluid bg-secondary booking my-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-3 py-10">
                
            </div>
         <div class="col-lg-6">   <!--dikkaranna-->
                <div class="bg-primary h-100 d-flex flex-column justify-content-center  p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-center text-white mb-4">Registration Admin</h1>  

                    <form action="#" method="POST">
                        
                        <div class="row g-3">
                            <div>
                                <h4>Username:</h4>
                                <input type="text" name="usname" class="form-control border-0" placeholder="Username" style="height: 55px;" required>
                                <br>
                            

                            
                                <h4>Password:</h4>
                                <input type="password"  name="password" class="form-control border-0" placeholder="Password" style="height: 55px;"required>
                                <br>
                                <br>
                            </div>

                            <div class="col-12">
                                <input type="submit" name="submitadmin" value="submit" class="btn btn-secondary w-100 py-3"> </input>
                            </div>
                                

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Sign in end-->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-1 mt-0 wow fadeIn position-fixed bottom-0" data-wow-delay="0.2s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                            &copy; Copyright SUSL 2021. <a class="border-bottom" href="index.html">All Rights Reserved.</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>