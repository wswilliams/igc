<html>
	<head>
		<link href="arquivoIgc.css" rel="stylesheet" type="text/css" />
         <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
		<title>Area de Membro</title>
	</head>
	<body>

			<div id = "topo">

			 <img src="images/BANER.jpg" width="980" height="130" border="0">
			<div id = "listamenu">
					<table id = "a" align = "center" width="400">
						<tr><td><a href = "principal1.php"><img src="ICON/b_home.png" width="40" height="30" border="0" title = "PAGINA INICIAL"></a></td>
        			    <td><a href = "celula.php"><img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "CELULA"></a></td>
						        <td><a href = "escoladelider.php"><img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres"></a></td>
						        <td><a href = "conta.php"><img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "CONTAS"></a></td>
						        <td><a href = "anivesariante.php"><img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes"></a></td>
						        <td><a href = "carta.php"><img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida"></a></td>
						        <td><a href = "Index.php"><img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR"></a></td>

					</table>

				</div>

				<div id = "cunsulta">
                     <?php

                     if($ok = 1){

                            echo("<br><br>");
                            echo("<center><b><h3>Alteração Realizada com sucesso</h3></b></center>");
                            echo("<br>");
                            echo("<center><a href = \"membro.php\"><b><h3>Valtar</h3></b></a></center>");
                   }

                   else{
                          echo("<br><br>");
                          echo("<center><b><h3>Alteração não Realizada</h3></b></center>");
                          echo("<br>");
                          echo("<center><a href = \"membro.php\"><b><h3>Valtar</h3></b></a></center>");
                          }

                      ?>
                   

				</div>

				<div id = "data">
					<?php

					include ("dataatual.php");

					?>
				</div>

			</div>
</body>
</html>

