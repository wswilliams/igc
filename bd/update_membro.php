
<?php
function updateMembro(){

      if($_COOKIE["nome"]){

	
	require_once ("modelo/objetoMembro.php");
        require_once ("control/controle.php");
    
	$ace = new objetoMembro();

	$ace->valida_update($_POST["matricula"],$_POST["nome"],$_POST["sexo"],$_POST["data"],$_POST["rg"],$_POST["cpf"],$_POST["estadocivil"],
		$_POST["natural"],$_POST["profissao"],$_POST["escola"],$_POST["pai"],$_POST["mae"],$_POST["necessidade"],
		$_POST["fone"],$_POST["filho"],$_POST["formacao"],$_POST["membrasia"],$_POST["funcao"],$_POST["participou"],
		$_POST["trabalhando"],$_POST["viajando"],$_POST["congrega"],$_POST["rua"],$_POST["casa"],$_POST["bairro"],$_POST["status"],$_POST["email"]);
        
        //print $ace->getMatricula();

        $obj = controle::getInstance();
        
        $ret = $obj->updateMembroControle($ace);
        
        if($ret == 1){
            $ret="<div class='alert alert-success' role='alert'>
                   Dados atualizados com sucesso
                   </div>";
        }else if($ret == 3){
             $ret="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 <p><>No momento nao podemos realizar esse procedimento</p>
              </div>";
        }else{
              $ret="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Erro, não foi possivel alterar os dados membro
              </div>";
        }
        
        echo $ret;
	
   }

}
updateMembro();

?>
