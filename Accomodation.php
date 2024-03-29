<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MasterSafari</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">

  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleAccomodation.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

  <?php
  require_once 'classes/connection.php';
  require "includes/header.php";

  if (!empty($_SESSION['user_ses'])) {  //handle registered user
  ?>

  <main>
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
      if (isset($_GET['pkg_id'])) {
        $pkg_id = $_GET['pkg_id'];

        $queryGetDate = "SELECT start_date as 'start_date' FROM package  WHERE pkg_id = '$pkg_id'"; //get start day from database
        $resultset = Database::search($queryGetDate);
        if ($resultset) {
          $row = $resultset->fetch_assoc();
          $getDate = $row['start_date'];
        }
      } else {
        header("Location: PackageCard.php");
        exit();
      }

    ?>
      <form action="Accomodation.php" method="post">
        <div class="options-wrapper">
          <div class="container">
            <div class="component-box">
              <h5>Price/Night</h5>
              <input type="range" min="0" max="100" value="1" class="slider" id="Range" name="price">
              <p1>Value: <span id="demo"></span></p1>
            </div>

            <input type="hidden" value="<?php echo $pkg_id; ?>" name="pkg_id">

            <div class="component-box">
              <h5>Check in</h5>
              <input type="date" step="7" value="<?php echo $getDate; ?>" name="date">
            </div>
            <div class="component-box">
              <h5>No of Guests</h5>
              <div class="guest-wrapper">
                <div class="dec button">-</div>
                <input type="number" name="guests" id="1" value="0" class="input-field">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="component-box">
              <h5>No of Rooms</h5>
              <div class="guest-wrapper">
                <div class="dec button">-</div>
                <input type="number" name="rooms" id="2" value="0" class="input-field">
                <div class="inc button">+</div>
              </div>
            </div>

            <div class="component-box">

              <input type="submit" name="submit" value="Search">
            </div>
          </div>
        </div>
      </form>

      <div class="hotels-wrapper">
        <div class="slider-container">

        </div>
      </div>

    <?php
      }
      if($_SERVER["REQUEST_METHOD"] === "POST"){
      require 'process_Accomodation.php';

      }
    ?>


  </main>

  <?php include "includes/footer.php" ?>

  <script src='scripts/scriptGen.js'></script>
  <script src='scripts/scriptAccomodation.js'></script>

  <?php
   } else {
          header("Location:signInUp.php");
        }
  ?>

</body>

</html>