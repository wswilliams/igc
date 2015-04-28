<?php

function validaLogin(){
    
    require_once ("control/controle.php");
    $obj= controle::getInstance();
    
    $nome = preg_replace('/[^[:alpha:]_]/', '',$_POST['Login']); 
    $senha = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);
//    $select = $conn->select($nome, $senha);
    
//      $nome = $_POST["Login"];
//      $senha = $_POST["senha"];
      
      $ret = $obj->validarLoginControle($nome,$senha);
//      var_dump($ret); 
      
//        if($ret == 1){   
//                
//        }
//        else if($ret == 2){
//              header("Location: Index.php?ok=2");
//        }else{
//                header("Location: Index.php?ok=3");
//        }
      
        echo $ret;
    }

validaLogin();
?>