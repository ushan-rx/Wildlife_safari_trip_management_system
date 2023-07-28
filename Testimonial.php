<?php

//used to connect with database
require 'config.php';

require_once 'classes/connection.php';
require_once 'classes/generateId.php';

//used to check if the submit button is clicked under post conditions
if (isset($_POST['submit'])) {


  //get data from form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $booking_id = $_POST['booking_id'];
  $country = $_POST['country'];
  $message = $_POST['message'];

   //generate the Feedback ID
   $getFD_sql = "SELECT MAX(fback_id) AS 'lastone' FROM feedback";
   $resultFD = Database::search($getFD_sql);
   $lastFDid = $resultFD->fetch_assoc();
   $feedback_id = GenerateId::generate($lastFDid['lastone'],"FD");

  if(!isset($_SESSION)){
    SESSION_START();
  }

  $uid = $_SESSION['user_ses'];

  //assign sql query
  $sql = "INSERT INTO feedback (fback_id, Name, Email, reservation_id, uid, Country, Massage) VALUES ('$feedback_id' , '$name', '$email', '$booking_id', '$uid', '$country', '$message')";

  //run sql query
  $result = mysqli_query($conn, $sql);


  //if sql query is successfull or not print message as a alert box in js
  if (($result)) {

    echo "<script>alert('Thank you for your feedback!');</script>";

    //redirect to page
    header("Location: Testimonial.php");


  } else {

    echo "<script>alert('Error!');</script>";

  }

}


