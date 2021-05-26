<?php

if(isset($_POST(['email']) && !empty($_POST['email'])){


$nome=addslashes($_POST['name']))
$email=addslashes($_POST['email']))
$mensagem=addslashes($_POST['message']))

$to ="nsoliveira_13@hotmail.com";
$subject ="nsoliveira_13@hotmail.com ";
$body = "Nome:" .$nome. "\r\n".
        "email:" .$email. "\r\n".
        "mensagem" .$mensagem;

$header = "from:nsoliveira_13@hotmail.com". "\r\n".
        ."replay-to:" .$email. "\r\n".
        ."x=Mailer:PHP/" .phpversion();


if(mail($to,$subject,$body,$header)){
    echo("email enviado com sucesso!");
}else{
    echo("email não enviado!");

}

}
?>