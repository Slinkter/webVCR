<?php

require "connect.php";

$title = $_GET["title"];
$note = $_GET["note"];
$color = $_GET["color"];



$query = "INSERT INTO notes(`title`,`note`,`color`) VALUES ('$title','$note','$color');";

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
