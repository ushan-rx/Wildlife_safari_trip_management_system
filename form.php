<?php
session_start();
require_once 'classes/connection.php';
require 'classes/generateId.php';

if (isset($_SESSION['user_ses'])) {
   $uid = $_SESSION['user_ses'];
} else {
   $uid = NULL;
}


$query_get2 = "SELECT MAX(inquiry_id) AS 'lastone' FROM inquiry";
$resultest2 = Database::search($query_get2);
$lastid = $resultest2->fetch_assoc();
$inquiry_id = GenerateId::generate($lastid['lastone'], "IN");

if (isset($_POST['full_name']) && isset($_POST['email']) &&
   isset($_POST['country']) && isset($_POST['tp_no']) && isset($_POST['subject']) && isset($_POST['inquiry_txt'])
) {

   $full_name = $_POST['full_name'];
   $email = $_POST['email'];
   $country = $_POST['country'];
   $tp_no = $_POST['tp_no'];
   $status = 1;
   $subject = $_POST['subject'];
   $inquiry_txt = $_POST['inquiry_txt'];



   //Database connection
   $conn = new mysqli('localhost', 'root', '', 'safari_management_system');
   if ($conn->connect_error) {
      die('Connection Failed : ' . $conn->connect_error);

   } else {
      //make inquiry_id

      $stmt = $conn->prepare("insert into inquiry(inquiry_id, full_name, email,country,tp_no,subject,inquiry_txt, uid, status) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssssssi", $inquiry_id, $full_name, $email, $country, $tp_no, $subject, $inquiry_txt, $uid, $status);
      if ($stmt->execute()) {
         echo "<script> alert('Inquiry sent...')</script>";
         echo "<script> window.location.href = 'contact.php'</script>";
      } else {
         echo "<script> alert('Inquiry failed...');</script>";
         echo "<script> window.location.href = 'contact.php';</script>";
      }
      $stmt->close();
      $conn->close();



   }
} else {
   echo "<script> alert('Input all data')</script>";
   echo "<script> window.location.href = 'contact.php'</script>";
   
}
?>