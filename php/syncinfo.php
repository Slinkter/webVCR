<?php
$user_name = "userArsi";
$password = "MUNDOarsi20";
$server = "localhost";
$db_name = "dbContactsArsi";

$con = mysqli_connect($server,$user_name,$password,$db_name);


if(mysqli_connect_errno()){
    echo "Failed to connect ".mysqli_connect_errno();
}

if(mysqli_ping($con)){

    echo "Connection OK !!";

    $Name = $_POST['name'];
    //INSERT INTO `contacts` (`id`, `name`) VALUES (NULL, 'jhonatan');
    $query = "INSERT INTO `contacts` (`id`, `name`) VALUES ('.NULL.','".$Name."')";
    $result = mysqli_query($con,$query);
    
    if($result){
        $status = 'OK';

    }else {
        $status = 'FAILED db';
    }
}else{
    echo "Error : ".mysqli_error($con);
    $status ='FAILED con';
}

echo json_encode(array("response" => $status));
mysql_close($con)
?>