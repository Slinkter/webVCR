<?php


$form_name = $_POST["form_name"];
$form_email = $_POST["form_email"];
$form_tel = $_POST["form_tel"];
$form_msj = $_POST["form_msj"];

$secret = $_POST["secret"];
$response = $_POST["response"];


$para      = 'juancarlos@vidrieriachaloreyes.com';
$titulo    = 'Correo de Pagina Web';
$mensaje   = 'Nombre : '.$form_name  ."\n".
             'Correo : '.$form_email."\n".   
             'Telefono : '.$form_tel."\n". 
             'Mensaje : '.$form_msj."\n" ;
$cabeceras = 'From: webmaster@vidrieriachaloreyes.com' . "\r\n" .
    'Reply-To: webmaster@vidrieriachaloreyes.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    
mail($para, $titulo, $mensaje, $cabeceras);
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
$verify = file_get_contents($url);

echo $verify;
//header("Location:gracias.html");



?>