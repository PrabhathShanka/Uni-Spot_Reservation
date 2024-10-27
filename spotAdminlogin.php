

<?php

require 'DatabaseConnection.php';

session_start();


if (isset($_POST['uname']) && isset($_POST['pass'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['pass']);

    if (empty($uname)) {

        echo "User Name is required";

        exit();
    } else if (empty($pass)) {

        echo "Password is required";

        exit();
    } else {

        $sql = "SELECT * FROM spot WHERE spotName='$uname' AND password1 ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['spotName'] === $uname && $row['password1'] === $pass) {

                $_SESSION['SpName'] = $uname;
                header("Location: spot_admin_dash.php?appo=Appoinment");
                exit();
            } else {

                //    header("Location: adminlogin.html");

                echo
                "
            <script>
              alert('Invalid User Name or Password. please try again !!!!');
              document.location.href = 'spotAdminlogin.html';
            </script>
            ";
                exit();
            }
        } else {

            echo
            "
            <script>
              alert('Invalid User Name or Password. please try again !!!!');
              document.location.href = 'spotAdminlogin.html';
            </script>
            ";

            // header("Location: adminlogin.html");
            exit();
        }
    }
} else {
    exit();
}
?>