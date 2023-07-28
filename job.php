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
  <link rel='stylesheet' type='text/css' media='screen' href='styles/JStyle.css'>

</head>

<body>

  <?php
  require 'includes/header.php' ?>
  <?php require_once('classes/connection.php');

  if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    // Get the job ID from the URL
    $id = $_GET['uid'];

    $query = "SELECT * FROM  user WHERE uid = ?";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $fName = $row['f_name'];
      $lName = $row['l_name'];
      $tpNo = $row['tp_no'];
      $email = $row['email'];
      $pw = $row['pw'];

      // Close the result set
      $result->close();

      // Close the statement
      $stmt->close();
      // add auto generate id
  
      ?>
      <!-- your code here -->
      <section class="account1">

        <div class="container1">
          <div class="form-group1">
            <h1><u>Account Settings</u></h1><br>
            <form class="edit-form" method="POST" action="job.php">
              <input type="hidden" name="uid" value="<?php echo $id; ?>">


              <label for="firstName">First Name*</label>
              <input type="text" class="form-control1" name="f_name" id="firstName" value="<?php echo $fName; ?>" /><br>

              <label for="lastName">Last Name*</label>
              <input type="text" class="form-control1" name="l_name" id="lastName" value="<?php echo $lName; ?>" /><br>

              <label for="tp_no">Contact Number*</label>
              <input type="text" class="form-control1" name="tp_no" id="tp_no" value="<?php echo $tpNo; ?>" /><br>

              <label for="email">Email*</label>
              <input type="text" class="form-control1" name="email" id="email" value="<?php echo $email; ?>" /><br>

              <label for="password">passowd*</label>
              <input type="text" class="form-control1" name="pw" id="password" /><br>

              <div class="btn">
                <div class="btn1">
                  <button type="submit">Update</button>
                </div>
                <div class="btn2">
                  <button><a href="acc.php">Cancel</a></button>
                </div>
              </div>
            </form>
          </div>
      </section>

      <script>
        function goBack() {
          window.history.back();
        }

      </script>

      <?php

    } else {
      // Job listing not found
      echo "Job listing not found.";
    }
  } elseif ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (
      isset($_POST['f_name']) && isset($_POST['l_name']) &&
      isset($_POST['tp_no']) && isset($_POST['email']) && isset($_POST['uid']) && isset($_POST['pw'])
    ) {

      $fName = $_POST['f_name'];
      $lName = $_POST['l_name'];
      $tpNo = $_POST['tp_no'];
      $email = $_POST['email'];
      $pw = $_POST['pw'];
      $pw_hash = password_hash($pw, PASSWORD_DEFAULT);
      $uid = $_POST['uid'];
      $queryup = "UPDATE user SET f_name = '$fName', l_name='$lName' ,tp_no='$tpNo', email='$email', pw='$pw_hash' WHERE uid = '$uid'";

      if (Database::iud($queryup)) {
        echo "<script> alert('update successful');</script>";
        echo "<script> window.location.href = 'acc.php';</script>";
      } else {
        echo "<script> alert('update failed');</script>";
        echo "<script> window.location.href = 'acc.php';</script>";
      }



    } else {
      echo "<script> alert('input all data');</script>";
      echo "<script> window.location.href = 'acc.php';</script>";
    }

  } else {
    // Invalid request method
    echo "Invalid request.";
  }

  include 'includes/footer.php' ?>

</body>

</html>