	<?php

	include("conector.php");
    include ("conexao.php");

	$ace = new Conta;
     if(isset($_POST["usu"])&& isset($_POST["cod"]) && isset($_POST["desc"]) && isset($_POST["valor"])&& isset($_POST["dat"])){


        		$ace->cadastra($_POST["usu"],$_POST["cod"],$_POST["dat"],$_POST["desc"],$_POST["valor"]);

                $usu = $ace->getCodigoUsuario(); $codigo = $ace->getCodigo(); $data = $ace->getData(); $desc = $ace->getDesc(); $valor = $ace->getValor();

           $obj = Connection::getInstance();

               $data_pagamento = date($data);

		      $inse = "INSERT INTO pagar_contas (cod_ContaP,cod_Usuario,Data,Descricao,valor_Conta)VALUES('$usu','$codigo','$data_pagamento','$desc','$valor')";

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

		?>
