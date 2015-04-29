<?php

function excluiMembroCelula(){
$ret=0;
  if($_COOKIE["nome"]){

    if(isset($_POST["list1"]) && isset($_POST["codcelulaExcluir"])){
     $matricula = $_POST["list1"];
     $codCelula = $_POST["codcelulaExcluir"];

     require_once ("control/controle.php");
     require_once ("modelo/objetoMembro.php");
     $objMembro = new objetoMembro();
     
      $obj = controle::getInstance();

      $objMembro = $obj->excluirMembrodaCelulaControle($codCelula,$matricula);
      
        if($objMembro->getMatricula() > 0){
          $ret=$objMembro->getNome().";".$objMembro->getMatricula();
//            $ret=$matricula.";".$codCelula;
          }
          
     }
     
       
   }else{
         header("Location: ../index.php?");
   }
   echo $ret;
}
excluiMembroCelula();

?>
