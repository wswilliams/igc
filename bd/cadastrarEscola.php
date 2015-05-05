<?php

function cadastrarEscola() {

   $ok="0";

if (isset($_COOKIE["nome"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetoEscola.php");
        
        $nome =mb_strtoupper($_POST["nome"]);
        $dtinicio = $_POST["dtinicio"];
        $dtfim = $_POST["dtfinal"];
        $escola = new objetoEscola();
        $escola->valida($nome, $dtinicio, $dtfim);
        
        $ret = $control->cadadastrarEscolaControle($escola);
        
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
        }else{
        
            $ok="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Desculpe, não foi possivel realizar a busca
              </div>";
        
        }
        
    
  }else{
         header("Location: ../index.php?");
   }
   
   echo $ok;
  
}

cadastrarEscola();
?>
