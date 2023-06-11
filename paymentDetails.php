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
  <?PHP include 'Process_paymentDetails.php'; ?> 


  <section id="payment">
    <div class="payment">
    <div class="payment-box">
      <form method="post" action="Process_paymentDetails.php" id="payButton">
        <h2>Book Wildlife tour in Sri Lanka</h2>
        <div class="salutation">
          <label for="">Salutation</label>
          <select name="salutation" class="salutation">
            <option value="">Mr.</option>
            <option value="">Mis.</option>
            <option value="">Miss.</option>
            <option value="">Ms.</option>
            <option value="">Dr.</option>
          </select>
        </div>
        <div class="inputbox">
          <label for="">First Name</label>
          <input type="text" name="first_name">
        </div>
        <div class="inputbox">
          <label for="">Last Name</label>
          <input type="text" name="last_name">
        </div>
        <div class="inputbox">
          <label for="">Phone</label>
          <input type="tel" name="phone">
        </div>
        <div class="inputbox">
          <label for="">E-Mail</label>
          <input type="email" name="mail">
        </div>
        <div class="inputbox">
          <label for="">Country</label>
          <input type="text" name="country">
        </div>

        <h2>Select Payment Method</h2>
        
        <div class="payMethord-box">
          <div id="box1" class="box" onclick="selectBox(1)">
            <img class="visaImage" src="images/payment/visa.png" alt="Description of the image" width="50" height="50">
            <h4>Visa / Mastter Card</h4>
          </div>
          <div id="box2" class="box" onclick="selectBox(2)">
            <img class="visaImage" src="images/payment/AmericanExpress.png" alt="Description of the image" width="50" height="50">
            <h4>American Express Card</h4>
          </div>
        </div>

        <div class="inputbox">
          <input type="hidden" name="boxNumber" id="input_box">
        </div>
        
        <div class="paym">
          <div class="payBox">
            <div class="amount">
            <p class="USD">USD <?PHP echo $total_amount['total_price'] ?></p>
            </div>
            <div class="pay">
              <input type="submit" class="payButton"  name="submit" value="PAY">
              <!-- <p class="payButton" id="payButton">PAY</p> -->
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </section>

  <?PHP include 'includes/footer.php'; ?>

  <script src='scripts/ScriptPayment.js'></script>
  <script src='scripts/scriptGen.js'></script>
  

</body>

</html>

