<?php

require_once 'classes/connection.php';
require_once 'classes/generateId.php';



 // Check if session is already started
 if(!isset($_SESSION)){
    SESSION_START();
}

// $userID = "user123";
if(isset($_SESSION['user_ses'])){
    $userID = $_SESSION['user_ses'];
} else {
    header('Location: signInUp.php');
    exit();
}



$dbConnect = Database::getConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    if (isset($_POST['comform_details'])) {
        
        $package_ID = $_POST['pkg_id'];
        $reserved_date = $_POST['date'];
        $no_Of_People = intval($_POST['no_Of_People']);
        $accommodation = $_POST['accommodation'];
        $no_Of_Rooms = intval($_POST['no_Of_Rooms']);
        $total_Payment = $_POST['total_Payment'];

        $status = 1;
        $reservation_date = date('Y-m-d H:i:s'); //me dem maru karapan aniwa het balala **************************************************

        //get the package name and no of days from the package table
        $pkg_sql = "SELECT p_name, no_of_days, price_per_person FROM package WHERE pkg_id = '$package_ID'";
        $resultPkg = Database::search($pkg_sql);
        $PkgDetails = $resultPkg->fetch_assoc();

        $package_name = $PkgDetails['p_name'];
        $no_of_night = $PkgDetails['no_of_days'];
        $package_price_per_person = $PkgDetails['price_per_person'];


        //get the accommodation price and hotel name from the package table
        $acc_sql = "SELECT price, hotel_name, total_room_count FROM accommodation WHERE aid  = '$accommodation'";
        $resultPkg = Database::search($acc_sql);
        $accResalt = $resultPkg->fetch_assoc();

        $acc_price = $accResalt['price'];
        $acc_name = $accResalt['hotel_name'];
        $total_room_count = $accResalt['total_room_count'];



    
    // $package_ID = "pkg11";
    // $reserved_date = date('Y-m-d H:i:s');
    // $no_Of_People = 5;
    // $accommodation = "AC000011";
    // $no_Of_Rooms = 10;
    // // $total_Payment = 200000;





    //generate the reservation ID
    $getRS_sql = "SELECT MAX(reservation_id) AS 'lastone' FROM reservation";
    $resultRS = Database::search($getRS_sql);
    $lastRSid = $resultRS->fetch_assoc();
    $reservation_id = GenerateId::generate($lastRSid['lastone'],"RS");


    //generate the room record ID
    $getRR_sql = "SELECT MAX(rid) AS 'lastone' FROM room_record";
    $resultRR = Database::search($getRR_sql);
    $lastRRid = $resultRR->fetch_assoc();
    $room_record_ID = GenerateId::generate($lastRRid['lastone'],"RR");


    //calculate room count
    $room_count = $total_room_count - $no_Of_Rooms;


    
    //insert the dat to the reservation table
   
        $add_sql = "INSERT INTO reservation(status, reservation_id , total_price, no_of_people, reservation_date, reserved_date, pkg_id ,aid, uid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbConnect->stmt_init();
        $stmt = $dbConnect->prepare($add_sql);
        $stmt->bind_param('sssssssss', $status, $reservation_id, $total_Payment, $no_Of_People, $reservation_date, $reserved_date, $package_ID, $accommodation, $userID);

        if ($stmt->execute()) {
            // die("Data inserted successfully."); 
            $_SESSION['reservation_id'] = $reservation_id;
            $stmt->close();
        }else {   
            die("Error inserting data: ");
        }

            $acc_sql = "INSERT INTO room_record(rid, aid , date, room_count) VALUES (?, ?, ?, ?)";
            $acc_stmt = $dbConnect->stmt_init();
            $acc_stmt = $dbConnect->prepare($acc_sql);
            $acc_stmt->bind_param('ssss', $room_record_ID, $accommodation, $reserved_date, $room_count);

            if ($acc_stmt->execute()) {

                
                $acc_stmt->close();
                $dbConnect->close();

               
                header('location: paymentDetails.php');
                exit();

            }else {   
                die("Error inserting data: ");
            }
            

    

    }else{
        // header('Location: PackageCard.php');
        // exit;
    }
}
