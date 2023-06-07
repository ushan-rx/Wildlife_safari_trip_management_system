<?php
session_start();
if(! empty($_SESSION["user_ses"])){
    unset($_SESSION["user_ses"]);
   
    header("Location: signInUp.php?type=log");
}else{
    header("Location: signInUp.php?type=log");
    
}