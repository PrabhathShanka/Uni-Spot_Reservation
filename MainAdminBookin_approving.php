
<?php


if (isset($_GET['id'])) {
    

    $bookingID	 = $_GET['id'];


    echo "<p> $bookingID </p>";

// Database connection parameters
require 'DatabaseConnection.php';

    if (!$conn) {
        die("error:" . mysqli_connect_error());
    } else {
    
        $sql = "UPDATE `bookingspot` SET  `mainAdminApproving`='Approved' WHERE `bookingID`=$bookingID";
    
        // Debugging: Output the SQL query
        echo "Debug: SQL query: $sql<br>";
    
        if ($conn->query($sql)) {
    
            ?>
            <script type="text/javascript">
                var alertStyle = "padding: 10px; background-color: #4CAF50; color: white;";
                alert("Booking approval successful !!!");
                window.location.href = "admin_dash.php?appo=Appoinment";
            </script>
            <?php
            exit();
        } else {
            echo "Something went wrong: " . $conn->error;
        }
    
        $conn->close();
    }


    //header("Location: appoinment _completed1.php");
     exit(); 
}



?>