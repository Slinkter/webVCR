<?php

require "connect.php";

$uid = AVzQ7F13iXYHiTJs8rDsbLc3fqt1;

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
 