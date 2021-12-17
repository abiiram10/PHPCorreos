<?php
    require_once ("PHPMailer/clsMail.php");

    $mailSend = new clsMail();

    $bodyHTML = '
        <h2>Saludos, y suscribanse</h2>
        ñ Ñ, día
        <br>
        <br>
        <br>
        Mensaje final';
    
    $enviado =  $mailSend->metEnviar("Youtube.com.mx","Correos Youtube","ytabiramlopez@gmail.com","Asunto X", $bodyHTML);

    if($enviado){
        echo ("Enviado");
    }else {
        echo ("No se pudo enviar el correo");
    }

?>