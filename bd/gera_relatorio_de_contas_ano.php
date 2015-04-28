<?php
function geraRelatoriodeConta(){

  if($_COOKIE["nome"]){
?>

<html>
<head>
	<title>Relatorio de Contas do Ano</title>
	<meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	<link href="arquivoIgc.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
</head>

 <body>

   <div id = "topo">

         	<div id= "lista">
			<!--- se a busca ok imprimi os dados do membro-->


				       <img src="images/BANER.jpg" width="980" height="130" border="0">

				       <div id = "listamenu">
					        <table id = "a" align = "center" width="400">
       						    <tr><td><a href = "membro.php"><img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro"></a></td>
			       			    <td><a href = "celula.php"><img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA"></a></td>
						        <td><a href = "escoladelider.php"><img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres"></a></td>
						        <td><a href = "conta.php"><img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS"></a></td>
						        <td><a href = "anivesariante.php"><img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes"></a></td>
						        <td><a href = "carta.php"><img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida"></a></td>
						        <td><a href = "Index.php"><img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR"></a></td>
					         </table>
				          </div>

            </div>

          <?php

					$valor_total = 0;
					$achou = 0; //variavel global para verificação

               if(isset($_POST["ano"])){

                include ("conector.php");
                include ("conexao.php");
                   $obj = Connection::getInstance();

                $relato = $_POST["ano"];
                $busca = mysql_query("Select  c.nome_Conta,p.Data,p.Descricao,p.valor_Conta,u.usa_Login from contas c join pagar_contas p on cod_Conta = cod_ContaP join usuarios u on codigo = cod_Usuario order by c.nome_Conta") or die ("Nao foi possivel realizar a busca".mysql_error());

			?>

                         <br><br><br><br>
                        <table  align = "center" border = "1" width="900">
                        <tr><td colspan = "5" align = "center"><b>RELATORIO DE TODAS AS CONTAS PAGA DO ANO <?php echo $relato; ?> </b></td></tr>
                        <tr><td><b>CONTA</b></td><td><b>DATA</b></td><td><b>DESCRICAO</b></td><td><b>VALOR</b></td><td><b>USUARIO</b></td></tr>
    	             <?php

                     $ano_hoje1 = 0;

					while($reg1 = mysql_fetch_assoc($busca)){


                         if(date($reg1["Data"])){

						   $hoje_ab = date($reg1["Data"]);
						   $ano_hoje = $hoje_ab[0].$hoje_ab[1].$hoje_ab[2].$hoje_ab[3];

						   $ano_hoje1 = (integer) $ano_hoje;

                           }

						if ($ano_hoje1 == $relato){

							$achou = 1;

							?>


                                            <tr><td><?php print $reg1['nome_Conta']; ?></td>
                                                  <td><?php echo date($reg1['Data']); ?></td>
                                                  <td><?php echo $reg1['Descricao']; ?> </td>
                                                  <td><?php echo $reg1['valor_Conta'];?></td>
                                                  <td><?php echo $reg1['usa_Login']; ?> </td>

								            </tr>


                                      <?php
                                       $valor_total += $reg1['valor_Conta'];

                         }

                        }
                        ?>
                          <tr><td><b>VALOR TOTAL</b></td><td colspan = "4" ><FONT COLOR=BLUE><?php echo "R$ ".$valor_total; ?> </font></td></tr>
                        </table>

                        <?php

						mysql_free_result($busca); //limpa o resultado da pesquisa libera a memoria ocupado

						$obj->freebanco(); // fecha a conecção com o banco

                    }else {
                         echo "NÃO HÁ CONTA PAGA NESTE MÊS ".$achou."<br/>";

                    }
                   	?>

                  <div id = "data3">

					<?php

						include ("dataatual.php");
					?>
				</div>

	</div>


	</body>
 </html>
 
 <?php

   }else{
         header("Location: Index.php?");
   }

}
geraRelatoriodeConta();
?>
