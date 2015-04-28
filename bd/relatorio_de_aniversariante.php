<?php
function relatoriodeAniversariante(){

  if($_COOKIE["nome"]){
?>

<html>
	<head>
		<link href="arquivoIgc.css" rel="stylesheet" type="text/css" />
         <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
		<title>RELATORIO DE ANIVERSARIANTES</title>
	</head>
	<body>



			<div id = "topo">

			 <img src="images/BANER.jpg" width="980" height="130" border="0">
			<div id = "listamenu">
                 <table id = "a" align = "center" width="400">
						<tr><td><a href = "principal1.php"><img src="ICON/b_home.png" width="40" height="30" border="0" title = "PAGINA INICIAL"></a></td>
						<td><a href = "membro.php"><img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro"></a></td>
        			    <td><a href = "celula.php"><img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA"></a></td>
						        <td><a href = "escoladelider.php"><img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres"></a></td>
						        <td><a href = "conta.php"><img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS"></a></td>
						        <td><a href = "carta.php"><img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida"></a></td>
						        <td><a href = "Index.php"><img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR"></a></td>

					</table>
				</div>


				<?php

					$ach = false;
                    $mesEscolhido = 0;

                    include("conector.php");
                     include ("conexao.php");
                     
                 try{
                    
                  if(isset($_POST["esco"])){
                  
                  $obj = Connection::getInstance();
					$busca = mysql_query("Select Nome,DataNascimento1 from membros where Status = 'ATIVO' order by Nome") or die ("Nao foi possivel realizar a busca".mysql_error());

				      $mesEscolhido = $_POST["esco"];

                     $mes_hoje = 1;
                     $dia_hoje = 1;
                   ?>
                     <div id = "aniveHoje">

                          <form action = "consultabanco.php" method = "post" >

							<table>
                               <tr><td><b>ANIVERSARIANTES DO MÊS <?php echo $mesEscolhido;?></b> <br /></td></tr>
                               
                               <tr><td><select size="10" name= "nome" >
                   <?php
                   
					while($reg = mysql_fetch_assoc($busca)){


                         if(date($reg["DataNascimento1"])){

						    $hoje_ab = date($reg["DataNascimento1"]);
						   $mes_hoje = $hoje_ab[5].$hoje_ab[6];
						   $dia_hoje = $hoje_ab[8].$hoje_ab[9];

						   $mes_hoje1 = (integer) $mes_hoje;
					       $dia_hoje1 = (integer) $dia_hoje;
                           }

						if ($mes_hoje1 == $mesEscolhido){
							$ach = true;
							?>


                                    <option><?php echo $reg["Nome"]; ?></option>


							<?php

						}
					}
					?>
					</select></td>
					

                      <td><b>CONSULTAR</b><br /><input type="image" src="ICON/icon-36749_150.png" width="40" height="30" border="0" title = "CONSULTAR" ></dt>
                        </tr>
                     </table>
                   </form>
                   
                         </div>
                         
                      <?php
					if(! $ach){
						echo "<h3>Não ha aniversariantes hoje</h3> ";
					}
					
					mysql_free_result($busca);
					$obj->freebanco();
					
                    }else{
                     echo "<h3>Não ha mes escolhido</h3> ".$mesEscolhido;
                    }
                    
                    }catch(Exception $ex){

					 }
					
					?>
					<div id = "data">
					<?php
					//echo "<h2>Hoje dia $dia/$nomemes/$ano as $hora horas $minuto minuto $segundos e segundos</h2>";
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
relatoriodeAniversariante();
?>
