<?php
require 'classes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = htmlspecialchars($_POST['email']);
    $pw = htmlspecialchars($_POST['pw']);
    $remember = $_POST['remember'] ?? null;

    $gotData = "mail=" . $mail;

    // validate inputs
    if (empty($mail)) {
        $msg = "Please enter email";
        header("Location: signInUp.php?type=log&error2=$msg&$gotData");
        exit();
    } else if (empty($pw)) {
        $msg = "Please enter password";
        header("Location: signInUp.php?type=log&error2=$msg&$gotData");
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $msg = "Please enter valid email address";
        header("Location: signInUp.php?type=log&error2=$msg&$gotData");
        exit();
    } else {
        // validate credentials
        $querylog = "SELECT * FROM user WHERE email = ?";

        $con = Database::getConnection();
        $stmt = $con->stmt_init();
        if (!$stmt->prepare($querylog)) {
            $msg = "login failed. Connection error";
            header("Location: signInUp.php?type=log&error2=$msg&$gotData");
            exit();
        }
        $stmt->bind_param("s", $mail);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($pw, $user['pw'])) {
                session_start();
                $_SESSION["user_ses"] = $user["uid"];

                // remember me function

                if($remember){
                    $expire = time()+((60*60**24)*7); 
                    setcookie('REM', hash('sha256',$mail).':'.hash('sha256',$pw, $expire));
                }
                else{
                    setcookie('REM', "", -1);
                }
                header("Location: index.php");
                exit();
            } else {
                $msg = "Invalid username or password";
                header("Location: signInUp.php?type=log&error2=$msg&$gotData");
                exit();
            }
        } else {
            $msg = "Invalid username or password";
            header("Location: signInUp.php?type=log&error2=$msg&$gotData");
            exit();
        }

    }

} else {
    header("Location:signInUp.php?type=log");
}