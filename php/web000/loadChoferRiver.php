<?php
require "connect.php";
$query = "SELECT * FROM choferRiver ; ";
if(mysqli_query($conn,$query)){

    $id = 'id';
    $firstname = 'nameChofer';
    $lastname = 'lastChofer';
    $dni = 'dniChofer';
    $correo = 'brevete';
    $numphone = 'numphone'; 

    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){

        $response[$firstname] = $row[1];
        $response[$lastname]= $row[2];
        $response[$dni] = $row[3];
        $response[$correo]= $row[4];
        $response[$numphone]= $row[5];
        $List[]=$response;
    }  
    
}else {
    $response['success'] = false;
    $response['message']= "Failure!";
 }

echo json_encode($List);
mysql_close($conn);
?>
 