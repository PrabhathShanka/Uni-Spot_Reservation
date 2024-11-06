<?php
session_start();


if (isset($_SESSION['userName'])) {

    $uname = $_SESSION['userName'];
} else {

    header("Location: Sign in3.html");
    exit();
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
    <link href="img/susl_logo_transparent.png" rel="icon">

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
            <img src="img/susl_logo_transparent.png" alt="Your Image Description" style="width: 70px; height: 70px; vertical-align: middle; margin-right: 10px;">
            <h2 class="m-0 text-primary">
                <!-- Uncomment and place the image source URL -->

                Sabaragamuwa <br> University of Sri Lanka
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#go-home" class="nav-item nav-link active">Home</a>
                <a href="#go-about" class="nav-item nav-link">About</a>
                <a href="#go-services" class="nav-item nav-link">Spot Details</a>
                <a href="#go-contact" class="nav-item nav-link">LOCATION </a>
                <a href="user_setting.php" class="nav-item nav-link">settings</a>
            </div>

            <div class="nav-item dropdown">
                <a href="index.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">LOG OUT<i class="fa fa-arrow-right ms-3"></i></a>

            </div>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Home Front Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-01.jpeg" alt="Image 1">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">

                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Uni-Spot Reservation </h1>
                                    <a href="#go-services" class="btn btn-primary py-3 px-5 animated slideInDown">Spot Booking / Spot Managing<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated wow zoomIn" data-wow-delay="0.2s">
                                    <img class="img-fluid" src="img/theater.jpg" alt="Front Car 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/openair .jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">

                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Uni-Spot Reservation</h1>
                                    <a href="#go-services" class="btn btn-primary py-3 px-5 animated slideInDown">Spot Booking / Spot Managing<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated wow zoomIn" data-wow-delay="0.2s">
                                    <img class="img-fluid" src="img/geo.jpg" alt="Front Car 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Front Side Button Start-->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- Front Side Button End-->
        </div>
    </div>
    <!-- Home Front End -->

    <!-- About Start -->
    <div class="main" id="go-about">
        <h1 class="text-white mb-0"> . </h1>
        <h1 class="text-white mb-0"> . </h1>
    </div>

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">- About Us -</h1>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/carousel-bg-01.jpeg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">20 <span class="fs-4">Spots +</span></h1>
                            <h4 class="text-white">Reservation</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4"> Welcome to the <span class="text-primary">University Spot Reservation</span> System
                    </h1>
                    <p class="mb-4">
                        The University Spot Reservation System is a digital solution designed to address the
                        inefficiencies of traditional spot booking procedures at universities. Our goal is to
                        simplify the process of booking spaces such as playgrounds, open-air theatres, auditoriums,
                        and swimming pools by offering a centralized, intuitive platform. With our system, students
                        can avoid the hassles of lengthy lines, manual scheduling conflicts, and wasted time, making
                        the booking process as smooth and efficient as possible.
                        <br>

                        The system offers real-time availability checks for various university facilities, flexible booking options,
                        robust security measures, and a user-friendly interface to track reservation history. Additionally, the system
                        provides timely notifications and reminders, potential integration with the university's academic calendar for optimized scheduling,
                        and comprehensive data analytics on facility usage patterns to inform resource allocation decisions. Our primary target audience is
                        university students, but university staff and administration also benefit from insights into resource utilization and improved management
                        capabilities.

                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <hr>
    <hr>
    <hr>

    <!-- Spots Details  Start -->

    <div class="main" id="go-services">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-primary text-uppercase">- Spot Details -</h1>
                <br>



                <?php


                require 'DatabaseConnection.php';

                // Check if a search query is set
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                ?>


                <!-- Search Form -->
                <form method="GET" action="">
                    <input type="text" name="search" placeholder="Search spot by name" value="<?php echo htmlspecialchars($search); ?>">
                    <input type="submit" value="Search">
                </form>
                <br>
                <table border=1 cellspacing=0 cellpadding=10>
                    <tr>
                        <!-- Add table headers if needed -->
                    </tr>
                    <?php
                    // Query to select spots based on the search query
                    if ($search) {
                        $query = "SELECT * FROM spot WHERE spotName LIKE '%$search%'";
                    } else {
                        $query = "SELECT * FROM spot";
                    }

                    $rows = mysqli_query($conn, $query);
                    ?>

                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">
                                <h1><?php echo $row["spotName"]; ?></h1><br>
                                <img src="img2/<?php echo $row["image"]; ?>" width="600" height="400" title="<?php echo $row['image']; ?>"><br>
                                <?php echo $row["description"]; ?><br>
                                <h1><a href='Make_an_Appoinment.php?id=<?php echo urlencode($row["spotName"]); ?>'><b>| BOOK NOW |</b></a></h1>

                                <hr style="border: 4px solid #FF5733;">


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>








            </div>
        </div>
    </div>
    <!-- spots Details  End -->


    <hr>
    <hr>
    <hr>


    <!-- LOCATION  Start -->
    <div class="main" id="go-contact">
        <h1 class="text-white mb-0"> . </h1>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-primary text-uppercase">- location -</h1>

                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126661.41682215152!2d79.6747209!3d6.9287251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38a5d15e55917%3A0x92bb8770edf29b53!2sSabaragamuwa%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1692345678901!5m2!1sen!2slk" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- LOCATION  End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-0">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Contact Info</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        Contact Info
                        Sabaragamuwa University of Sri Lanka,
                        P.O. Box 02, Belihuloya, 70140, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94-45-2280014 / +94-45-2280087</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@sab.ac.lk</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4"> </h4>
                    <h6 class="text-light"> </h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Informations</h4>
                    <a class="btn btn-link" href="Terms and Conditions.html">Terms and Conditions</a>
                    <a class="btn btn-link" href="FAQ.html">FAQ</a>
                    <a class="btn btn-link" href="Privacy.html">Privacy</a>
                </div>
            </div>
        </div>
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

    <!-- Javascript -->
    <script src="js/main.js">
    </script>

</body>

</html>