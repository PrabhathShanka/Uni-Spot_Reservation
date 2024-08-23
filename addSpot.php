<?php


    require 'DatabaseConnection.php';

    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];


    if ($password1 == $password2) {

    $SName = $_POST['sName'];
    $Sdiscription = $_POST['description'];
    if($_FILES["image"]["error"] === 4){
        echo
        "<script> alert('Image Does Not Exist')</script>";
    }else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }


        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
      
            move_uploaded_file($tmpName, 'img2/' . $newImageName);
            $query = "INSERT INTO spot VALUES('$SName' , '$newImageName' , '$Sdiscription' , '$password1')";
            mysqli_query($conn, $query);
            echo
            "
            <script>
              alert('Registration is successful!!!!');
              document.location.href = 'spotAdminlogin.html';
            </script>
            ";
          }
        }

    }else {
        // echo "Passwords do not match.";
 
         ?>
                     <script type="text/javascript">
                  var alertStyle = "padding: 10px; background-color: #f44336; color: white;";
                 alert("Passwords do not match. !!! please try again");
                   window.location.href = "addSpot.html";
                   </script>
                     <?php
     }

      ?>


