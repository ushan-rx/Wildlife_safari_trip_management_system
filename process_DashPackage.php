<?php

require_once 'classes/connection.php';
require_once 'classes/generateId.php';

$dbConnect = Database::getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['delete'])) {

        $name = $_POST['name'];
        $pk_id = $_POST['pk_id'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $days = $_POST['days'];
        $start_date = $_POST['start_date'];

        if (!empty($name) && !empty($pk_id) && !empty($price) && !empty($description) && !empty($days)) {
            $dlt_sql = "UPDATE package SET status = 0 WHERE pkg_id  = ? ";
            $dlt_stmt = $dbConnect->prepare($dlt_sql);
            $dlt_stmt->bind_param('s', $pk_id);
            if ($dlt_stmt->execute()) {
                echo "<script>alert('Delete success');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            } else {
                // Handle the case when execution fails
                echo "<script>alert('Delete failed.');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            }
            $dlt_stmt->close();
        } else {
            echo "<script> alert('Please fill in all the required fields.'); </script>";
            echo "<script> window.location.href = 'dashPackage.php'; </script>";
            exit();
        }

        header('location: dashPackage.php');
        exit();

    } elseif (isset($_POST['update'])) {

        $name = $_POST['name'];
        $pk_id = $_POST['pk_id'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $days = $_POST['days'];
        $start_date = $_POST['start_date'];
    
        if (!empty($name) && !empty($pk_id) && !empty($price) && !empty($description) && !empty($days)) {
    
            $upd_sql = "UPDATE package SET status = 1, p_name = ?, price_per_person = ?, description = ?, no_of_days = ?, start_date = ?  WHERE pkg_id  = ? ";
            $upd_stmt = $dbConnect->prepare($upd_sql);
            $upd_stmt->bind_param('ssssss',$name, $price, $description, $days, $start_date, $pk_id);
            if ($upd_stmt->execute()) {
                echo "<script>alert('Update success');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            } else {
                // Handle the case when execution fails
                echo "<script>alert('Update failed.');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            }
            $upd_stmt->close();
    
        } else {
            echo "<script> alert('Please fill in all the required fields.'); </script>";
            echo "<script> window.location.href = 'dashPackage.php'; </script>";
            exit();
        }
    
        header('location: dashPackage.php');
        exit();
    
    } elseif (isset($_POST['insert'])) {
        
        $name = $_POST['name'];
        $pk_id = $_POST['pk_id'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $days = $_POST['days'];
        $start_date = $_POST['start_date'];
        $status = 1;

        if (!empty($name) && !empty($price) && !empty($description) && !empty($days)) {
            
            $getPK_sql = "SELECT MAX(pkg_id) AS 'lastone' FROM package";
            $resultPK = Database::search($getPK_sql);
            $lastPKid = $resultPK->fetch_assoc();
            $pk_id = GenerateId::generate($lastPKid['lastone'],"PK");

            $inst_sql = "INSERT INTO package (status, pkg_id , p_name, price_per_person, description, no_of_days, start_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $inst_stmt = $dbConnect->prepare($inst_sql);
            $inst_stmt->bind_param('sssssss', $status, $pk_id, $name, $price, $description, $days,$start_date);
            if ($inst_stmt->execute()) {
                echo "<script>alert('Insert success');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            } else {
                // Handle the case when execution fails
                echo "<script>alert('Insert failed.');</script>";
                echo "<script>window.location.href = 'dashPackage.php';</script>";
                exit();
            }
            $inst_stmt->close();

        } else {
            echo "<script> alert('Please fill in all the required fields.'); </script>";
            echo "<script> window.location.href = 'dashPackage.php'; </script>";
            exit();
        }

        header('location: dashPackage.php');
        exit();

    }
}
