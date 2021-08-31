<?php

if (isset($_POST) && !empty($_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msj = $_POST["message"];  

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = "wilsonuribe16@gmail.com";
    $subject = $name." TE HA EMBIADO UN MENSAJE DESDE TU PORTAFOLIO";
    $message = $msj;
    $headers = "From:" . $name;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";

    return ('../index.html');
}


?>