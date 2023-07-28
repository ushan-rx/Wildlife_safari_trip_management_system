<?php

require_once 'classes/connection.php';
require 'classes/generateId.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //data insert handle
    if (isset($_POST['insert'])) {
        $f_name = (isset($_POST['fname']))? htmlspecialchars($_POST['fname']) : NULL;
        $l_name = (isset($_POST['lname']))? htmlspecialchars($_POST['lname']) : NULL;
        $email = (isset($_POST['email']))? htmlspecialchars($_POST['email']) : NULL;
        $staff_type = (isset($_POST['staff_type']))? htmlspecialchars($_POST['staff_type']) : NULL;
        $pw = (isset($_POST['pw']))? htmlspecialchars($_POST['pw']) : NULL;
        $pwHash = password_hash($pw, PASSWORD_DEFAULT);   //hashing password

        $filled = "fname=".$f_name."&lname=".$l_name."&mail=".$email;  //binding filled values

        if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($pwHash) && !empty($staff_type)) {

            $qget = "SELECT MAX(sid) AS 'lastone' FROM staff"; // to generate staff id
            $result = Database::search($qget);
            if ($result) {
                $row = $result->fetch_assoc();
                $prev = $row['lastone'];
                $sid = GenerateId::generate($prev, "ST"); 
                //insert data 
                $insrt_sql = "INSERT INTO staff (sid, f_name, l_name, email, pw, status, staff_type) VALUES('$sid', '$f_name', ' $l_name', '$email', '$pwHash', 1, '$staff_type')";
                if (Database::iud($insrt_sql)) { //if insert success.......
                    echo "<script> alert('Insert successful.'); </script>";
                }else{
                    echo "<script> alert('Insert Failed.'); </script>";
                }
                echo "<script> window.location.href = 'staff.php'; </script>";
                exit();
            }
        } else {  // if fields are empty
            echo "<script> alert('Please fill in all the required fields.'); </script>";
            echo "<script> window.location.href = 'staff.php?$filled'; </script>"; // send filled data through url
            exit();
        }
        
    //data delete handle
    } elseif (isset($_POST['delete'])) {
        $sid = (isset($_POST['sid']))? htmlspecialchars($_POST['sid']) : NULL;

        if (!empty($sid)) {
            $dlt_sql = "UPDATE staff SET status = 0 WHERE sid  = '$sid'";
            if (Database::iud($dlt_sql)) {
                echo "<script>alert('Delete successful.');</script>";
            } else {
                echo "<script>alert('Delete failed.');</script>";
            }
            echo "<script>window.location.href = 'staff.php';</script>";
            exit();
            
        } else {
            echo "<script> alert('Please fill the staff id.'); </script>";
            echo "<script> window.location.href = 'staff.php'; </script>";
            exit();
        }

    } elseif(isset($_POST['show'])){
        $sid = (isset($_POST['sid']))? htmlspecialchars($_POST['sid']) : NULL;
        $f_name = (isset($_POST['fname']))? htmlspecialchars($_POST['fname']) : NULL;
        $l_name = (isset($_POST['lname']))? htmlspecialchars($_POST['lname']) : NULL;

        if(!empty($sid)){ // search by sid
            $qsearch = "SELECT * FROM staff WHERE sid = '$sid'"; 
            $result = Database::search($qsearch);
            if ($result) {
                $row = $result->fetch_assoc();
                $sid = $row['sid'];
                $f_name = $row['f_name'];
                $l_name = $row['l_name'];
                $email = $row['email'];
                $staff_type = $row['staff_type'];

                $data = "sid=".$sid."&fname=".$f_name."&lname=".$l_name."&mail=".$email."&type=".$staff_type;  // bind search result
                echo "<script> window.location.href = 'staff.php?$data'; </script>"; // send search data through URL
            }
            else{
                echo "<script> alert('No records found.'); </script>";
                echo "<script> window.location.href = 'staff.php'; </script>"; 
            }
            exit();
        }elseif(!empty($f_name) && !empty($l_name)){ //search by name
            $qsearch = "SELECT * FROM staff WHERE f_name = '$f_name' AND l_name = '$l_name'"; 
            $result = Database::search($qsearch);
            if ($result) {
                $row = $result->fetch_assoc();
                $sid = $row['sid'];
                $f_name = $row['f_name'];
                $l_name = $row['l_name'];
                $email = $row['email'];
                $staff_type = $row['staff_type'];

                $data = "sid=".$sid."&fname=".$f_name."&lname=".$l_name."&mail=".$email."&type=".$staff_type;
                echo "<script> window.location.href = 'staff.php?$data'; </script>"; // send search data through URL
            }
            else{
                echo "<script> alert('No records found.'); </script>";
                echo "<script> window.location.href = 'staff.php'; </script>"; 
            }
            exit();
        }else{
            echo "<script> alert('Enter sid or full name.'); </script>";
            echo "<script> window.location.href = 'staff.php'; </script>";   
            exit(); 
        }
    }elseif (isset($_POST['update'])) {

        $sid = (isset($_POST['sid']))? htmlspecialchars($_POST['sid']) : NULL;
        $f_name = (isset($_POST['fname']))? htmlspecialchars($_POST['fname']) : NULL;
        $l_name = (isset($_POST['lname']))? htmlspecialchars($_POST['lname']) : NULL;
        $email = (isset($_POST['email']))? htmlspecialchars($_POST['email']) : NULL;
        $staff_type = (isset($_POST['staff_type']))? htmlspecialchars($_POST['staff_type']) : NULL;

        $filled = "sid=".$sid."&fname=".$f_name."&lname=".$l_name."&mail=".$email."&type=".$staff_type; //binding filled values

        if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($sid) && !empty($staff_type)) {

            $upd_sql = "UPDATE staff SET f_name = '$f_name', l_name = '$l_name', email = '$email', staff_type = '$staff_type'  WHERE sid  = '$sid' ";
            if (Database::iud($upd_sql)) {
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
            echo "<script> window.location.href = 'staff.php?$filled'; </script>"; // send filled data through url
            exit();
        }

    }elseif (isset($_POST['reset'])){
        echo "<script> window.location.href = 'staff.php'; </script>";
        exit();
    }
}