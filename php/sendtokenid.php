<?php
require "conn.php";
$tokenid = $_POST["tokenid"];


if($conn){

    $sql = "INSERT INTO `tokenid`(`tokenid`) VALUES (`$tokenid`)";
    if(mysqli_query($conn,$sql)){
        echo "TOKEN ID saved successfully";
    }else{
        echo "TOKEN ID not saved "; 
    }  
 
}else{
    echo "Connection Error";
}


?>