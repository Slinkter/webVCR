<?php

require "connect.php";

$firstname = $_GET["nameChofer"];
$lastname = $_GET["lastChofer"];
$dni = $_GET["dniChofer"];
$brevete = $_GET["brevete"];
$numphone = $_GET["numphone"];

$query = "INSERT INTO `choferRiver`(`nameChofer`,`lastChofer`,`dniChofer`,`brevete`,`numphone`) VALUES ('$firstname','$lastname','$dni','$brevete','$numphone');";

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
 