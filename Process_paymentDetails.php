<?php  

require 'classes/connection.php';
require 'classes/generateId.php';

session_start();
$rid = $_SESSION['reservation_id'];
$dbConnect = Database::getConnection();


//for show the  total amount

    $amount_sql = "SELECT total_price  FROM reservation WHERE reservation_id = '$rid'";
    $resultAmount = Database::search($amount_sql);
    $total_amount = $resultAmount->fetch_assoc();



//for enter the details of user to the payment table

if(isset($_POST['submit'])) {
    $rid = $_SESSION['reservation_id'];
    $user_id = "user123";

    $getRS_sql = "SELECT MAX(pay_id) AS 'lastone' FROM payment";
    $resultRS = Database::search($getRS_sql);
    $lastRSid = $resultRS->fetch_assoc();
    $pay_id = GenerateId::generate($lastRSid['lastone'],"PY");


    $salutation = $_POST['salutation'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $country = $_POST['country'];

    $boxNumber = $_POST['boxNumber'];
    
    $date = date('Y-m-d H:i:s');

    if($boxNumber=1){
        $payMethod = "Visa and Master";
    }elseif($boxNumber=2){
        $payMethod = "Amarican Express";
    }

    $add_sql = "INSERT INTO payment(pay_id, first_name, last_name, phone, email, country, payMethod, date, rid, uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbConnect->stmt_init();
    $stmt = $dbConnect->prepare($add_sql);
    $stmt->bind_param('ssssssssss', $pay_id, $first_name, $last_name, $phone, $mail, $country, $payMethod, $date, $rid, $user_id);

    if ($stmt->execute()) {
        // die("Data inserted successfully."); 
        $stmt->close();
        $dbConnect->close();
        header('location: Payment_Receipt.php');
        exit();
    }else {   
        die("Error inserting data: ");
    }

}



   

    




