<?php
include '../connection.php';
$userEmail=$_POST['user_email'];
$sqlQurey =  "SELECT * FROM userstabel WHERE user_email='$userEmail'";
$resultOfQurey=$connect->query($sqlQurey);

if ($resultOfQurey->rowCount() > 0){
   //num rows length ==1 - email already in someone else use-- error
    echo json_encode(array("emailFound"=>true));
    
    }else{
         
        //num rows length == 0 email is NOT already in someone else use
        //a user will allowed to signUp successfully 
        echo json_encode(array("emailFound"=>false));
    
    
    }
    