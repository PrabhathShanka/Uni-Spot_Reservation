<?php


    // $fName = $_POST['fName'];
    // $UserName = $_POST['uName'];
    // $Tnumber = $_POST['TeNumber'];
    // $NICnumber = $_POST['NIC'];
    // $Regnumber = $_POST['GegNumber'];
    // $email = $_POST['email'];
    // $pass1 = $_POST['password1'];
    // $pass2 = $_POST['password2'];

    $fName = $_POST['fName'];
    $uName = $_POST['UserName'];
    $TeNumber = $_POST['Tnumber'];
    $NIC = $_POST['NICnumber'];
    $Regnumber = $_POST['Regnumber'];
    $email = $_POST['email'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];

    require 'DatabaseConnection.php';

    if ($password1 == $password2) {
        $sql = "INSERT INTO `users`(`fullName`,`userName`, `teleNumber`, `NICNumber`, `registerNumber`, `email`, `password`) VALUES ('$fName','$uName','$TeNumber','$NIC','$Regnumber','$email','$password1')";
        $ret = mysqli_query($conn, $sql);

        if ($ret) {
            echo "No of records inserted: $ret <br>";
           // echo "registration successfully";

            ?>
		            <script type="text/javascript">
                 var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
                alert("registration successfully !!!");
                  window.location.href = "Sign in.html";
                  </script>
				    <?php


          //  header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Disconnect
        mysqli_close($conn);
    } else {
       // echo "Passwords do not match.";

        ?>
		            <script type="text/javascript">
                 var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
                alert("Passwords do not match. !!! please try again");
                  window.location.href = "Register.html";
                  </script>
				    <?php
    }

?>