<?php

require 'classes/connection.php';
require 'classes/generateId.php';



//insert data
if (isset($_POST['submit1'])) {


    $f_name= $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $staff_type = $_POST['staff_type'];
    $sid = $_POST['sid'];
    $status= $_POST['status'];

$query1 = "INSERT INTO staff(sid, f_name, l_name, email,staff_type, status) VALUES ('$sid',''$f_name,'$l_name','$email','$staff_type','$status')";


}

//search data
if (isset($_POST['submit4'])) {
$query2 ="SELECT * FROM staff";
$result = Database::search($query2);
 while ($row = $result->fetch_assoc()) {
   
    $f_name =$row['f_name'];
    $l_name =$row['l_name'];
    $email =$row['email'];
    $staff_type =$row['staff_type'];
    $sid =$row['sid'];

    
}
}

//delete data
if (isset($_POST['submit2'])) {

$query3= "DELETE FROM staff ";


}

//update data