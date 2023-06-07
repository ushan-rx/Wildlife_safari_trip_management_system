<?php
require 'classes/connection.php';
require 'classes/generateId.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $mail = htmlspecialchars($_POST["email"]);
    $pw = htmlspecialchars($_POST["pw"]);
    $agree = htmlspecialchars($_POST["terms"]);

    $gotData = "fname=" . $fname . "&lname=" . $lname . "&mail=" . $mail . "&pw=" . $pw;

    // checking if all the values are inserted
    if (empty($fname)) {
        $msg = "Please enter first name";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (empty($lname)) {
        $msg = "Please enter last name";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (empty($mail)) {
        $msg = "Please enter email";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (empty($pw)) {
        $msg = "Please enter password";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (empty($agree)) {
        $msg = "Please agree to our terms and conditions";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    }
    // validations for inputs
    else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $msg = "Please enter valid email address";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (strlen($pw) < 8) {
        $msg = "Password must contain at least 8 characters";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (!preg_match("/[a-z]/i", $pw)) {
        $msg = "Password must contain at least one letter";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else if (!preg_match("/[1-9]/", $pw)) {
        $msg = "Password must contain at least one number";
        header("Location: signInUp.php?type=reg&error=$msg&$gotData");
        exit();
    } else {

        //check for existing user
        $query_get1 = "SELECT * FROM user WHERE email= ?";

        $con = Database::getConnection();
        $stmt = $con->stmt_init();
        if (!$stmt->prepare($query_get1)) {
            $msg = "Registration failed. Connection error";
            header("Location: signInUp.php?type=reg&error=$msg&$gotData");
            exit();
        }
        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $resultset1 = $stmt->get_result();
        if ($resultset1->num_rows > 0) {
            $msg = "User with the same email address already exists.";
            header("Location: signInUp.php?type=reg&error=$msg&$gotData");
            exit();
        } else {
            // make password hash
            $pw_hash = password_hash($pw, PASSWORD_DEFAULT);

            //make userid
            $query_get2 = "SELECT MAX(uid) AS 'lastone' FROM user";
            $resultset2 = Database::search($query_get2);
            $lastid = $resultset2->fetch_assoc();
            $uid = GenerateId::generate($lastid['lastone'], "US");

            //insert data
            $query_insert = "INSERT INTO user(uid, f_name, l_name, email, pw) VALUES(?,?,?,?,?)";
            $con = Database::getConnection();
            $stmt = $con->stmt_init();
            if (!$stmt->prepare($query_insert)) {
                $msg = "Registration failed. Connection error";
                header("Location: signInUp.php?type=reg&error=$msg&$gotData");
                exit();
            }
            $stmt->bind_param("sssss",$uid, $fname, $lname, $mail, $pw_hash);

            if($stmt->execute()){
                $msg = "Registration successful";
                header("Location: signInUp.php?type=reg&error=$msg");
                exit();
            }else{
                $msg = "Registration failed. Connection error";
                header("Location: signInUp.php?type=reg&error=$msg&$gotData");
                exit();
            }
        }
        
    }
} else {
    header("Location: signInUp.php");
}