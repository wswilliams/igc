<?php

function cadastracelula() {

   $ok="0";

if (isset($_COOKIE["nome"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetocelula.php");
        
        $nome = $_POST["nome"];
        $lider = $_POST["lider"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $casa = $_POST["casa"];
        $dia = $_POST["dia"];
	$estilo = $_POST["estilo"];
        $status="ATIVA";
        
        $celula =new objetocelula();
        $celula->valida($nome, $lider, $rua, $casa, $bairro, $dia,$estilo, $status);
        
        $ret = $control->cadadastrarCelulaControle($celula);
        
        if($ret == 0){
            
        $ok="<div class='alert alert-success' role='alert'>
                   Parabens, cadastro realizado com sucesso
                   </div>";
        }else if($ret == 1){
            $ok="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Desculpe, Celula j&aacute; Existente no Sistema
              </div>";
        }
        
    
  }else{
         header("Location: ../index.php?");
   }
   
   echo $ok;
  
}

cadastracelula();
?>
