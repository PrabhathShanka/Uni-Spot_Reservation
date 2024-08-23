<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    require 'DatabaseConnection.php';
    if($conn->connect_error){
        die('Not Connected..');
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM admindetails WHERE adminID = $id";

    if ($conn->query($sql) === TRUE) {
     

      echo
            "
            <script>
              alert('Delete successful!!!!');
              document.location.href = 'admin_setting.php';
            </script>
            ";
      exit();


    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request";
}
?>
