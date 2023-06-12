<?php

require_once 'classes/connection.php';
require 'classes/generateId.php';


$dbConnect = Database::getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['delete'])) {

        $sid = $_POST['sid'];
        $f_name= $_POST['fname'];
        $l_name = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if (!empty($sid)) {
            $dlt_sql = "UPDATE staff SET status = 0 WHERE 'sid'  = '$sid'";
            if(Database::iud($dlt_sql)){
                echo "<script>alert('Delete success');</script>";
                echo "<script>window.location.href = 'staff.php';</script>";
                exit();
            } else {
                echo "<script>alert('Delete failed.');</script>";
                echo "<script>window.location.href = 'staff.php';</script>";
                exit();
            }
        } else {
            echo "<script> alert('Please fill the staff id.'); </script>";
            echo "<script> window.location.href = 'staff.php'; </script>";
            exit();
        }

    } elseif (isset($_POST['update'])) {

        $sid = $_POST['sid'];
        $f_name= $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
    
        if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($pwd) && !empty($sid)) {
    
            $upd_sql = "UPDATE staff SET status = 1, f_name = $f_name, l_name = $l_name, email = $email, pwd = $pwd,  WHERE sid  = $sid ";
                if(Database::iud($upd_sql)){
                echo "<script>alert('Update success');</script>";
                echo "<script>window.location.href = 'staff.php';</script>";
                exit();
            } else {
                echo "<script>alert('Update failed.');</script>";
                echo "<script>window.location.href = 'staff.php';</script>";
                exit();
            }
    
        } else {
            echo "<script> alert('Please fill all the required fields.'); </script>";
            echo "<script> window.location.href = 'staff.php'; </script>";
            exit();
        }
    
    } elseif (isset($_POST['insert'])) {
        
        $f_name= $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($pwd)) {
            $qget = "SELECT MAX(sid) AS 'lastone' FROM staff";
            $result = Database::search($qget);
            if($result){
                $row = $result->fetch_assoc();
                $prev = $row['lastone'];
                $sid = GenerateId::generate($prev, "ST");
                $insrt_sql = "INSERT INTO staff (sid, f_name, l_name, email, pwd) VALUES('$f_name', ' $l_name', '$email', '$pwd', '$sid')";
                if(Database::iud($insrt_sql)){
                    echo "<script> alert('Insert successful.'); </script>";
                    echo "<script> window.location.href = 'staff.php'; </script>";
                }
            }
        } else {
            echo "<script> alert('Please fill in all the required fields.'); </script>";
            echo "<script> window.location.href = 'staff.php'; </script>";
            exit();
        }

        header('location: staff.php');
        exit();

    }
}
