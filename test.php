<?php
require 'DatabaseConnection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <!-- <td>sport name</td>
        <td>Description</td> -->
        <!-- <td>Image</td> -->
      </tr>
      <?php
      //$i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM spot")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <!-- <td><?php echo $row["spotName"]; ?></td>
        <td><?php echo $row["description"]; ?></td> -->
        <!-- <td> <?php echo $row["spotName"]; ?><br> <img src="img2/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"><br> <?php echo $row["description"]; ?></td>
      
     -->
    
     <td style="text-align: center; vertical-align: middle;">
    <h1><?php echo $row["spotName"]; ?></h1><br>
    <img src="img2/<?php echo $row["image"]; ?>" width="600" height="400" title="<?php echo $row['image']; ?>"><br>
    <?php echo $row["description"]; ?><br>
    <h1><a href='Make_an_Appoinment.php?id=" . $row["spotName"] . "'><b>| BOOK NOW |</b></h1>
</td>

    </tr>

      
      <?php endforeach; ?>
    </table>
    <br>
    <a href="../uploadimagefile">Upload Image File</a>
  </body>
</html>