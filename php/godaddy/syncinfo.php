<?php

$user_name = "userArsi";
$password = "MUNDOarsi20";
$server = "localhost";
$db_name = "dbContactsArsi";

$con = mysqli_connect($server,$user_name,$password,$db_name);

if($con){  
    $Name = $_POST['name'];    
    $query = "INSERT INTO `contacts` (`id`, `name`) VALUES ('.NULL.','".$Name."')";
    $result = mysqli_query($con,$query);
    $response = array();
    if($result){
        $status = 'OK';

    }else {
        $status = 'FAILED';
    }
}else{  
    $status ='FAILED';
}

if(mysqli_connect_errno()){
    echo "Failed to connect ".mysqli_connect_errno();
}

echo json_encode(array("response" => $status));
mysql_close($con)
?>