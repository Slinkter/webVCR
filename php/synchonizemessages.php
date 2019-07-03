<?php
require "conn.php";
if($conn){
    $sql = "SELECT * FROM  `messages`  WHERE `Synchstatus`=1";
    $collectunsynchronized = mysqli_query($conn,$sql);
    $messageresponce = array();
    while($row=mysql_fetch_array($collectunsynchonized)){
        array_push($mesageresponce,array('title'=>$row[1],'message'=>$row[2]));
        $id = $row[0];
        $sqlup="UPDATE `messages` SET `Synchstatus`=0 WHERE `ID` = `$id`";
        mysqli_query($conn,$sqlup);
    }
    echo json_encode(array('message_response'=>$mesageresponce));


}else {
    echo "Connection Error";
}

mysqli_close($conn);

?>