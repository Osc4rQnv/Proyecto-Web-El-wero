<?php
    //get data from form  
$name = $_POST['name1'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "18040431@itdurango.edu.mx";
$subject = "Correo de el sitio web MINISUPER EL GUERO";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@elwero.com.mx" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:gracie.php");
?>