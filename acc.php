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
  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleAcc.css'>


</head>

<body>
    <?php require 'classes/connection.php' ?>

    <?php require 'includes/header.php' ?>
    <?php

    $query = "SELECT * FROM user WHERE uid = '$_SESSION[user_ses]'";
    $result = mysqli_query(Database::getConnection(), $query);

    ?>

    <section class="account1">
        <div class="container1">
            <div class="job-title">
                <h2 class="j-title">User Profile</h2>
            </div>


        <?php
        // Check if there are any user data
        if (mysqli_num_rows($result) > 0) 
           {
            // Display user details
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['uid'];
                $First_Name = $row['f_name'];
                $Last_Name = $row['l_name'];
                $Tp = $row['tp_no'];
                $Email = $row['email'];
                

                
                echo "<h3 class='job-title'>$First_Name </h3>";
                echo "<div class='job-btn'>";
                echo "<a href='./accSetting.php?id=$id' class='j-edit'> Update </a>";
                
              
                echo "</div>";
                echo "</div>";
                echo "<p class='job-salary'>Last-name: $Last_Name</p>";
               

                echo "<p class='job-location'>Tel:- :
                  $Tp</p>";
                echo "<p class='job-description'>email:- :
                  $Email</p>";
                  
                echo "</div>";
            }
        } else {
            echo "<p>No user details founded.</p>";
        }

        mysqli_free_result($result);

        ?>
        </div>
    </section>

    <?php include 'includes/footer.php'?>

    <script src='script.js'></script>

    



</body>
</html>

