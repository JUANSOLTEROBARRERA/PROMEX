<?php
$para      = 'banacastle@gmail.com';
$titulo    = 'Prueba';
$mensaje   = 'Hola';
$cabeceras = 'From: anbecastillole@ittepic.edu.mx' . "\r\n" .
    'Reply-To: anbecastillole@ittepic.edu.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>