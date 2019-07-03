<?php
require 'conn.php';
$title = $_POST['title'];
$message = $_POST['message'];
$pathtofcm ="https://fcm.googleapis.com/fcm/send";
$serverkey = "AAAAoUht0jQ:APA91bEJrIF35tuLlUo4V6Q6svajKqfWgjEjWvO4dJ4pVnbKKsj7eBULznlHTlO697gV0GkAa6FGphV8xwz7L1-DcXLWeZJ0hiFnjDJ-2IBLGSVVDPPOJPtzc4_HoS6shMxOebbEqZxa";

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

        $curl_session = curl_init();
        curl_setopt($curl_session,CURLPOT_URL,$pathtofcm);
        curl_setopt($curl_session,CURLPOT_POST,true);
        curl_setopt($curl_session,CURLPOT_HTTPHEADER,$headers);
        curl_setopt($curl_session,CURLPOT_RETURNTRANSFER,true);
        curl_setopt($curl_session,CURLPOT_SSL_VERIFYPEER,false);
        curl_setopt($curl_session,CURLPOT_IPRESOLVE,CURLPOT_IPRESOLVE_V4);
        curl_setopt($curl_session,CURLOPT_POSTFIELDS,$payload);
        $result = curl_exec($curl_session);
        curl_close($curl_session);



    }
}
?>