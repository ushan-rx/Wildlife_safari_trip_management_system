
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
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
  <!-- <link rel='stylesheet' type='text/css' media='screen' href='styles/style2.css'> -->
  <link rel='stylesheet' type='text/css' media='screen' href='styles/stylePackageCard.css'>

</head>

<body>
<?PHP include 'includes/header.php'; ?>

  <!-- your code here -->
  <!---->
     <div class="cards">
        <div class="side-card">
            <ul class="unorderli">
                <li class="pack">Best Deal</li>
                <li id="basic" class="side-card-price">&dollar; <!---->
                    49.99</li>
                    <li class="bottom-bar">Yala National Park</li>
                    <li class="bottom-bar"> Jetwing Yala</li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"> 3 night</li>
                    <li class="bottom-bar"> 09.09.2022</li>

                    
                    <li>
                    <form method="Get" method="send_best_deals.php">

                  <input style="display:none;" type="text" value="$49.99" name="price">
                  <input style="display:none;" type="text" value="Yala National Park" name="safari">
                  <input style="display:none;"  type="text" value="2 Persons" name="persons">
                  <input style="display:none;"  type="text" value="2 nights" name="nights">
                  <input style="display:none;"  type="text" value="09.09.2223" name="date">
                  <input style="display:none;"  type="text" value="Yala Hotel" name="accomadation">

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

                <li class="bottom-bar">Yala National Park</li>
                    <li class="bottom-bar"> Wild Trails Yala by Suri</li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"> 3 night</li>
                    <li class="bottom-bar"> 09.09.2022</li>
                
                <li>
                <form method="POST">
                
                <input style="display:none;" type="text" value="$49.99" name="price">
                  <input style="display:none;" type="text" value="Yala National Park" name="safari">
                  <input style="display:none;"  type="text" value="2 Persons" name="persons">
                  <input style="display:none;"  type="text" value="2 nights" name="nights">
                  <input style="display:none;"  type="text" value="09.09.2223" name="date">
                  <input style="display:none;"  type="text" value="Yala Hotel" name="accomadation">
                
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
          
            <li class="bottom-bar">Yala National Park</li>
                    <li class="bottom-bar"> Leopard Trails Yala</li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"> 3 night</li>
                    <li class="bottom-bar"> 09.09.2022</li>
            
            <li>  
                <form method="POST">
                  
                <input style="display:none;" type="text" value="$49.99" name="price">
                  <input style="display:none;" type="text" value="Yala National Park" name="safari">
                  <input style="display:none;"  type="text" value="2 Persons" name="persons">
                  <input style="display:none;"  type="text" value="2 nights" name="nights">
                  <input style="display:none;"  type="text" value="09.09.2223" name="date">
                  <input style="display:none;"  type="text" value="Yala Hotel" name="accomadation">
                
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

      
            <li><?php echo $p1_description ?></li>
            <li><?php echo $p1_no_of_days ?>night</li>
            

            </ul>
            <a href="Accomodation.php?pkg_id=<?php
                $rowIndex =0;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">PROCEED</a>
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
            <div class="price"><sup>$</sup><?php echo $p2_price_per_person ?></div>
            <ul class="unorder-safari-packages">

            
            <li><?php echo $p2_description ?></li>
            <li><?php echo $p2_no_of_days ?>night</li>
            


            </ul>
            <a href="Accomodation.php?pkg_id=<?php
                $rowIndex =1;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">PROCEED</a>
        </div>

        <?php
                    $rowIndex =2;
    
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
            
            
            <li><?php echo $p3_description ?></li>
            <li><?php echo $p3_no_of_days ?>night</li>
            

            </ul>
            <a href="Accomodation.php?pkg_id=<?php
                $rowIndex =2;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">PROCEED</a>
        </div>


        <?php
        $rowIndex =3;

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
          
           
            <li><?php echo $p4_description ?></li>
            <li><?php echo $p4_no_of_days ?>night</li>
            

            </ul>
            <a href="Accomodation.php?pkg_id=<?php
                $rowIndex =3;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">PROCEED</a>
        </div>

        <?php
        $rowIndex =4;

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
            
          
            <li><?php echo $p5_description  ?></li>
            <li><?php echo $p5_no_of_days ?> night</li>
            

            </ul>
            <a href="Accomodation.php?pkg_id=<?php
                $rowIndex =4;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">PROCEED</a>
        </div>
    
    </div>
 



    <?PHP include 'includes/footer.php'; ?>


  <script src='script.js'></script>
</body>

</html>