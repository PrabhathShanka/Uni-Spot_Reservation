$sql = "SELECT * FROM users WHERE email='$telNum' AND password1 ='$pass' AND $row user_role = 'apartmentOwner'";
      
              $result = mysqli_query($conn, $sql);
      
              if (mysqli_num_rows($result) === 1) {
      
                  $row = mysqli_fetch_assoc($result);
      
                  if ($row['email'] === $telNum && $row['password1'] === $pass) {
      
                    
      
                     header("Location: index-AfterLoginApartmentOwner.php");
                      exit();
                  }} 