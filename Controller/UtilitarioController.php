<?php

function EnviarCorreo($destinatario, $asunto, $cuerpo)
{
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';

    $mail -> IsSMTP();
    $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com     
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587; // 465 // 25                               
    $mail -> SMTPAuth = true;
    $mail -> Username = 'claseProgra3.5@outlook.com';               
    $mail -> Password = 'progra3.5';                                
    
    $mail -> SetFrom('claseProgra3.5@outlook.com', "Banco");
    $mail -> Subject = $asunto;
    $mail -> MsgHTML($cuerpo);   
    $mail -> AddAddress($destinatario, 'Usuario');

    $mail -> send();
}

if(isset($_POST["btnCerrar"]))
{
    if (session_status() != PHP_SESSION_NONE)
        session_destroy();

    header("Location: ..\index.php");
}

?>