
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
  
  <link rel='stylesheet' type='text/css' media='screen' href='styles\styleAbout.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='styles\styleGen.css'>


</head>
<body>
<?php require 'includes/header.php' ?>


<section class="hero">
  <div class="inner-section">
    <div class="skills">
      <button type="button"><a href="AboutUs.php">About us</a></button>
      <button type="button"><a href="UserGuide.php">User Guide</a></button>
      <button type="button"><a href="terms.php">Terms & Conditions</a></button>
    </div>
  </div>

    <div class="heding">
      <h1></br>About Us</h1>
    </div>
    <div class="container">
      <div class="hero-content">
        <h2>Welcome To Our Website</h2>
        <p>The founder of the company, Nalin Perea, is himself a passionate die-hard lover of wildlife and photography. 
          He has travelled extensively across the country and overseas to pursue his passion. 
          He has been organising wildlife tours in Sri Lanka for the last two decades and has showcased the country with all its richness and grand diversity to our clients. 
          From planning to execution, Nalin takes a personal interest in the designing of wildlife tours. 
          Moreover, most of the featured tours have been inspired by his personal travel experiences.</br></br>

          We take pride in taking you to the right place at the right time. 
          It is our priority to maximise your wildlife encounters by ensuring all logistics are taken care of efficiently,
          so all you have to do is, enjoy the tour. This is at the core of our efforts, at all levels of the business. 
          Our entire team, has lived, worked and travelled across the country.
          Collectively, we have the experience, comprehensive knowledge and enthusiasm, to plan and create the perfect safari, just for you.</p>
      </div>
      <div class="hero-image">
        <div class="images">
          <input type="radio" name="slide" id="img1" checked>
          <input type="radio" name="slide" id="img3" >

          <img src="images\5.png" class="m1" alt="img1">
          <img src="images\4.png" class="m3" alt="img3"> 
        </div>
        <div class="dots">
          <label for="img1"></label>
          <label for="img3"></label>
        </div>
    </div>

  </section>
  <?php include 'includes/footer.php' ?>
</body>
</html>