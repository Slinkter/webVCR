<?php
$user_name = "userArsi";
$password = "MUNDOarsi20";
$server = "11.78.0.27"
$db_name = "dbContactsArsi";

$con = mysql_connect($server,$user_name,$password,$db_name);
if(con){
    $Name = $_POST['name']
    $query = "insert into contacts(name) values ('"$Name"')";
    $result = mysqli_query($con,$query);
    $response = array();
    if($result){
        $status = 'OK';

    }else {
        $status = 'FAILED';
    }
}


?>