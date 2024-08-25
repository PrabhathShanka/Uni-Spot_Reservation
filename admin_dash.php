<?php
session_start();


if (isset($_SESSION['Faculty'])) {

    $Faculty = $_SESSION['Faculty'];
  //  echo $Faculty;



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


    <link rel="stylesheet" href="css/dashboard button.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    <style>
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #table tr{background-color: #f2f2f2;}
            
            #table tr:hover {background-color: #ddd;}
            
            #table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #cd0606;
                color: white;
            }
            .heading{
                    color: rgb(13, 0, 114);
                    font-size:100%;
                    }
            .heading:hover {
                    color: rgb(255, 255, 255);
                    font-size:110%;
                    }

            .sidebar0{
                    display:flex;
            }

            .sidebar1{
                    width:10%;
            }

            .sidebar2{
                    width:90%;
            }


            .box4 {
                width: 150%;
                height: 150%;
                
            }

            
    </style>
</head>

<body>

<div class="main" id="go-home"></div>


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
                    <a href="?appo=Appoinment" class="nav-item nav-link ">Pending Booking</a>
                    <a href="?pEvent=event" class="nav-item nav-link">Pending event</a>
                    <a href="?histo=history" class="nav-item nav-link">Event history</a>
                    <a href="?sManege=SpotManaged" class="nav-item nav-link">Spot managed  </a>
                    <a href="admin_setting.php" class="nav-item nav-link">settings</a>


                        <div class="nav-item dropdown">
                            <a href="index.html" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
                        </div>
                </div>
        </div>        
    </nav>
    <!-- Navbar End -->









<div class="sidebar0">



    <div class="sidebar1">
                            
                            <div class="sidebar">
                                        
                                    <div class="logo-details">
                                        
                                            
                                            
                                    </div>
                                        <!--<ul class="nav-list"> -->
                                                    <li>
                                                        <br>
                                                        <div class="logo-details">
                                                            <div class="logo_name">Admin Panel</div>
                                                            <i class='bx bx-menu' id="btn" ></i>
                                                        </div>
                                                    </li>
                                                    
        
                                                    <li>
                                                    <a href='?appo=Appoinment'>
                                                        <i class='bx bx-chat' ></i>
                                                        <span class="links_name">Messages</span>
                                                    </a>
                                                    <span class="tooltip">Pending Booking</span>
                                                    </li>

   


                                                    <li>
                                                    <a href='?pEvent=Appoinment'>
                                                        <i class='bx bx-pie-chart-alt-2' ></i>
                                                        <span class="links_name">event</span>
                                                    </a>
                                                    <span class="tooltip">Pending event</span>
                                                    </li>


                                                    <li><a href='?histo=history'>
                                                        <i class='bx bx-search' ></i>
                                                        <input type="text" placeholder="Search...">
                                                        <span class="tooltip">Event history </span>
                                                    </li>
                                  


                                                    <li>
                                                        <a href="?sManege=SpotManaged">
                                                        <i class='bx bx-grid-alt'></i>
                                                        <span class="links_name">Dashboard</span>
                                                        </a>
                                                        <span class="tooltip">spot management</span>
                                                    </li>

                                                    
                                                    <li class="profile">
                                                    <a href="index.html">
                                                        <div class="profile-details">
                                                                    <div class="lout">  &nbsp;&nbsp;&nbsp;&nbsp;Log Out</div>      
                                                        </div>
                                                        <i class='bx bx-log-out' id="log_out" >&nbsp;&nbsp;</i>
                                                    </a>
                                                    </li>
                                        <!--</ul>-->
                            </div>
        
    </div>

    <div class="sidebar2">

                      
     
<?php

    //Pending Appoinment start
    if(isset($_GET['appo'])){
        

// Database connection parameters
require 'DatabaseConnection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // If no search query, fetch all records
    $sql = "SELECT * FROM bookingspot";
    $result = $conn->query($sql);


$conn->close();

$rawValue = "pending"
?>



    <h2>Pending Booking</h2>
    <br>

    
    <?php 
echo "<table border='1px' id='table' align='right'><tr><th>Spot Name</th><th>Evevnt Name</th><th>Discription</th><th>Date</th><th>Time</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
  if ($row['mainAdminApproving'] == $rawValue & $row['spotAdminApproving'] == "Approved") {
    // Use $row instead of $raw
    echo "<tr><td>".$row['spotName']."</td><td>".$row['eventName']."</td><td>".$row['DescriptionOfEvents']."</td><td>".$row['date']."</td><td>".$row['time']."</td><td>
    <a href='MainAdminBookin_approving.php?id=".$row['bookingID']."'><b>| Approving |</b></a>
    <a href='MainAdminBookin_Not_approving.php?id=".$row['bookingID']."'><b>| Not Approving |</b></a></td></tr>";
}
}
echo "</table>";


    
}
//Pending Appoinment end



   //pendimg event

   if(isset($_GET['pEvent'])){
  
    // Database connection parameters
    require 'DatabaseConnection.php';

    if($conn->connect_error){
        die('Not Connected..');
    }
    else{  
        ?>
        <br>
        <h1>Pending Event</h1> <br> <?php

        $rawValue1 = "Not complete";

        $sql="select * from bookingspot";
        $result = $conn->query($sql);
    
        
        echo "<table border='1px' id='table' align = 'right'> <tr><th>Event Name</th><th>Spot Name</th><th>Date</th><th>Time</th></tr>";
        while ($row = $result->fetch_assoc()) {
                if ($row['states'] == $rawValue1 & $row['spotAdminApproving'] == "Approved" & $row['mainAdminApproving'] == "Approved") {
            echo "<tr><td>".$row['eventName']."</td><td>".$row['spotName']."</td><td>".$row['date']."</td><td>".$row['time']."</td></tr>";
            }
        }
        echo"</table>";
        $conn->close();
    }
}

//end pendimg event


    //event history
     if(isset($_GET['histo'])){
        
         // Database connection parameters
    require 'DatabaseConnection.php';

    if($conn->connect_error){
        die('Not Connected..');
    }
    else{  
        ?>
        <br>
        <h1>Event history</h1> <br> <?php

        $rawValue1 = "completed";

        $sql="select * from bookingspot";
        $result = $conn->query($sql);
    
        
        echo "<table border='1px' id='table' align = 'right'> <tr><th>Event Name</th><th>Spot Name</th><th>Date</th><th>Time</th></tr>";
        while ($row = $result->fetch_assoc()) {
                if ($row['states'] == $rawValue1 & $row['spotAdminApproving'] == "Approved" & $row['mainAdminApproving'] == "Approved") {
            echo "<tr><td>".$row['eventName']."</td><td>".$row['spotName']."</td><td>".$row['date']."</td><td>".$row['time']."</td></tr>";
            }
        }
        echo"</table>";
        $conn->close();
    }
}

                                                //event history end



                                            


                                             




?>
 
                                           <!-- Reg end -->

  <?php
// Spot managed

if(isset($_GET['sManege'])){
    
        ?>
        <br>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <h1>Spot Managed</h1>
        </div> <br>


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
                <h1><a href='spot_delete.php?id=<?php echo urlencode($row["spotName"]); ?>'><b>| DELETE SPOT |</b></a></h1>
                
                <hr style="border: 4px solid #FF5733;">

            
            </td>
        </tr>
    <?php endforeach; ?>
</table>
    



 
        
       
 <?php      
    }



?>




                                                  <!-- Spot managed end -->

                                                  

    </div>

</div>










    <script src="js/dashboard button.js"></script>
    
</body>

</html>