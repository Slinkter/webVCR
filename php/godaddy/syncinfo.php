<?php
require "connect.php";
$Name = $_GET["name"];  
$query = "INSERT INTO contacts (`name`) VALUES ('$Name');";

if($conn){
    if(mysqli_query($conn,$query)){
        $response['success'] = true;
        $response['message']= "Successfuly";
    }else {
        $response['success'] = false;
        $response['message']= "Failure!";
    }

}else{
    $response['success'] = false;
    $response['message']= "error";
}
echo json_encode($response);
mysql_close($con);

?>