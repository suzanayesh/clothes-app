<?php
include '../connection.php';

 
$userName=$_POST['user_name'];
$userEmail=$_POST['user_email'];
//secure password 
//calculate the md5 hash of a string 
$userPassword=md5($_POST['user_password']);
$sqlQurey ="INSERT INTO userstabel SET user_name = '$userName', user_email='$userEmail',user_password ='$userPassword'";

$statement = $connect->prepare($sqlQurey);

$statement->execute();

$count = $statement->rowCount();
// $resultOfQurey=$connect->query($sqlQurey);
//if run successfuly
if ($count > 0){
echo json_encode(array("success"=>true));

}else{
    echo json_encode(array("success"=>false));


}
