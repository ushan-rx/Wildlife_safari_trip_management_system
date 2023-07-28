
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
    
  <?php

    $bestDeals1 = 'PK000001';
    $bestDeals2 = 'PK000002';
    $bestDeals3 = 'PK000003';

    $pkgB_sql = "SELECT p_name, no_of_days, price_per_person FROM package WHERE pkg_id IN ('$bestDeals1', '$bestDeals2', '$bestDeals3')";
    $resultPkg = mysqli_query($conn, $pkgB_sql);

    $i = 0;
    $bestDealsPkg = array();

     while ($bestPkgDetail = $resultPkg->fetch_assoc())
    
    //while($bestPkgDetail = mysqli_fetch_all( $resultPkg, MYSQLI_ASSOC))
    { 
      $i++;
        $bestDealsPkg[$i]['name'] = $bestPkgDetail['p_name'];
        $bestDealsPkg[$i]['no_of_days'] = $bestPkgDetail['no_of_days'];
        $bestDealsPkg[$i]['price_per_person'] = $bestPkgDetail['price_per_person'] * 75/100;
        
    }   
 


    $accommodation1 = 'AI000001';
    $accommodation2 = 'AI000002';
    $accommodation3 = 'AI000003';

    $accoB_sql = "SELECT hotel_name FROM accommodation WHERE aid  IN ('$accommodation1', '$accommodation2', '$accommodation3')";
    $resultAcco = mysqli_query($conn, $accoB_sql);

    $j = 0;
    $bestPkgHotel = array();

    while ($bestPkgAcco = $resultAcco->fetch_assoc()) { 
      $j++;
      $bestPkgHotel[$j] = $bestPkgAcco['hotel_name'];  
    }  

   

    ?> 


     <div class="cards">
        <div class="side-card">
            <ul class="unorderli">
                <li class="pack">Best Deal</li>
                <?php $total_amount1 = $bestDealsPkg[1]['price_per_person']*2; ?>
                <li id="basic" class="side-card-price">&dollar; <!---->
                  <?php  echo $total_amount1; ?> </li>
                    <li class="bottom-bar"><?php echo $bestDealsPkg[1]['name'] ?></li>
                    <li class="bottom-bar"> <?php echo $bestPkgHotel[1]?></li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"><?php echo $bestDealsPkg[1]['no_of_days'] ?> days</li>
                    <li class="bottom-bar"> 09.09.2022</li>

                    
                    <li>
                  <form action="PaymentComform.php" method="POST" >

                  <input style="display:none;" type="text" value="<?php echo $bestDeals1 ?>" name="pkg_id">
                  <input style="display:none;"  type="text" value="<?php echo $accommodation1 ?>" name="accommodation">
                  <input style="display:none;"  type="text" value="2 person" name="no_Of_People">
                  <input style="display:none;"  type="text" value="09.09.2022" name="date">
                  <input style="display:none;"  type="text" value="1" name="no_Of_Rooms">
                  <input style="display:none;"  type="text" value="<?php echo $total_amount1 ?>" name="total_amount">

                  <button type="submit" name="submit_bestDels_button" class="side-purchase-btn">Book Now</button>
                </form>
                    </li>
              </ul>
            </div>
         <div class="middle-card">   
         <ul class="unorderli">
            <li class="middle-pack">Best Deal</li>
            <?php $total_amount2 = $bestDealsPkg[2]['price_per_person']*3; ?>
            <li id="basic" class="middle-card-price">&dollar;
            <?php  echo $total_amount2; ?> </li>
            

                <li class="bottom-bar"><?php echo $bestDealsPkg[2]['name'] ?></li>
                    <li class="bottom-bar"> <?php echo $bestPkgHotel[2] ?></li>
                    <li class="bottom-bar"> 3 person</li>
                    <li class="bottom-bar"> <?php echo $bestDealsPkg[2]['no_of_days'] ?> days</li>
                    <li class="bottom-bar"> 09.09.2022</li>
                
                <li>
                <form action="PaymentComform.php" method="POST" >
                
                <input style="display:none;" type="text" value="<?php echo $bestDeals2 ?>" name="pkg_id">
                <input style="display:none;"  type="text" value="<?php echo $accommodation2 ?>" name="accomodation">
                <input style="display:none;"  type="text" value="3 person" name="no_Of_People">
                <input style="display:none;"  type="text" value="09.09.2022" name="date">
                <input style="display:none;"  type="text" value="1" name="no_Of_Rooms">
                <input style="display:none;"  type="text" value="<?php echo $total_amount2 ?>" name="total_amount">
                
                <button type="submit" name="submit_bestDels_button" class="middle-purchase-btn">Book Now</button>
                </form>

                </li>   
        </ul>
     </div>
    <div class="side-card">
        <ul class="unorderli">
           <li class="pack">Best Deal</li>
           <?php $total_amount3 = $bestDealsPkg[3]['price_per_person']*2; ?>
       <li id="basic" class="side-card-price">&dollar;
       <?php  echo $total_amount3; ?> </li>
       
          
            <li class="bottom-bar"><?php echo $bestDealsPkg[3]['name'] ?></li>
                    <li class="bottom-bar"> <?php echo $bestPkgHotel[3] ?></li>
                    <li class="bottom-bar"> 2 person</li>
                    <li class="bottom-bar"> <?php echo $bestDealsPkg[3]['no_of_days']?> days</li>
                    <li class="bottom-bar"> 09.09.2022</li>
            
            <li>  
              <form action="PaymentComform.php" method="POST" >

                <input style="display:none;" type="text" value="<?php echo $bestDeals3 ?>" name="pkg_id">
                <input style="display:none;"  type="text" value="<?php echo $accommodation3 ?>" name="accommodation">
                <input style="display:none;"  type="text" value="2 person" name="no_Of_People">
                <input style="display:none;"  type="text" value="09.09.2022" name="date">
                <input style="display:none;"  type="text" value="1" name="no_Of_Rooms">
                <input style="display:none;"  type="text" value="<?php echo $total_amount3 ?>" name="total_amount">

                <button type="submit" name="submit_bestDels_button" class="side-purchase-btn">Book Now</button>
              </form>
            </li>   
        </ul>
    </div>
</div>




     <?php
        $sql = "SELECT * FROM package WHERE Status = 1";
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
            <li><?php echo $p1_no_of_days." "?>night</li>
            

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
            <li><?php echo $p2_no_of_days." "?>night</li>
            


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
            <li><?php echo $p3_no_of_days." "?>night</li>
            

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
            <li><?php echo $p4_no_of_days." "?>night</li>
            

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
            <li><?php echo $p5_no_of_days." "?> night</li>
            

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