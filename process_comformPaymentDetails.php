<?php

require 'classes/connection.php';
require 'classes/generateId.php';

$dbConnect = Database::getConnection();

// session_start();

// $package_ID = $_POST['pkg_id'];
// $date = $_POST['date'];
// $no_Of_People = $_POST['no_Of_People'];
// $accommodation = $_POST['accommodation'];
// $no_Of_Rooms = $_POST['no_Of_Rooms'];
// $total_Payment = $_POST['total_Payment'];

$userID = "user123";

$package_ID = "pkg10";
$reserved_date = date('Y-m-d H:i:s');
$no_Of_People = 10;
$accommodation = "yala hjh";
$no_Of_Rooms = 5;
$total_Payment = 200000;


$status = 1;
$reservation_date = date('Y-m-d H:i:s');


//generate the reservation ID
$getRS_sql = "SELECT MAX(reservation_id) AS 'lastone' FROM reservation";
$resultRS = Database::search($getRS_sql);
$lastRSid = $resultRS->fetch_assoc();
$reservation_id = GenerateId::generate($lastRSid['lastone'],"RS");


//get the package name and no of days from the package table
$pkg_sql = "SELECT p_name, no_of_days FROM package WHERE pkg_id = '$package_ID'";
$resultPkg = Database::search($pkg_sql);
$PkgDetails = $resultPkg->fetch_assoc();

$package_name = $PkgDetails['p_name'];
$no_of_night = $PkgDetails['no_of_days'];


//insert the dat to the reservation table
if (isset($_GET['com']) && $_GET['com'] == 'comform') {
    
    $add_sql = "INSERT INTO reservation(status, reservation_id , total_price, no_of_people, reservation_date, reserved_date, pkg_id , uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbConnect->stmt_init();
    $stmt = $dbConnect->prepare($add_sql);
    $stmt->bind_param('ssssssss', $status, $reservation_id, $total_Payment, $no_Of_People, $reservation_date, $reserved_date, $package_ID, $userID);

    if ($stmt->execute()) {
        // die("Data inserted successfully."); 
        $_SESSION['reservation_id'] = $reservation_id;

        $stmt->close();
        $dbConnect->close();
        header('location: paymentDetails.php');
        exit();
    }else {   
        die("Error inserting data: ");
    }

}
