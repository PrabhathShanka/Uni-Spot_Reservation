<?php
require 'DatabaseConnection.php';

// Check if a search query is set
$search = isset($_GET['search']) ? $_GET['search'] : '';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Data</title>
</head>
<body>

<!-- Search Form -->
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search spot by name" value="<?php echo htmlspecialchars($search); ?>">
    <input type="submit" value="Search">
</form>

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
                <h1><a href='Make_an_Appoinment.php?id=<?php echo urlencode($row["spotName"]); ?>'><b>| BOOK NOW |</b></a></h1>
                
                <hr>
            
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="../uploadimagefile">Upload Image File</a>
</body>
</html>
