<?php // get the recipt details from Data Base

require 'classes/connection.php';
require 'classes/generateId.php';

// session_start();

$dbConnect = Database::getConnection();


// $userid = $_SESSION['userid'];

$user_id = "user123";

$reservationId = $_SESSION['reservation_id'];

$add_sql = "SELECT payment.pay_id, payment.date, payment.payMethod, reservation.reserved_date, package.no_of_days, reservation.total_price, package.p_name
            FROM reservation
            INNER JOIN payment ON reservation.reservation_id = payment.rid 
            INNER JOIN package ON reservation.pkg_id = package.pkg_id
            WHERE reservation.reservation_id = ?";

$stmt = $dbConnect->stmt_init();
$stmt = $dbConnect->prepare($add_sql);
$stmt->bind_param('s', $reservationId);

if ($stmt->execute()) {
    //  die("successfully.");
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $payId = $row['pay_id'];
            $paymentDate = $row['date'];
            $payMethod = $row['payMethod'];
            $reservedDate = $row['reserved_date'];
            $no_of_days = $row['no_of_days'];
            $totalAmount = $row['total_price'];
            $packageName = $row['p_name'];
        }
    }
    
} 
else {
    
    // die("Error inserting data: " . $stmt->error);

}

$stmt->close();
$dbConnect->close();