<?php
require 'conn.php';
$title = $_POST['title'];
$message = $_POST['message'];
$pathtofcm ="https://fcm.googleapis.com/fcm/send";
$serverkey = "AAAAqb495J4:APA91bG4syzoU6QuWt5GvyIu3FUoPS9UPMNYWmeFZUutzYQZ1rPtou54UOTwxd-eumWuqdaCAoNJ1MOQJ6FXGZQnOW66KbH1YvsfGWZlyUjHvZdeH8iP6arioetA1VCCycVDDJiaSkge";

if($conn){
    $sql="INSERT INTO `messages`(`Title`,`Message`) VALUES (`$title`,`$message`) ";
    if(mysql_query($conn,$sql)){
        echo "Message saved successfully";
        $sqln = "SELECT * FROM `tokenid`";
        $resultn = mysqli_query($conn,$sqln);
        $headers = array('Authorization:key='.$serverkey ,'Content-Type:application/json');
        $key = array();
        while($row = mysqli_fetch_row($resultn)){
            array_push($key,$row[0]);
        }

        $fields = array('registration_ids'=>$key,'notification'=>array('title'=>$title,'body'=>$message));
        $payload = json_encode($fields);


    }
}


?>