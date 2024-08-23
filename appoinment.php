<?php
// Start session and check if the user is logged in
session_start();

if (isset($_SESSION['userName'])) {
    $uname = $_SESSION['userName'];
    echo $uname;
} else {
    header("Location: Sign in3.html");
    exit();
}

if (isset($_SESSION['spot_nsme'])) {
    $Spotname = $_SESSION['spot_nsme'];
    echo $Spotname;
} else {
    header("Location: Sign in3.html");
    exit();
}

//---------------------------------------------------------------------------------

$eventName = $_POST['eventName'];
$description = $_POST['Description'];
$date = $_POST['date'];
$time = $_POST['timeslot'];

// Include the database connection file
require 'DatabaseConnection.php';

// Ensure connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to insert data into bookingspot table
$sql = "INSERT INTO bookingspot (eventName, DescriptionOfEvents, date, time, spotAdminApproving, mainAdminApproving, useName, spotName, states) 
        VALUES ('$eventName', '$description', '$date', '$time', 'pending', 'pending', '$uname', '$Spotname', 'Not complete')";

// SQL to count the number of bookings for the given date and time
$sqlc = "SELECT COUNT(time) AS apcount FROM bookingspot WHERE date='$date' AND time='$time'";
$data = $conn->query($sqlc);

if ($data) {
    $noa = mysqli_fetch_array($data);

    if ($noa['apcount'] < 5) {
        if ($conn->query($sql)) {


            echo
            "
            <script>
              alert('Booking successful !!!!');
              document.location.href = 'index-AfterLogin.php';
            </script>
            ";

            exit();
        } else {
            echo "Something went wrong: " . $conn->error;
        }
    } else {
        echo "Time Slot is Full. Please choose another time.";
    }
} else {
    echo "Error checking bookings: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
