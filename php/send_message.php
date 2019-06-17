<?php
require 'conn.php';
$title = "";
$message = "";
$pathtofcm ="";
$serverkey = "";

if($conn){
    $sql="INSERT INTO `messages`(`Title`,`Message`) VALUES (`$title`,`$message`) ";
    if(mysql_query($conn,$sql)){
        echo "Message saved successfully";
        $sqln = "SELECT * FROM `tokenid`";
        $resultn = mysqli_query($conn,$sqln);
        $headers = array('');
        $key = array();
        while($row = mysqli_fetch_row($resultn)){
            array_push($key,$row[0]);
        }

        $fields = array();
        $payload = json_encode($fields);


    }
}


?>