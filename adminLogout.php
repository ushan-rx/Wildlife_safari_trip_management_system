<?php
session_start();
if(! empty($_SESSION["staff_ses"])){
    unset($_SESSION["staff_ses"]);
   
    header("Location: adminLogin.php?type=log");
}else{
    header("Location: adminLogin.php?type=log");
    
}