<?php

function cadastrar(){
$nome="";
$mat=0;
  if($_COOKIE['nome']){

    if(isset($_POST['matricula']) && isset($_POST['codcelula'])){
     $matricula = $_POST['matricula'];
     $celula = $_POST['codcelula'];
     $pesMatricula =$_POST['matricula'];
     require_once ('control/controle.php');
     require_once ('modelo/objetoMembro.php');
     $membro = new objetoMembro();
     
      $obj = controle::getInstance();
      
      $membro = $obj->incluirMembrosnaCelulaControle($matricula,$celula);
      
        if($membro->getMatricula() > 0){
//            $membro = $obj->pesquisarMembroMatriculaControle($pesMatricula);
            $nome=$membro->getNome();
            $mat = $membro->getMatricula();
//            <input type='hidden' name= 'cod' size='5' maxlength = '20' value = ".$membro->getMatricula()."/>";
          }

     }
     
       
   }else{
         header('Location: ../index.php?');
   }
   echo $nome.";".$mat;
   
}
cadastrar();

?>