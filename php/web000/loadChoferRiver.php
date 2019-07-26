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
    
    $json = array();

    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){

        $response[$firstname] = $row[1];
        $response[$lastname]= $row[2];
        $response[$dni] = $row[3];
        $response[$correo]= $row[4];
        $response[$numphone]= $row[5];

        //$List[]=$response;
        $json['ListaChofer'][] = $row; 
    }  
     
    $json['success'] = true;
    $json['message']= "Successfuly";
  

}else {
    $response['success'] = false;
    $response['message']= "Failure!";
 }


//echo json_encode($response);
//echo json_encode($List);
echo json_encode($json);
mysql_close($conn);
?>
 