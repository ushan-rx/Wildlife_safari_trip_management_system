<?php

  //used to connect with database
  require 'config.php';

  //used to check if the submit button is clicked under post conditions
  if(isset($_POST['submit'])){


    //get data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $booking_id = $_POST['booking_id'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    //assign sql query
    $sql = "INSERT INTO feedback (Name, Email,reservation_id, Country, Massage) VALUES ('$name', '$email', '$booking_id', '$country', '$message')";

    //run sql query
    $result = mysqli_query($conn, $sql);


    //if sql query is successfull or not print message as a alert box in js
    if($result){

      echo "<script>alert('Thank you for your feedback!');</script>";

      //redirect to page
      header("Location: Testimonial.php");
            
      
    }
    else{

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
  <link rel='stylesheet' type='text/css' media='screen' href='styles/style2.css'>

  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleTestimonial.css'>

  


</head>

<body>

<!-- include header  -->
<?php require 'includes/header.php' ?>

<!--my part-->
<div class="test">Tell us,How was your<br> visit? </div>
  <!--<div class="test-background">
    <img src="images/bck.jpg" alt="Tell us background image" />
  </div>-->
  <div class="comment-button">
    <button id="write-review">Share Your Experience<img src="images/comment.png" class="comment-icon"></button>
  </div>

<!--POPup Form-->
<div id="popup" class="popup">
  
  <div  id="form-container" class="form-container">
    <form action="" method="POST">
      <div id="close-btn"  class="close-btn">&times </div>
      <h3>Give Your Feedback</h3>
      <!--<label for="">Name</label>-->
      <input type="text" placeholder="name" name="name" required>
      <!--<label for="">Email</label>-->
      <input type="text" placeholder="Email" name="email" required>
      <!--<label for="">Booking ID</label>-->
      <input type="text" name="booking_id" placeholder="Booking ID(optional)" >
      <input type="text" name="country" placeholder="Country" required>
      <input  placeholder="Your Message"  name = "message" required></input>
    <div  id="submit-btn"  class="submit-button">
      <!-- add a submit button  -->
      <input type="submit" name="submit" value="Submit" class="submit-btn">
    </div> 
      
    </form>
  </div>
  </div>

</div>   



  <div class="container" id="container">
    <div class="testimonials">  <!--Except Shehani akarsha feedback-->
      <div class="testimonials--big">
        <!--<div class="bg">
          <img src="./images/bg-pattern-quotation.svg" alt="background"> 
        </div>-->
        <div class="info">
          <!--<div class="img">
            <img src="./images/image-daniel.jpg" alt="daniel name" />
          </div>-->
          <div class="name">
            <h3>Jim Brown</h3>
            <p>Booking ID</p>
          </div>
        </div>
        <div class="view">
          <!--<h3 class="bold">
            I received a job offer mid-course, and the subjects I learned were current, if not more so,
            in the company I joined. I honestly feel I got every penny’s worth.
          </h3>-->
            
          <?php



              //get Message from feedback in decending order
              $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


              $result = mysqli_query($conn, $sql);

              //fetch all rows into an assocuative array

              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
              $rowIndex =0;

              if ($rowIndex < count($rows)) {
                $specificRow = $rows[$rowIndex];
                echo "<p class='normal'>{$specificRow['Massage']}</p>";
              }
                
                else {
                  echo "<p class='normal'>No feedbacks yet</p>";
                }







          ?>
<!-- 

          <p class="normal">
            “Since the first moment I contacted Master Safari, Sajidh took care of everything and in a few hours we recevied a complete and detailed itinerary so since the first contact I was impressed in the quality of the service.
            Everything was so easy with them and we kept communication until the arrivel day, when our driver-guide was waiting for us.
            We enjoyed very much everything, the activities proposed and hotels, the driver at the end was like a friend of us...Whoever is thinking of going to Sri Lanka there is no doubt that mastersafari can help you with anything and making your travels easy...
            Thank you very much for everything Sajidh! ”
          </p> -->

        </div>
      </div>
      <div class="testimonials--small">
        <div class="info">
          <!--<div class="img">
            <img src="./images/image-jonathan.jpg" alt="daniel name" />
          </div>-->
          <div class="name">
            <h3>Pathum Adithya</h3>
            <p>Verified Graduate</p>
          </div>
        </div>
        <div class="view">
          <!--<h3 class="bold">
            The team was very supportive and kept me motivated
          </h3> -->

          
          <?php



              //get Message from feedback in decending order
              $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


              $result = mysqli_query($conn, $sql);

              //fetch all rows into an assocuative array

              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
              $rowIndex =1;

              if ($rowIndex < count($rows)) {
                $specificRow = $rows[$rowIndex];
                echo "<p class='normal'>{$specificRow['Massage']}</p>";
              }
                
                else {
                  echo "<p class='normal'>No feedbacks yet</p>";
                }
          ?>
        </div>
      </div>
      <div class="testimonials--small white">
        <div class="info">
          <!--<div class="img">
            <img src="./images/image-jeanette.jpg" alt="jeanette name" />
          </div>-->
          <div class="name">
            <h3>
              Jenette Harmon
            </h3>
            <p>Verified Graduate</p>
          </div>
        </div>
        <div class="view">

          <?php



              //get Message from feedback in decending order
              $sql = "SELECT * FROM feedback ORDER BY fback_id DESC";


              $result = mysqli_query($conn, $sql);

              //fetch all rows into an assocuative array

              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
              $rowIndex =3;

              if ($rowIndex < count($rows)) {
                $specificRow = $rows[$rowIndex];
                echo "<p class='normal'>{$specificRow['Massage']}</p>";
              }
                
                else {
                  echo "<p class='normal'>No feedbacks yet</p>";
                }
          ?>
        </div>
      </div>
      <div class="testimonials--big" style="background-color:var(--dark-blackish-blue)">
        <div class="info">

          <div class="name">
            <h3>Nimeshi dissanayake</h3>
            <p>Verified Graduate</p>
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
              }
                
                else {
                  echo "<p class='normal'>No feedbacks yet</p>";
                }
          ?>

        </div>
      </div>
    </div>


    <div class="testimonial">
      <div class="info">

        <div class="name">
          <h3>Shehani Akarsha</h3>
          <p>Verified Graduate</p>
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
              }
                
                else {
                  echo "<p class='normal'>No feedbacks yet</p>";
                }
          ?>

      </div>
    </div>
  </div>


  



<!--end of my part-->

<!-- include footer -->
<?php include 'includes/footer.php'?>


  <script src='script.js'></script>
  <script src="/Testimonial.js"> </script>

  <script>
    
var button1=document.getElementById('write-review');
var popup1=document.getElementById('form-container');
var closesButton=document.getElementById('close-btn');
var submitButton=document.getElementById('submit-btn');
var container=document.getElementById('container');


popup1.classList.add('hide');


button1.addEventListener('click',function(){
    popup1.classList.remove('hide');


    container.classList.add('blur');
})

closesButton.addEventListener('click',function(){
    popup1.classList.add('hide');

    container.classList.remove('blur');
})
  </script>
</body>

</html>