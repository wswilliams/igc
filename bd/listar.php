<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function listarMembro(){
    
    require_once ("control/controle.php");
    $obj = controle::getInstance();
    require_once ("modelo/objetoMembro.php");
    $membro = objetoMembro::getInstance();
    
    $lista = array();
    $lista =$obj->listadeMembrodaControle("anny");
    
    $chave = array_keys($lista);
    //echo $chave;
    
    for($i=0; $i<sizeof($chave); $i++) {
        $indice = $chave[$i];
        echo $lista[$indice]->getMatricula()."<br>".
            $lista[$indice]->getNome()."<br>";
    }
     
     
}
listarMembro();
?>
