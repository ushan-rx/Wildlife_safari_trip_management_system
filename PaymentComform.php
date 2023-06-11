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
    href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;1,8..144,400&display=swap"
    rel="stylesheet">

  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
  <link rel="stylesheet" type='text/css' media='screen' href='styles/styleComformCardBill.css'>
  <link rel="stylesheet" type='text/css' media='screen' href="styles/stylePaymentDetails.css">

  
</head>

<body>

  <?PHP include 'includes/header.php'; ?> 

  <?php include 'process_comformPaymentDetails.php'; ?>

   <section class="popup-bill" id="popup-bill">
    <div class="bill-box">
      <h2>Comform Your Reservation Details </h2>
      <div class="bill">
        <table class="details">           
          <tr>
            <td>Pacage</td>
            <td><?php echo $package_name?></td>
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
          <a href="process_comformPaymentDetails.php?com=comform"><button id="comform">Comform</button></a>
        </div>
      </div>

    </div>
  </section>
  

  <?PHP include 'includes/footer.php'; ?>

  <script src='scripts/styleComformCardBill.js'></script>
  <script src='scripts/scriptGen.js'></script>
  

</body>

</html>

