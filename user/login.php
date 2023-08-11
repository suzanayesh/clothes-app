<?php
include '../connection.php';

 
$userEmail=$_POST['user_email'];
//secure password 
//calculate the md5 hash of a string 
//the passwprd will not save at it  is 
$userPassword=md5($_POST['user_password']);
//if two record   is correct sign in 
$sqlQurey ="SELECT * FROM  userstabel WHERE  user_email='$userEmail' AND user_password ='$userPassword'";
$resultOfQurey=$connect->query($sqlQurey);
//if run successfuly
//if two is correct numrow will be one 
if ($resultOfQurey->rowCount() > 0 ){//allow user to login 
$userRecord = array();
while($rowFound= $resultOfQurey->fetch_assoc()){
    $userRecord[]=$rowFound;
}
    echo json_encode(array("success"=>true, "userData"=>$userRecord[0]));

}else{
    //num rows will be zero - dont allow user to login 
    echo json_encode(array("success"=>false));


}
