<?php

function excluiMembroCelula(){

  if($_COOKIE["nome"]){

    if(isset($_POST["lis"]) && isset($_POST["cod"])){
     $nome = $_POST["lis"];
     $matricula = $_POST["cod"];

     require_once ("control/controle.php");
     
      $obj = controle::getInstance();

      $ret = $obj->excluirMembrodaCelulaControle($nome,$matricula);
      
        if($ret == 1){
            
            header("Location: principal1.php?ok=$ret");
          }else{
           
            header("Location: consultacelula.php?ok=$ret");
          }

     }
     
       
   }else{
         header("Location: Index.php?");
   }

}
excluiMembroCelula();

?>
