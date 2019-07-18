<?php

require "connect.php";

$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$dni = $_GET["dni"];
$correo = $_GET["correo"];
$numphone = $_GET["numphone"];
$uid = $_GET["uid"];

$query = "INSERT INTO `login_river`(`firstname`,`lastname`,`dni`,`correo`,`numphone`,`uid`) VALUES ('$firstname','$lastname','$dni','$correo','$numphone','$uid');";

if(mysqli_query($conn,$query)){
        $response['success'] = true;
        $response['message']= "Successfuly";
}else {
        $response['success'] = false;
        $response['message']= "Failure!";
 }
echo json_encode($response);
mysql_close($conn);
?>
 