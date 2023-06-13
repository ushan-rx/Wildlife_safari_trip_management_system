<?php 
require_once 'classes/connection.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include 'classes/connection.php';

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);

    echo $op;
    
    if(empty($op)){
      header("Location: account.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: account.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: account.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['uid'];

        $sql = "SELECT op
                FROM user WHERE 
                uid='$id' AND op='$op'";
        $result = mysqli_query(Database::getConnection(), $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE user SET np='$np' WHERE uid='$id'";
        	mysqli_query(Database::getConnection(), $sql_2);
        	header("Location: account.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: account.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: account.php");
	exit();
}
}
else{
     header("Location: job.php");
     exit();
}