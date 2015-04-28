
<?php
function cadastroMembro(){

//      if(isset($_COOKIE["nome"])){

        require_once ("control/controle.php");
        $objControle = controle::getInstance();
        
        require_once ("modelo/objetoMembro.php");
        
        $ace = new objetoMembro();
                
            $ace->valida($_POST["nome"],$_POST["sexo"],$_POST["data"],$_POST["rg"],$_POST["cpf"],$_POST["estadocivil"],
		$_POST["natural"],$_POST["profissao"],$_POST["escola"],$_POST["pai"],$_POST["mae"],$_POST["necessidade"],
		$_POST["fone"],$_POST["filho"],$_POST["formacao"],$_POST["membrasia"],$_POST["funcao"],$_POST["participou"],
		$_POST["trabalhando"],$_POST["viajando"],$_POST["congrega"],$_POST["rua"],$_POST["casa"],$_POST["bairro"],$_POST["email"],$_POST["lider"]);
                
          $ret = $objControle->cadadastrarMembroControle($ace);
//           header("Location: cadastramembro.php?ok=$ok");
          if($ret == 0){
            $ret="<div class='alert alert-success' role='alert'>
                   Parabens, cadastro realizado com sucesso
                   </div>";
        }else if($ret == 1){
             $ret="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Desculpe, membro já é cadastro no sistema
              </div>";
        }else{
              $ret="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Erro, não foi possivel cadastrar o membro
              </div>";
        }
           echo $ret;
           
//	}else{
//         header("Location: Index.php?");
//   }

}
cadastroMembro();

?>
