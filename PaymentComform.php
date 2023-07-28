<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Comform reservation details</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;1,8..144,400&display=swap"
    rel="stylesheet">

  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
  <link rel="stylesheet" type='text/css' media='screen' href='styles/styleComformCardBill.css'>
  <link rel="stylesheet" type='text/css' media='screen' href="styles/stylePaymentDetails.css">

  
</head>

<body>

  <?PHP include 'includes/header.php'; ?> 

  


  <?php
  
  require 'classes/connection.php';

  $dbConnect = Database::getConnection();


    if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 

  if(!isset($_SESSION['user_ses'])){
    header('Location: signInUp.php');
    exit();
  }



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    if (isset($_POST['submit_bestDels_button']) || isset($_POST['submit_pkgDels_button'])) {
        
        $package_ID = $_POST['pkg_id'];
        $reserved_date = $_POST['date'];
        $no_Of_People = intval($_POST['no_Of_People']);
        $accommodation = $_POST['accommodation'];
        $no_Of_Rooms = intval($_POST['no_Of_Rooms']);
        $total_amount = intval($_POST['total_amount']);


        $reserved_date = date('Y-m-d', strtotime($reserved_date));

        // echo 'pacj ' . $package_name;
        // echo 'pakhdcj ' . $total_room_count;
       
        // header('Location: PaymentComform.php?name=' .urlencode($package_name));
       
        
    }else{
        header('Location: PackageCard.php');
        exit;
    }

        $status = 1;
        $reservation_date = date('Y-m-d H:i:s');

        //get the package name and no of days from the package table
        $pkg_sql = "SELECT p_name, no_of_days, price_per_person FROM package WHERE pkg_id = '$package_ID'";
        $resultPkg = Database::search($pkg_sql);
        $PkgDetails = $resultPkg->fetch_assoc();

        $package_name = $PkgDetails['p_name'];
        $no_of_night = $PkgDetails['no_of_days'];
        $package_price_per_person = $PkgDetails['price_per_person'];


        //get the accommodation price and hotel name from the package table
        $acc_sql = "SELECT price, hotel_name, total_room_count FROM accommodation WHERE aid  = '$accommodation'";
        $resultPkg = Database::search($acc_sql);
        $accResalt = $resultPkg->fetch_assoc();
        $acc_price = $accResalt['price'];
        $acc_name = $accResalt['hotel_name'];
        $total_room_count = $accResalt['total_room_count']; 

        if(isset($_POST['submit_bestDels_button'])){
          $total_Payment = $total_amount;
        }elseif(isset($_POST['submit_pkgDels_button'])){
          //calculate the Total Amount
          $total_Payment = ($acc_price * $no_Of_Rooms) + ($package_price_per_person * $no_Of_People);
        }
        
} else {
  header('Location: signInUp.php');
    exit();
}
  
  ?>


   <section class="popup-bill" id="popup-bill">
    <div class="bill-box">
      <h2>Comform Your Reservation Details </h2>
      <div class="bill">
        <table class="details">           
          <tr>
            <td>Pacage</td>
            <td><?php echo $package_name ?></td>
          </tr>
          <tr>
            <td>Date</td>
            <td><?php echo $reserved_date?></td>
          </tr>
          <tr>
            <td>No of night</td>
            <td><?php echo $no_of_night?></td>
          </tr>
          <tr>
            <td>No Of People</td>
            <td><?php echo $no_Of_People?></td>
          </tr>
          <tr>
            <td>Accommodation</td>
            <td><?php echo $acc_name?></td>
          </tr>
          <tr>
            <td>No Of Rooms</td>
            <td><?php echo $no_Of_Rooms?></td>
          </tr>
        </table>
        <table class="total-payment">
          <tr>
            <td>Total Payment</td>
            <td>$<?php echo $total_Payment?></td>
          </tr>
        </table>
      </div>

      <div class="button">
        <div class="cancle-button">
          <button id="cancle">Cancle</button>
        </div>

        <div class="comform-button">
          <form action="process_comformPaymentDetails.php?com=comform" method="POST">

            <input style="display:none;" type="text" value="<?php echo $package_ID ?>" name="pkg_id">
            <input style="display:none;"  type="text" value="<?php echo $accommodation ?>" name="accommodation">
            <input style="display:none;"  type="text" value="<?php echo $no_Of_People ?>" name="no_Of_People">
            <input style="display:none;"  type="text" value="<?php echo $reserved_date ?>" name="date">
            <input style="display:none;"  type="text" value="<?php echo $no_Of_Rooms ?>" name="no_Of_Rooms">
            <input style="display:none;"  type="text" value="<?php echo $total_Payment ?>" name="total_Payment">

            <button name="comform_details" id="comform">Comform</button>

          </form>    
          
        </div>
      </div>

    </div>
  </section>
  

  <?PHP include 'includes/footer.php'; ?>

  <script src='scripts/styleComformCardBill.js'></script>
  <script src='scripts/scriptGen.js'></script>
  

</body>

</html>

