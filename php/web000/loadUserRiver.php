<?php

require "connect.php";

$uid = $_GET["uid"];

$query = "SELECT * FROM login_river; ";

if(mysqli_query($conn,$query)){

    $firstname = 'firstname';
    $lastname = 'lastname';
    $dni = 'dni';
    $correo = 'correo';
    $numphone = 'numphone'; 
    
  
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5].' '.$row[6].' '.$row[7].' ' ;
        echo '<br/>';    
    }  
    
    $response['success'] = true;
    $response['message']= "Successfuly";
}else {
        $response['success'] = false;
        $response['message']= "Failure!";
 }


echo json_encode($response);
mysql_close($conn);
?>
 