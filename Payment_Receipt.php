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

  <?php
if (!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION['reservation_id'])){

    $rid = $_SESSION['reservation_id'];

  }else{
    header('Location: signInUp.php');
    exit();
  }

?>
  <section id="card">
    <div class="card">
      <div class="card-details">
        <form class="card-form" id="card-payButton">
          <h3>Payment Gateway</h3> 
          <div class="card-holder">
            <label for="cardHolder">Card Holder:</label>
            <input type="text" id="cardHolder" placeholder="Card Holder" required>
          </div>

          <div class="cardnumber">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" placeholder="Card Number" maxlength="19" onkeypress="cardspace()" required>
          </div>

          <div class="card-oneline">

            <div class="expire-date">
              <label for="expirationDate">Expiration Date:</label>
              <input type="text" id="expirationDate" placeholder="MM/YY" maxlength="5" onkeypress="addSlashes()" required>
            </div>

            <div class="cvv">
              <label for="cvv">CVV:</label>
              <input type="text" id="cvv" placeholder="CVV" maxlength="3" required>
            </div>

          </div>
          
          <div class="card-button">
            <input type="submit" value="PAY">
          </div>
        </form>
      </div>
  </div>
  </section>


<?php
  include 'process_BillDetails.php';   /*DB - recipt details*/
?>

  <section id="receipt" class="receipt">

    <div id="pdf" >
      <div class="payment-receipt">
        <div class="receipt-box">
        
            <div class="payment-succesfull"> 
              <img src="images/payment/Paymentsuccessful.png" alt="" width="90px" height="70px">

              <p class="p1">Your payment was succesfull</p>
              <p class="p2">Thank you for the payment.</p>
            </div>

            <div class="logo-receit">
                <img src="images/payment/deerlogo.png" alt="website logo" width="40px" height="40px">
                <img src="images/payment/sitename.png" alt="website name" width="130px" height="20px">
            </div>

            <div class="receipt-details">
              <div class="payment-information">
                <table>
                  <tr>
                    <th colspan="3">Payment Information</th>
                  </tr>

                  <tr>
                    <td class="first-column">Payment ID</td>  
                    <td>:</td>
                    <td><?php echo $payId; ?></td>
                  </tr>

                  <tr>
                    <td>Payment Date</td>
                    <td>:</td>
                    <td><?php echo $paymentDate; ?></td>
                  </tr>

                  <tr>
                    <td>Payment Method</td>
                      <td>:</td>
                      <td><?php echo $payMethod; ?></td>
                    </tr>
                </table>
              </div>

              <div class="receiptPackage-information">
                <table>
                  <tr>
                    <th class="Package-information-topic"  colspan="3">Package Information</th>
                  </tr>

                  <tr>
                    <th>Resaervation ID</th>
                    <th>Package</th>
                    <th>Date</th>
                    <th>No of Date</th>
                  </tr>

                  <tr>
                    <td><?php echo $reservationId; ?></td>
                    <td><?php echo $packageName; ?></td>
                    <td><?php echo $reservedDate; ?></td>
                    <td><?php echo $no_of_days; ?></td>
                  </tr>

                  <tr class="receipt-amount">
                    <th class="receipt-amount-1" colspan="2">Amount : </th>
                    <th>$<?php echo $totalAmount; ?></th>
                  </tr>
                          
                </table>         
              </div>
            </div>
            
        </div>
      </div>
    </div>

    <div class="receipt_btn">
      <div class="dlt_btn">
        <button onclick="convertToPDF()">Download receipt</button>
      </div>

      <div class="go_homeBtn">
        <button ><a href="index.php">Go Home page</a></button>
      </div>
      
    </div>
    
  </section>  


  <?PHP include 'includes/footer.php'; ?>

  <script src='scripts/styleComformCardBill.js'></script>
  <script src='scripts/scriptGen.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js'></script>
 

  

</body>

</html>

