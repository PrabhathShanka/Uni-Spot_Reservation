<?php

    require 'DatabaseConnection.php';

session_start(); 



if (isset($_POST['uName']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $UseName = validate($_POST['uName']);

    $pass = validate($_POST['password']);

    if (empty($UseName)) {

        echo "User Name is required";

        exit();

    }else if(empty($pass)){

        echo"Password is required";

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE userName='$UseName' AND 	password1 ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['userName'] === $UseName && $row['password1'] === $pass) {

                $_SESSION['userName'] = $UseName;

               header("Location: index-AfterLogin.php");
                exit();
            }  
            else{

                    header("Location: Sign in3.html");
                    exit();
                }

            }else{
  
                    header("Location: Sign in3.html");
                    exit();
                 }
 
        }

    }

        else{
                 exit();
            }
?>