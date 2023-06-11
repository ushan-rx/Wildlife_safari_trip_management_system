
<?php
     
     require 'config.php';



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
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='styles/style2.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='PackageCard.css'>

</head>

<body>
  <header>
    <div class="navbar">
      <a href="#" class="site-icon">
        <img src="images/deerlogo.png" alt="website logo">
        <img src="images/sitename.png" alt="website name">
      </a>
      <ul id="nav-links">
        <li><a href="" class="links">Home</a></li>
        <li><a href="" class="links">Packages</a></li>
        <li><a href="" class="links">Destinations</a></li>
        <li><a href="" class="links">Testimonials</a></li>
        <li><a href="" class="links">Contact Us</a></li>
      </ul>
      <div class="nav-buttons">
        <button class="button-default button-nav sign-in">Sign In</button>
        <button class="button-default button-nav">Sign Up</button>
      </div>
      <img src="images/menu_black.png" alt="menu icon" class="menu-icon">
    </div>
  </header>

  <!-- your code here -->
  <!---->
     <div class="cards">
        <div class="side-card">
            <ul class="unorderli">
                <li class="pack">Best Deal</li>
                <li id="basic" class="side-card-price">&dollar; <!---->
                    49.99</li>
                    <li class="bottom-bar">2 nights</li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"> include safari</li>
                    <li>
                    <form method="Get" method="send_best_deals.php">

                  <input style="display:none;" type="text" value="$49.99" name="price">
                  <input style="display:none;"  type="text" value="2 nights" name="nights">
                  <input style="display:none;"  type="text" value="2 Persons" name="persons">
                  <input style="display:none;"  type="text" value="include safari" name="accomadation">

                  <button type="submit" class="side-purchase-btn">Book Now</button>
                </form>
                    </li>
              </ul>
            </div>
         <div class="middle-card">   
         <ul class="unorderli">
            <li class="middle-pack">Best Deal</li>
            <li id="basic" class="middle-card-price">&dollar;
                149.99</li>
                <li class="bottom-bar"> 5 nights </li>
                <li class="bottom-bar"> 4 person </li>
                <li class="bottom-bar"> include meal </li>
                <li>
                <form method="POST">
                
                  <input style="display:none;"  type="text" value="$149.99" name="price">
                  <input style="display:none;"  type="text" value="5 nights" name="nights">
                  <input style="display:none;" type="text" value="4 Persons" name="persons">
                  <input style="display:none;" type="text" value="Include meal" name="accomadation">
                
                <button style="display:block" type="submit" class="side-purchase-btn">Book Now</button>
                </form>

                </li>   
        </ul>
     </div>
    <div class="side-card">
        <ul class="unorderli">
           <li class="pack">Best Deal</li>
       <li id="basic" class="side-card-price">&dollar;
            99.99</li>
            <li class="bottom-bar"> 5 nights </li>
            <li class="bottom-bar"> 2 person </li>
            <li class="bottom-bar"> include meal </li>
            
            <li>  
                <form method="POST">
                  <input style="display:none;"  type="text" value="$99" name="price">
                  <input style="display:none;" type="text" value="2 nights" name="nights">
                  <input style="display:none;" type="text" value="2 Persons" name="persons">
                  <input style="display:none;" type="text" value="Include Safari" name="accomadation">
                
                <button style="display:block" type="submit" class="side-purchase-btn">Book Now</button>
                </form>
            </li>   
        </ul>
    </div>
