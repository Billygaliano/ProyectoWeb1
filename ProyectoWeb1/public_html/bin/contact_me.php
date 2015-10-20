<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])             ||
   empty($_POST['apellido'])            ||
   empty($_POST['dni'])	||
        
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$apellido= $_POST['apellido'];
$dni=$_POST['dni'];
	
// create email body and send it	
$to = 'rubenmena93@hotmail.es'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Solicitud Nuevo Socio:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Has recibido una nueva solicitud para socios.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nApellido: $apellido\n\nDNI: $dni\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>