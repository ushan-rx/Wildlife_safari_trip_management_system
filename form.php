


<?php include 'classes/connection.php' ?>

<?php

header('Refresh: 1; url=wildContact.php');
                    $inquiry_id=$_POST['inquiry_id'];
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $county = $_POST['county'];
                    $tp_no = $_POST['tp_no'];
                    
                    $subject = $_POST['subject'];
                    $inquiry_txt = $_POST['inquiry_txt'];

                    //Database connection
                    $conn = new mysqli('localhost', 'root','', 'safari_management_system');
                    if($conn->connect_error){
                        die('Connection Failed : '.$conn->connect_error);

                    }else{
 

                       $stmt = $conn->prepare("insert into inquiry(inquiry_id,full_name, email,country,tp_no,subject,inquiry_txt) values(?, ?, ?, ?, ?, ?, ?)");
                       $stmt->bind_param("sssssss",$inquiry_id,$full_name,$email,$county,$tp_no,$subject,$inquiry_txt);
                       $stmt->execute();
                       echo "Registration successfully...";
                       $stmt->close();
                       $conn->close();

                    //make inquiry_id
                       $query_get2="SELECT MAX(IN_ID) AS 'lastone' FORM inquiry";
                       $resultest2=Database::search($query_get2);
                       $lastid=$resultest2->fetch_assoc();
                       $IN_ID=GenerateId::generate($lastid['lastone'], "IN");

                    }
                 ?>