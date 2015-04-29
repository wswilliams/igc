<?php

function excluiMembroCelula(){
$ret=0;
  if($_COOKIE["nome"]){

    if(isset($_POST["lis"]) && isset($_POST["codcelulaExcluir"])){
     $matricula = $_POST["lis"];
     $codCelula = $_POST["codcelulaExcluir"];
     $nomeMembro=$_POST["nomeMembro"];

     require_once ("control/controle.php");
     
      $obj = controle::getInstance();

      $ret = $obj->excluirMembrodaCelulaControle($codCelula,$matricula);
      
        if($ret == 1){
          $ret=$nomeMembro.";".$matricula;
          }
          
     }
     
       
   }else{
         header("Location: ../index.php?");
   }
   echo $ret;
}
excluiMembroCelula();

?>
