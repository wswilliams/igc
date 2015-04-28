<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//variavel para ser exibida como retorno da funcao
$ok = "";
// Define uma variável para testar o validador
//$email = $_POST["email"];
if ( isset($_POST["email"])) {
    $email = filter_input(INPUT_POST, 'email');

    
// Define uma função que poderá ser usada para validar e-mails usando regexp
    function validaEmail($email) {
        $conta = "^[a-zA-Z0-9\._-]+@";
        $domino = "[a-zA-Z0-9\._-]+.";
        $extensao = "([a-zA-Z]{2,4})$";
        $pattern = $conta . $domino . $extensao;

        if (ereg($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    }

// Faz a verificação usando a função
    if (validaEmail($email)) {
        
      try{
          require_once ("view/conectar.php");

          $obj = Connection::getInstance();
          
         $busca = mysql_query("SELECT email from newletter where email = '$email'") or die ("Nao foi possivel realizar a busca".mysql_error());

            $reg = mysql_fetch_assoc($busca);

        if(strcasecmp ($email,$reg["email"])== 0){

         $ok="Email já existente no sistema ".$reg["email"];

       }else{
           //1 – Definimos Para quem vai ser enviado o email 
          $para = $email;
          //2 - resgatar o nome digitado no formulário e grava na variavel $nome 
          $assunto="NewsLetter";
          //5 – agora inserimos as codificações corretas e tudo mais. 
          $headers = "Content-Type:text/html; charset=UTF-8"."\r\n"; 
          $headers .= "From: marketing@tapaproducoes.com.br<marketing@tapaproducoes.com.br>"."\r\n"; 
          //Vai ser //mostrado que o email partiu deste email e seguido do nome 
          $headers .= "X-Sender: <marketing@tapaproducoes.com.br>"."\r\n"; 
          //email do servidor //que enviou 
          $headers .= "X-Mailer: PHP v".phpversion()."\n"; $headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\r\n";
          $headers .= "Return-Path: <marketing@tapaproducoes.com.br>"."\r\n"; 
          //caso a msg //seja respondida vai para este email. 
          $headers .= 'Cc: tapaproducoes@tapaproducoes.com.br' . "\r\n";
          $headers .= 'Bcc: tapaproducoes@tapaproducoes.com.br' . "\r\n";
          
          $headers .= "MIME-Version: 1.0"."\r\n"; 
           
         $txt=" ";
         $txt .= "<html>
		<head>
		<title>Bem Vindo!</title>
		</head>
		<body>
		<p align='justif'><a href='http://zeroeum.com.br/tapa/index.php' target='_blank'><img src='http://zeroeum.com.br/tapa/img/tp_home_menu_logo.png' alt='Logo Oficial'/></a></p>
         <br><br>
		Bem vindo!<br>
		<p align='justif'>
           A Tapa Produ&ccedil;&otilde;es agradece seu contato.
           Manteremos voc&ecirc; sempre atualizado sobre novidade e promo&ccedil;&otilde;es.
           Curta Nossas m&iacute;dias sociais e fique antenado de tudo.

           <a href='https://pt-br.facebook.com/tapaproducao' target='_blank'><img src='http://www.studyinfo.com.br/icones/face1.png'/></a>
         	Equipe da Tapa Produ&ccedil;&otilde;es <br>

		</p>


		</body>
		</html>";

         $txt= nl2br($txt);
         
//         $meu_email = "marketing@geracaoparacristo.com";
//         $headers= "From: IGC: ".$meu_email."\r\n";
//         $headers.='Reply-To: '.$meu_email. "\r\n";
//         $headers.='Content-type: text/html; charset=utf-8';
//        mail($email, "NewsLetter",$txt,$headers);

         $resultado=mail($para, $assunto, $txt, $headers); 
        
        if($resultado){
           $ok="Email cadastrado com sucesso! Foi enviado a você uma mensagem de boas vindas";
        }else{
            $ok= 'nao foi possivel enviar o email';
        }
         
        $data = Date("Y-m-d");
        $inse = "INSERT INTO newletter (id,email,data)VALUES ('','$email','$data')";
        $result = mysql_query($inse) or die ("Falha na insercao do membro".mysql_error());
           
//           
//           
//           
//              $data = date("Y-m-d");
//               $inse = "INSERT INTO newletter (id,email,data)VALUES ('','$email','$data')";
//
//		 $result = mysql_query($inse) or die ("Falha na insercao do cliente".mysql_error());
//
//		 $meu_email = "wswilliamssilva938@gmail.com";
//
//        //digite os destinatarios separados por virgula/
//         $destinatarios = $email;//'williams.silva2010@hotmail.com, wswilliamssilva938@gmail.com';
//         //usuario ou nome completo da conta criada em sua hospedagem, como por exemplo teste@seudominio//
//         $usuario = 'wswilliamssilva938@gmail.com';
//         //senha da conta de email acima//
//         $senha = 'homega36alfa';
//         //nome do destinatario no qual receber� a mensagem//
//         $nomeDestinatario = $email;
//
//         //abaixo as veriaveis principais, que devem conter em seu formulario//
//         $nomeRemetente = 'studyinfo';//$_POST['nomeRemetente'];
//         $resposta = $usuario;//$_POST['email'];
//         $assunto = 'Boas vindas da Study Info';//$_POST['assunto'];
//         $txt=" ";
//         $txt .= "<html>
//		<head>
//		<title>Bem Vindo!</title>
//		</head>
//		<body>
//		<p align='justif'><a href='http://www.studyinfo.com.br' target='_blank'><img src='http://www.studyinfo.com.br/imagens/studyinfo%20banner.jpg' alt='Logo Oficial'/></a></p>
//         <br><br>
//		Bem vindo!<br>
//		<p align='justif'>
//           A Study Info agradece seu contato.
//           Manteremos voc&ecirc; sempre atualizado sobre novidade e promo&ccedil;&otilde;es.
//           Curta Nossas m&iacute;dias sociais e fique antenado de tudo.
//
//           <a href='http://www.mgsurf.com.br/icones/facebook2.jpg' target='_blank'><img src='http://www.studyinfo.com.br/icones/face1.png'/></a>
//         	Equipe da Study Info <br>
//
//		</p>
//
//
//		</body>
//		</html>";
//
//         $txt= nl2br($txt);
//
////A PARTIR DAQUI NAO ALTERAR//
//
//         $ass="Cadastro de Email";
//         $dados['me3'][] = '<b>'.$ass.'</b><br>'.$txt;
//
//         $dados['me3'] = '<hr><h4>Mensagem do site</h4>'.implode('<br>', $dados['me3']).'<hr>';
//
//         $dados['email'] = array('usuario' => $usuario, 'senha' => $senha, 'servidor' => 'smtp.'.substr(strstr($usuario, '@'), 1), 'nomeRemetente' => $nomeRemetente, 'nomeDestinatario' => $nomeDestinatario, 'resposta' => $resposta, 'assunto' => $assunto, 'mensagem' => $dados['me3']);
//
//         ini_set('php_flag mail_filter', 0);
//
//         $conexao = fsockopen($dados['email']['servidor'], 587, $errno, $errstr, 10);
//         fgets($conexao, 512);
//
//         $dados['destinatarios'] = explode(',', $destinatarios);
//
//         foreach ($dados['destinatarios'] as $dados['1'])
//
//         {
//
//             $dados['destinatarios']['RCPTTO'][] = '< '.$dados['1'].' >';
//             $dados['destinatarios']['TO'][] = $dados['1'];
//
//         }
//
//         $dados['cabecalho'] = array('EHLO ' => $dados['email']['servidor'], 'AUTH LOGIN', base64_encode($dados['email']['usuario']), base64_encode($dados['email']['senha']), 'MAIL FROM: ' => '< '.$dados['email']['usuario'].' >', 'RCPT TO:' => $dados['destinatarios']['RCPTTO'], 'DATA', 'MIME-Version: ' => '1.0', 'Content-Type: text/html; charset=iso-8859-1', 'Date: ' => date('r',time()), 'From: ' => array($dados['email']['nomeRemetente'].' ' => '< '.$dados['email']['usuario'].' >'), 'To:' => array($dados['email']['nomeDestinatario'].' ' => $dados['destinatarios']['TO']), 'Reply-To: ' => $dados['email']['resposta'],'Subject: ' => $dados['email']['assunto'], 'mensagem' => $dados['email']['mensagem'], 'QUIT');
//
//         foreach ($dados['cabecalho'] as $dados['2'] => $dados['3'])
//
//         {
//
//            if (is_array($dados['3']))
//
//            {
//
//            foreach ($dados['3'] as $dados['4'] => $dados['5'])
//
//            {
//
//                 $dados['4'] = empty($dados['4']) ? '' : $dados['4'];
//                 $dados['5'] = empty($dados['5']) ? '' : $dados['5'];
//
//                 $dados['4'] = is_numeric($dados['4']) ? '' : $dados['4'];
//
//                  if (is_array($dados['5']))
//
//                  {
//
//                    $dados['5'] = "< ".implode(', ', $dados['5'])." >";
//
//                  }
//
//              fwrite($conexao, $dados['2'].$dados['4'].$dados['5']."\r\n", 512).'<br>';
//              fgets($conexao, 512);
//
//            }
//
//        }
//
//         else
//
//         {
//
//           $dados['2'] = empty($dados['2']) ? '' : $dados['2'];
//           $dados['3'] = empty($dados['3']) ? '' : $dados['3'];
//
//           $dados['2'] = is_numeric($dados['2']) ? '' : $dados['2'];
//
//           if ($dados['2'] == 'Subject: ')
//
//           {
//
//             fwrite($conexao, $dados['2'].$dados['3']."\r\n", 512).'<br>';
//             fwrite($conexao, "\r\n", 512).'<br>';
//             fgets($conexao, 512);
//
//           }
//
//            elseif ($dados['2'] == 'mensagem')
//
//            {
//
//               fwrite($conexao, $dados['3']."\r\n.\r\n").'<br>';
//               fgets($conexao);
//
//            }
//
//            else
//
//            {
//
//               fwrite($conexao, $dados['2'].$dados['3']."\r\n", 512).'<br>';
//               fgets($conexao, 512);
//
//            }
//
//         }
//
//        }
//
//        fclose($conexao);

	            

       }

	     mysql_free_result($busca);
             $obj->freebanco();
        
   }catch (Exception $e) {

		   $ok="Erro estamos realizando procedimento administrativo";
	       
   }
        
//        $ret = "E-mail cadastrado com sucesso! Foi enviado a você uma mensagem de boas vindas";
    } else {
        $ok = "E-mail inválido, por favor, inserir um Email válido.\nFormato: xxxx@yyyyy.zzz!";
    }
    
}else{
    $ok="E obrigatorio o preenchimento do campo email";
}
?>
<?php echo $ok; ?>
