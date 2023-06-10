<?php

require 'classes/connection.php';
require 'classes/generateId.php';

$dbConnect = Database::getConnection();

    //get data in the reservation table
$add_sql = "SELECT reservation_id, total_price, reservation_date, reserved_date, pkg_id
            FROM reservation
            WHERE status = 1";

$stmt = $dbConnect->prepare($add_sql);

if ($stmt->execute()) {    
    $result = $stmt->get_result();     
} 
else {    
    die ("Error inserting data: " . $stmt->error);
}



//When click the delate button
if(isset($_GET['id'])){

    $id = $_GET['id'];

    
      //calculate the refund Amount
    $getprice_sql = "SELECT total_price FROM reservation WHERE reservation_id = ?";

    $getprice_stmt = $dbConnect->prepare($getprice_sql);
    $getprice_stmt->bind_param('s',$id);
    $getprice_stmt->execute();  
    $getprice_result = $getprice_stmt->get_result();  
    $row = $getprice_result->fetch_assoc();
    $total_amount = $row['total_price'];  

    $refund_amount = $total_amount * 0.5;



// Insert the deleted data into the cancel resavation table

        //genarate cancel reservation ID
        $getCR_sql = "SELECT MAX(cancellation_id ) AS 'lastone' FROM cancel_reservation";
        $resultCR = Database::search($getCR_sql);
        $lastCRid = $resultCR->fetch_assoc();
        $cancelVeservation_id = GenerateId::generate($lastCRid['lastone'],"CR");

    $cancellation_id = 'cid12455';
    $date = date('Y-m-d H:i:s');
    $sid = 'sid001';
    
    $insert_sql = "INSERT INTO cancel_reservation(cancellation_id, cancel_date, refund_amount, reservation_id, sid) values(?,?,?,?,?)";

    $insert_stmt = $dbConnect->prepare($insert_sql);
    $insert_stmt->bind_param('sssss',$cancelVeservation_id, $date, $refund_amount, $id, $sid );

    $insert_stmt->execute();
    $insert_stmt->close();



            // Update the 'status' in the reservation table
    $sql_delect = "UPDATE reservation SET status = 0 WHERE reservation_id = ? ";
    $dlt_stmt = $dbConnect->prepare($sql_delect);
    $dlt_stmt->bind_param('s', $id);

    $dlt_stmt->execute();

    $dlt_stmt->close();

    header('location: adminCancelReservation.php');
    exit();

    }
   
   

$stmt->close();
$dbConnect->close();
