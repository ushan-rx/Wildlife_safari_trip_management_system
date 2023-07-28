
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
  <link rel='stylesheet' type='text/css' media='screen' href='styles/AccStyle.css'>


</head>

<body>
  <?php require_once 'classes/connection.php';
  require 'includes/header.php';

  // check if a registered user
  if (isset($_SESSION['user_ses'])) {
    $uid = $_SESSION['user_ses'];
  } else {
    header("Location: signInUp.php");
  }
  ?>

  <div class="account1">
    <?php
    $query = "SELECT * FROM user WHERE uid = '$uid'";
    $result = mysqli_query(Database::getConnection(), $query);


    ?>


    <?php
    // Check if there are any user data
    if (mysqli_num_rows($result) > 0) {
      // Display user details
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['uid'];
        $First_Name = $row['f_name'];
        $Last_Name = $row['l_name'];
        $Tp = $row['tp_no'];
        $Email = $row['email'];
        //$op = $row['op'];
        ?>

        <div class="container1">
          <div class="job-title">
            <h2 class="j-title"><u>User Profile</u></h2>
          </div>


          <?php


          echo "<h3 class='j-title'>First-name: $First_Name </h3>";
          echo "<div class='job-btn'>";
          echo "<a href='job.php?uid=$id' class='j-edit'> Update </a>";


          echo "</div>";
          echo "</div>";
          echo "<p class='job-salary'>Last-name: $Last_Name</p>";


          echo "<p class='job-location'>Tel:- :
                  $Tp</p>";
          echo "<p class='job-description'>Email:- :
                  $Email</p>";
          //  echo "<p class='job-location'>Tel:- :
          //  $op</p>";
      

          echo "</div>";
      }
    } else {
      // No user data found
      echo "<p>No user details founded.</p>";
    }

    ?>
    </div>
  </div>

  <?php include 'includes/footer.php' ?>

  <script src='scripts/scriptGen.js'></script>





</body>

</html>