</div>

     <?php
        $sql = "SELECT * FROM package";
        $result = mysqli_query($conn, $sql);
        $packages = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $rowIndex =0;
        
        if ($rowIndex < count($packages)) {
          $specificRow = $packages[$rowIndex];
          $p1_name = $specificRow['p_name'];
          $p1_price_per_person = $specificRow['price_per_person'];
          $p1_description = $specificRow['description'];
          $p1_no_of_days = $specificRow['no_of_days'];
        }
        
        else {
            echo "<p class='normal'>No feedbacks yet</p>";
          }
    ?> 

    <div class="pricing-table">
        <div class="pricing-card">
            <h3 class="pricing-card-header"><?php echo $p1_name ?></h3>
            <div class="price"><sup>$</sup><?php echo $p1_price_per_person ?> </div>
            <ul class="unorder-safari-packages">

            <!-- read data from package -->

      <!-- <li><?php echo $p1_name ?></li>
      <li>$<?php echo $p1_price_per_person ?></li> -->
      <li><?php echo $p1_description ?></li>
      <li><?php echo $p1_no_of_days ?></li>
      
    
    
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =0;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <?php
                    $rowIndex =1;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      $p2_name = $specificRow['p_name'];
                      $p2_price_per_person = $specificRow['price_per_person'];
                      $p2_description = $specificRow['description'];
                      $p2_no_of_days = $specificRow['no_of_days'];
                    }
                    
                    else {
                        // echo "<p class='normal'>No feedbacks yet</p>";
                      }
            ?>

        <div class="pricing-card">
            <h3 class="pricing-card-header"><?php echo $p2_name ?></h3>
            <div class="price"><sup>$</sup><?php echo $$p2_price_per_person ?></div>
            <ul class="unorder-safari-packages">

            <li><?php echo $p2_name ?></li>
            <li>$<?php echo $p2_price_per_person ?></li>
            <li><?php echo $p2_description ?></li>
            <li><?php echo $p2_no_of_days ?></li>


            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =2;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <?php
                    $rowIndex =3;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      $p3_name = $specificRow['p_name'];
                      $p3_price_per_person = $specificRow['price_per_person'];
                      $p3_description = $specificRow['description'];
                      $p3_no_of_days = $specificRow['no_of_days'];
                    }
                    
                    else {
                        // echo "<p class='normal'>No feedbacks yet</p>";
                      }
        ?>

        <div class="pricing-card">
            <h3 class="pricing-card-header"><?php echo $p3_name ?></h3>
            <div class="price"><sup>$</sup><?php echo $p3_price_per_person ?> </div>
            <ul class="unorder-safari-packages">
            
            <li><?php echo $p3_name ?></li>
            <li>$<?php echo $p3_price_per_person ?></li>
            <li><?php echo $p3_description ?></li>
            <li><?php echo $p3_no_of_days ?></li>

            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =1;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>


        <?php
        $rowIndex =4;

        if ($rowIndex < count($packages)) {
          $specificRow = $packages[$rowIndex];
          $p4_name = $specificRow['p_name'];
          $p4_price_per_person = $specificRow['price_per_person'];
          $p4_description = $specificRow['description'];
          $p4_no_of_days = $specificRow['no_of_days'];
        }
        
        else {
            // echo "<p class='normal'>No feedbacks yet</p>";
          }
?>


        <div class="pricing-card">
            <h3 class="pricing-card-header"><?php echo $p4_name ?></h3>
            <div class="price"><sup>$</sup><?php echo $p4_price_per_person ?></div>
            <ul class="unorder-safari-packages">
          
            <li><?php echo $p4_name ?></li>
            <li>$<?php echo $p4_price_per_person ?></li>
            <li><?php echo $p4_description ?></li>
            <li><?php echo $p4_no_of_days ?></li>

            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =2;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <?php
        $rowIndex =5;

        if ($rowIndex < count($packages)) {
          $specificRow = $packages[$rowIndex];
          $p5_name = $specificRow['p_name'];
          $p5_price_per_person = $specificRow['price_per_person'];
          $p5_description = $specificRow['description'];
          $p5_no_of_days = $specificRow['no_of_days'];
        }
        
        
        else {
            // echo "<p class='normal'>No feedbacks yet</p>";
          }
?>



        <div class="pricing-card">
            <h3 class="pricing-card-header"><?php echo $p5_name ?></h3>
            <div class="price"><sup>$</sup><?php echo $p5_price_per_person ?></div>
            <ul class="unorder-safari-packages">
            
            <li><?php echo $p5_name ?></li>
            <li>$<?php echo $p5_price_per_person ?></li>
            <li><?php echo $p5_description ?></li>
            <li><?php echo $p5_no_of_days ?></li>

            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =4;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>
    
    </div>
 



  <footer>

    <ul class="footer-list">
      <li><a href="" class="footer-links">About Us</a></li>
      <li><a href="" class="footer-links">User Guide</a></li>
      <li><a href="" class="footer-links">Terms and conditions</a></li>
      <li><a href="" class="footer-links">Contact Us</a></li>
    </ul>


    <ul class="footer-list">
      <li><a href=""><img src="images/facebook.png" alt="facebook" class="footer-icon"></a></li>
      <li><a href=""><img src="images/twitter.png" alt="twitter" class="footer-icon"></a></li>
      <li><a href=""><img src="images/pinterest.png" alt="pinterest" class="footer-icon"></a></li>
      <li><a href=""><img src="images/insta.png" alt="instagram" class="footer-icon"></a></li>
    </ul>

    <h6>Copyrights 2023-Present. All Rights Reserved.</h6>

  </footer>


  <script src='script.js'></script>
</body>

</html>