<?php
// Check for empty fields


if(empty($_POST['nome'])      ||
   empty($_POST['email'])     ||
   empty($_POST['telefone'])     ||
   empty($_POST['msg'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$nome = strip_tags(htmlspecialchars($_POST['nome']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$telefone = strip_tags(htmlspecialchars($_POST['telefone']));
$message = strip_tags(htmlspecialchars($_POST['mensagem']));

// Create the email and send the message
$to = 'mhf@mhf.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato:  $name";
$email_body = "Você recebeu uma mensagem através do seu site\n\n"."Detalhes:\n\nNome: $nome\n\nEmail: $email_address\n\nTelefone: $telefone\n\nMessagem:\n$mensagem";
$headers = "From: mhf@mhf.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
