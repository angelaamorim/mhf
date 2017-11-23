<?php  
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $emailMhf = "angelatca3@gmail.com"; 
    $siteaddress ="http://www.mhf.com.br"; 
    $sitename = "MHF Fomento LTDA."; 
    
    /*$mailheaders = "From: <$email> \n";
    $mailheaders .= "Reply-To: <$email>\n\n";
    $mailheaders2 = "From: <$adminaddress> \n";
    $mailheaders2 .= "Reply-To: <$adminaddress>\n\n";*/
    $headersAdmin = 'From: '.$email. "\r\n" .
    'Reply-To:'.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    mail ("$emailMhf","Contato do seu site", 
        "Um visitante do site $sitename deixou os seguintes dados:\n
        Nome: $nome 
        E-mail: $email\n
        Telefone: $telefone\n
        Mensagem\n
        ------------------------------
        $msg
        
        ------------------------------\n
        ","$headersAdmin"); 
    
    mail("$email","Obrigado por visitar o site $sitename", 
        "Olá $nome,\n
        Obrigado pela visita ao site $sitename!
        Seu contato sera dentro em breve atendido! Em caso de Reserva dentro em breve um de nossos atendentes irá entrar em contato com voce.\n
        Atenciosamente,\n
        $sitename\n
        $siteaddress","$mailheaders2"); 
    echo("Mensagem Enviada com sucesso!")*/
?>

