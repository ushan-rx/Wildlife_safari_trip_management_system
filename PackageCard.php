
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

  <?php require 'includes/header.php' ?>

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



    <div class="pricing-table">
        <div class="pricing-card">
            <h3 class="pricing-card-header">Package 01</h3>
            <div class="price"><sup>$</sup>19.99 </div>
            <ul class="unorder-safari-packages">

            <!-- read data from package -->
<?php
    $sql = "SELECT * FROM package";
    $result = mysqli_query($conn, $sql);
    $packages = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $rowIndex =0;
    
    if ($rowIndex < count($packages)) {
      $specificRow = $packages[$rowIndex];
      echo "<li>{$specificRow['p_name']}</li>";
      echo "<li>{$specificRow['price_per_person']}</li>";
      echo "<li>{$specificRow['description']}</li>";
      echo "<li>{$specificRow['no_of_days']}</li>";
    }
    
    else {
        echo "<p class='normal'>No feedbacks yet</p>";
      }
?>
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =0;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Package 02</h3>
            <div class="price"><sup>$</sup>29.99 </div>
            <ul class="unorder-safari-packages">

            <?php
                    $rowIndex =1;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      echo "<li>{$specificRow['p_name']}</li>";
                      echo "<li>{$specificRow['price_per_person']}</li>";
                      echo "<li>{$specificRow['description']}</li>";
                      echo "<li>{$specificRow['no_of_days']}</li>";
                    }
                    
                    else {
                        echo "<p class='normal'>No feedbacks yet</p>";
                      }
            ?>
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =2;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Package 03</h3>
            <div class="price"><sup>$</sup>199.99 </div>
            <ul class="unorder-safari-packages">
            <?php
                    $rowIndex =3;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      echo "<li>{$specificRow['p_name']}</li>";
                      echo "<li>{$specificRow['price_per_person']}</li>";
                      echo "<li>{$specificRow['description']}</li>";
                      echo "<li>{$specificRow['no_of_days']}</li>";
                    }
                    
                    else {
                        echo "<p class='normal'>No feedbacks yet</p>";
                      }
            ?>
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =1;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Package 04</h3>
            <div class="price"><sup>$</sup>299.99 </div>
            <ul class="unorder-safari-packages">
            <?php
                    $rowIndex =4;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      echo "<li>{$specificRow['p_name']}</li>";
                      echo "<li>{$specificRow['price_per_person']}</li>";
                      echo "<li>{$specificRow['description']}</li>";
                      echo "<li>{$specificRow['no_of_days']}</li>";
                    }
                    
                    else {
                        echo "<p class='normal'>No feedbacks yet</p>";
                      }
            ?>
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =2;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>

        <div class="pricing-card">
            <h3 class="pricing-card-header">Package 05</h3>
            <div class="price"><sup>$</sup>399.99 </div>
            <ul class="unorder-safari-packages">
            <?php
                    $rowIndex =5;
    
                    if ($rowIndex < count($packages)) {
                      $specificRow = $packages[$rowIndex];
                      echo "<li>{$specificRow['p_name']}</li>";
                      echo "<li>{$specificRow['price_per_person']}</li>";
                      echo "<li>{$specificRow['description']}</li>";
                      echo "<li>{$specificRow['no_of_days']}</li>";
                    }
                    
                    else {
                        echo "<p class='normal'>No feedbacks yet</p>";
                      }
            ?>
            </ul>
            <a href="#?pkg_id=<?php
                $rowIndex =4;
                if ($rowIndex < count($packages)) {
                  $specificRow = $packages[$rowIndex];
                  echo $specificRow['pkg_id'];}
                  ?>" class="order-btn">Order Now</a>
        </div>
    
    </div>
 



    <?php include 'includes/footer.php'?>


  <script src='script.js'></script>
</body>

</html>