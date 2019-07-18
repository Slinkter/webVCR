<?php

require "connect.php";

$uid = $_GET["uid"];

$query = "SELECT * FROM login_river where uid = '$uid'; ";

if(mysqli_query($conn,$query)){

    $firstname = 'firstname';
    $lastname = 'lastname';
    $dni = 'dni';
    $correo = 'correo';
    $numphone = 'numphone'; 
    
  
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){

        $response[$firstname] = $row[1];
        $response[$lastname]= $row[2];
        $response[$dni] = $row[3];
        $response[$correo]= $row[4];
        $response[$numphone]= $row[5];
         
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
 