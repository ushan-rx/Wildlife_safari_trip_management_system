<?php

require 'classes/connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($email) || empty($password)) {
        $error = "Please fill in all the fields.";
        header("Location: adminlogin.php?error=" . urlencode($error));
        exit();
    }else{

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Incorrect email address";
            header("Location: adminLogin.php?error=".urlencode($error));
            exit();
        } 

        $querylog = "SELECT * FROM staff WHERE email = ?";

        $con = Database::getConnection();
        $stmt = $con->stmt_init();
        if (!$stmt->prepare($querylog)) {
            $msg = "login failed. Connection error";
            header("Location: adminLogin.php?error=".urlencode($error));
            exit();
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $staff = $result->fetch_assoc();

        if ($staff) {
            if (password_verify($password, $staff['pw'])) {
                session_start();
                $_SESSION["staff_ses"] = $staff["sid"];
                $_SESSION["type"] = $staff["staff_type"];
                header("Location: adminDashboard.php");
                exit();
            } else {
                $error = "Invalid password";
                header("Location: adminLogin.php?error=".urlencode($error));
                exit();
            }
        } else {
            $error = "Invalid username or password";
            header("Location: adminLogin.php?error=".urlencode($error));
            exit();
        }

    }
    

}else {
    header("Location: adminLogin.php");
    exit();
}