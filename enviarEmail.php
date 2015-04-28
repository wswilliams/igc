<?php 
//1 – Definimos Para quem vai ser enviado o email 
$para = $_POST['email'];
//2 - resgatar o nome digitado no formulário e grava na variavel $nome 
$nome = $_POST['nome']; // 3 - resgatar o assunto digitado no formulário e grava na variavel //$assunto 
$assunto = $_POST['assunto']; 
//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>Nome: </strong>".$nome; 
$mensagem .= "<br> <strong>Mensagem: </strong>".$_POST['mensagem']; 
//5 – agora inserimos as codificações corretas e tudo mais. 
$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: marketingzeroeum@gmail.com<marketingzeroeum@gmail.com>\n"; 
//Vai ser //mostrado que o email partiu deste email e seguido do nome 
$headers .= "X-Sender: <marketingzeroeum@gmail.com>\n"; 
//email do servidor //que enviou 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; $headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
$headers .= "Return-Path: <marketingzeroeum@gmail.com>\n"; 
//caso a msg //seja respondida vai para este email. 
$headers .= "MIME-Version: 1.0\n"; 
$ok=mail($para, $assunto, $mensagem, $headers); 
if($ok){
    echo 'Enviado com sucesso';
}else{
    echo 'nao foi possivel enviar o email';
}
//função que faz o envio do email. 
?>

