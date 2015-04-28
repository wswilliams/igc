	<?php
function cadastroConta(){

  if($_COOKIE["nome"]){


	$mensagem = false;

	include("conector.php");
     include ("conexao.php");
		
	$ace = new Conta;
	if(isset($_POST["nome"])){
	
	
	 $ace->cadastrar_conta($_POST["nome"]);

		$nome = $ace->getNomeConta();
		
     $obj = Connection::getInstance();
		
		$inse = "INSERT INTO contas (cod_Conta,nome_Conta)VALUES('','$nome')";
		
		
		$result = mysql_query($inse) or die ("Falha na insercao da conta".mysql_error());

        if ($result)
          {

            $ok = 1;
            header("Location: exibe_memssagem_conta.php?ok=$ok");
          }else{

           $ok = 2;
            header("Location: exibe_memssagem_conta.php?ok=$ok");
          }

		$obj->freebanco();
			
	}


   }else{
         header("Location: Index.php?");
   }

}
cadastroConta();
?>

