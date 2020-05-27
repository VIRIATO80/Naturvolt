<?php 
if(isset($_POST['submit'])){
    $to = "javi.lindo@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Mensaje web recibido";
    $subject2 = "Gracias por su interés en Naturvolt";
    $message = $first_name . "  envió este mensaje:" . "\n\n" . $_POST['message'] . "\n\n" . "Teléfono:" . $_POST['phone'];
    $message2 = "Hemos recibido su mensaje.\n\n Pronto nos pondremos en contacto con usted.\n\nSaludos cordiales.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>