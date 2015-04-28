<?php

function cadastracelula() {

   $ok="0";

if (isset($_COOKIE["nome"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetocelula.php");
        
        $nome = mb_strtoupper($_POST["nome"]);
        $lider = $_POST["lider"];
        $bairro = mb_strtoupper($_POST["bairro"]);
        $rua = mb_strtoupper($_POST["rua"]);
        $casa = mb_strtoupper($_POST["casa"]);
        $dia = mb_strtoupper($_POST["dia"]);
        $status="ATIVA";
        
        $celula =new objetocelula();
        $celula->valida($nome, $lider, $rua, $casa, $bairro, $dia, $status);
        
        $ret = $control->cadadastrarCelulaControle($celula);
        
        if($ret == 0){
            
        $ok="<div class='alert alert-success' role='alert'>
                   Parabens, cadastro realizado com sucesso
                   </div>";
        }else if($ret == 1){{
            $ok="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Desculpe, Celula j&aacute; Existente no Sistema
              </div>";
        }
        
    } else {
        $ok="<div class='alert alert-danger' role='alert'>
        <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
        <span class='sr-only'>Error:</span>
         Usuario nao esta logado
      </div>";
    }
    echo $ok;  
  }else{
         header("Location: ../index.php?");
   }
  
}

cadastracelula();
?>