?>

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
  <!-- <link rel='stylesheet' type='text/css' media='screen' href='styles/style2.css'> -->

  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleTestimonial.css'>

  <?PHP include 'includes/header.php'; ?>

  <!--my part-->
  <div class="test">Tell us,How was your<br> visit? </div>

  <div class="comment-button">
    <?php
    
    if(isset($_SESSION['user_ses'])){

    echo '<button id="write-review">Share Your Experiences</button>';
  }
  ?>
  </div>

  <!--POPup Form-->
  <div id="popup" class="popup">

    <div id="form-container" class="form-container">
      <form action="" method="POST">
        <div id="close-btn" class="close-btn">&times </div>
        <h3>Give Your Feedback</h3>

        <input type="text" placeholder="name" name="name" required>

        <input type="email" placeholder="Email" name="email" required>

        <input type="text" name="booking_id" placeholder="Booking ID(optional)">
        <input type="text" name="country" placeholder="Country" required>
        <input placeholder="Your Message" name="message" required></input>

        <div id="submit-btn" class="submit-button">
          <input type="submit" name="submit" value="Submit" class="submit-btn">
        </div>

      </form>
    </div>
  </div>

  </div>



  <div class="container" id="container">
    <div class="testimonials">
      <div class="testimonials--big">

        <div class="info">

          <div class="name">
            <?php



            //get Message from feedback in decending order
            $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


            $result = mysqli_query($conn, $sql);

            //fetch all rows into an assocuative array
            
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $rowIndex = 0;
            $specificRow = $rows[$rowIndex];
            echo "<h3>{$specificRow['Name']}</h3>";
            echo "<p>{$specificRow['Country']}</p>";
            ?>

          </div>
        </div>
        <div class="view">

          <?php



          //get Message from feedback in decending order
          $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


          $result = mysqli_query($conn, $sql);

          //fetch all rows into an assocuative array
          
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

          $rowIndex = 0;

          if ($rowIndex < count($rows)) {
            $specificRow = $rows[$rowIndex];
            echo "<p class='normal'>{$specificRow['Massage']}</p>";
          } else {
            echo "<p class='normal'>No feedbacks yet</p>";
          }







          ?>


        </div>
      </div>
      <div class="testimonials--small">
        <div class="info">

          <div class="name">
            <?php



            //get Message from feedback in decending order
            $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


            $result = mysqli_query($conn, $sql);

            //fetch all rows into an assocuative array
            
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $rowIndex = 1;
            $specificRow = $rows[$rowIndex];
            echo "<h3>{$specificRow['Name']}</h3>";
            echo "<p>{$specificRow['Country']}</p>";
            ?>
          </div>
        </div>
        <div class="view">


          <?php



          //get Message from feedback in decending order
          $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


          $result = mysqli_query($conn, $sql);

          //fetch all rows into an assocuative array
          
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

          $rowIndex = 1;

          if ($rowIndex < count($rows)) {
            $specificRow = $rows[$rowIndex];
            echo "<p class='normal'>{$specificRow['Massage']}</p>";
          } else {
            echo "<p class='normal'>No feedbacks yet</p>";
          }
          ?>
        </div>
      </div>
      <div class="testimonials--small white">
        <div class="info">

          <div class="name">
            <?php



            //get Message from feedback in decending order
            $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


            $result = mysqli_query($conn, $sql);

            //fetch all rows into an assocuative array
            
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $rowIndex = 2;
            $specificRow = $rows[$rowIndex];
            echo "<h3>{$specificRow['Name']}</h3>";
            echo "<p>{$specificRow['Country']}</p>";
            ?>
          </div>
        </div>
        <div class="view">

          <?php



          //get Message from feedback in decending order
          $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


          $result = mysqli_query($conn, $sql);

          //fetch all rows into an assocuative array
          
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

          $rowIndex = 3;

          if ($rowIndex < count($rows)) {
            $specificRow = $rows[$rowIndex];
            echo "<p class='normal'>{$specificRow['Massage']}</p>";
          } else {
            echo "<p class='normal'>No feedbacks yet</p>";
          }
          ?>
        </div>
      </div>
      <div class="testimonials--big" style="background-color:var(--dark-blackish-blue)">
        <div class="info">

          <div class="name">
            <?php



            //get Message from feedback in decending order
            $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


            $result = mysqli_query($conn, $sql);

            //fetch all rows into an assocuative array
            
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $rowIndex = 4;
            $specificRow = $rows[$rowIndex];
            echo "<h3>{$specificRow['Name']}</h3>";
            echo "<p>{$specificRow['Country']}</p>";
            ?>
          </div>
        </div>
        <div class="view">

          <?php

          //get Message from feedback in decending order
          $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


          $result = mysqli_query($conn, $sql);

          //fetch all rows into an assocuative array
          
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

          $rowIndex = 4;

          if ($rowIndex < count($rows)) {
            $specificRow = $rows[$rowIndex];
            echo "<p class='normal'>{$specificRow['Massage']}</p>";
          } else {
            echo "<p class='normal'>No feedbacks yet</p>";
          }
          ?>

        </div>
      </div>
    </div>


    <div class="testimonial">
      <div class="info">

        <div class="name">
          <?php



          //get Message from feedback in decending order
          $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


          $result = mysqli_query($conn, $sql);

          //fetch all rows into an assocuative array
          
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

          $rowIndex = 5;
          $specificRow = $rows[$rowIndex];
          echo "<h3>{$specificRow['Name']}</h3>";
          echo "<p>{$specificRow['Country']}</p>";
          ?>
        </div>
      </div>
      <div class="view">

        <?php

        //get Message from feedback in decending order
        $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


        $result = mysqli_query($conn, $sql);

        //fetch all rows into an assocuative array
        
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $rowIndex = 5;

        if ($rowIndex < count($rows)) {
          $specificRow = $rows[$rowIndex];
          echo "<p class='normal'>{$specificRow['Massage']}</p>";
        } else {
          echo "<p class='normal'>No feedbacks yet</p>";
        }
        ?>

      </div>
    </div>
  </div>


  <?PHP include 'includes/footer.php'; ?>


  <script src="scripts/scriptTestimonial.js"> </script>
  <script src='scripts/scriptGen.js'></script>
  </body>

</html>