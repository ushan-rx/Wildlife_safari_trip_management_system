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
  <link rel='stylesheet' type='text/css' media='screen' href='styles/account.css'>

</head>

<body>
    
<?php 
require 'includes/header.php' ?>
<?php require_once('classes/connection.php') ?>

  <?php
    require_once('classes/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
      // Get the job ID from the URL
     $id = $_GET['id'];

      $query = "SELECT * FROM  user WHERE uid = ?";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->bind_param("s", $id);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $fName = $row['f_name'];
        $lName = $row['l_name'];
        $tpNo = $row['tp_no'];
        $email = $row['email'];

        // Close the result set
        $result->close();

        // Close the statement
        $stmt->close();
?> 

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
      

    
  <!-- your code here -->
  <section class="account1">
        <div class="container1">
            <div class="form-group1">
                <h1>Account Settings</h1>
                <div class="text">
                    <h4>Kiran Acharya</h4><br>
                </div>

                <label>First Name</label>
                <input type="text" class="form-control1" name="f_name" id="firstName" value="<?php echo $fName; ?>" required /><br>

                <label>Last Name</label>
                <input type="text" class="form-control1" name="l_name" id="lastName" value="<?php echo $lName; ?>" required /><br>

                <label>Contact Number </label>
                <input type="text" class="form-control1" name="tp_no" id="tp_no" value="<?php echo $tpNo; ?>" required  /><br>

                <label>Email</label>
                <input type="text" class="form-control1" name="email" id="email" value="<?php echo $email; ?>" required /><br>

                <div class="btn">
                    <div class="btn1">
                        <button><a href ="job.php">Update</a></button>
                    </div>

                    <div class="btn2">
                        <button>Cancel</button>
                    </div>
                </div>

                <hr>    

                <form action="change-p.php" method="post">
                  <div class="container">
                      <h1>Password Settings</h1><br>
                  </div>
                   
                    <?php if (isset($_GET['error'])) { ?>
                      <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                      <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                        <label>Old password</label>
                        <input type="password" class="form-control1" name="op" ><br>

                        <label>New password</label>
                        <input type="password" class="form-control1" name="np" ><br>

                        <label>Confirm new password</label>
                        <input type="password" class="form-control1" name="c_np" ><br>

                        <div class="btn">
                          <div class="btn1">
                            <button><a href="job.php" class="ca">Reset</a></button>

                          </div>

                          <div class="btn2">
                            <button><a href="job.php" class="ca">Cancel</a></button>
                        
                          </div>
                        </div>
                </form>
                

       

                
            </div>
        </div>
    </section>
    <script>
         function goBack() {
                window.history.back();
         }
    </script>
  <script src='script.js'></script>

  <?php
     }else{
        //user data not found
        echo "user data not found.";
     }
  
?>

  

  <?php include 'includes/footer.php' ?>
  
</body>

</html>