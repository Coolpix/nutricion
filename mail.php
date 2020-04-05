<?php
if(isset($_POST['submit'])){
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $to = "info@nutricionenmovimiento.es";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $topic = $_POST['topic'];
    $content = $_POST['message'];

    $subject = "Info Web";

    $message = "Detalles del mensaje.\n\n";
    $message .= "Nombre: ".clean_string($name)."\n";
    $message .= "Email: ".clean_string($email)."\n";
    $message .= "Teléfono: ".clean_string($phone)."\n";
    $message .= "Asunto: ".clean_string($topic)."\n";
    $message .= "Mensaje: ".clean_string($content)."\n";

    $headers = "From:" . $to;

    mail($to,$subject,$message,$headers);
    echo "Mensaje enviado correctamente";
    header( "Location: http://nutricionenmovimiento.es/" );
   }
?>

