<?php
require 'config.php';
session_start();
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM profile_information WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Glorious - Getting Started</title>
  <link rel="stylesheet" href="./css/home.css">
  <link rel="icon" type="image/x-icon" href="../src/favicon.PNG">

</head>

<body>
  <div class="window" style="background:#FFFFFF">

    <div class="box header">
      <?php
    
        if ($row['profile_image'] == NULL || $row['profile_image'] == "") {
      ?>
          <img src="./src/me.png" alt="">
        <?php } else { ?>
          <img style="" src="../test/uploads/<?=$row['profile_image'] ?>" alt="">
      <?php }
       ?>
     
      <h6>Good Day</h6>

      <h1><?php echo $row["name"]; ?></h1>
      <h4><?php echo $row["email"]; ?> </h4>
    </div>

    <div class="box footer" style="background-color: white;">
      <!-- <ul>
                <li><a href="#"><span class="fa-solid fa-location-dot"></span> <br> <?php echo $_POST["address"]; ?></a></li>
                <li><a href="#"><span class="fa-solid fa-envelope"></span><br><?php echo $_POST["email"]; ?></a></li>
                <li><a href="#"><span class="fa-solid fa-lock"></span> <br><?php echo $_POST["password"]; ?></a></li>
            </ul> -->
      <a href="logout.php"><button type="submit" class="button button-block">Logout</button></a>
      <a href="../index.php"><button type="submit" class="button button-block">Continue</button></a>

    </div>

  </div>

</body>

</html>