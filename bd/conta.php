<?php

function aniversariantes(){
    
$ret = $_GET["ok"];
if($ret == 1){
    header("Location: principal1.php?ok=$ret");
}
 else {
  
  if(isset($_COOKIE["nome"])){

GLOBAL $reg;
GLOBAL $reg1;
GLOBAL $achou;
GLOBAL $achou1;
GLOBAL $obj;
GLOBAL $busca;
GLOBAL $busca1;
GLOBAL $cont;
 $ai = "";

if(isset($_POST["cont"])){

 $ai = $_POST["cont"];
 }

        include ("conector.php");
        include ("conexao.php");
           $obj = Connection::getInstance();
        $busca = mysql_query("Select nome_Conta from contas") or die ("Nao foi possivel realizar a busca".mysql_error());
        $busca1 = mysql_query("Select * from contas where nome_Conta = '$ai'") or die ("Nao foi possivel realizar a busca".mysql_error());


?>
<html>
	<head>
		<link href="arquivoIgc.css" rel="stylesheet" type="text/css" />	
         <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
         
		<title>Area de Conta</title>
		
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
						        <td><a href = "anivesariante.php"><img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes"></a></td>
						        <td><a href = "carta.php"><img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Carta de Saida"></a></td>
						        <td><a href = "Index.php"><img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "SAIR"></a></td>

					</table>
				</div>
				
				
				
				<!--<h3><a href = "consultabanco1.php" target ="_blink">Visualise � Rela��o de Nome dos Membros da IGC </h3></a>-->
				
				<div id = "dados">

                 <form action = "pagar_conta.php" method = "post" >

					<table border = "0">
					
					<form action = "cadastroconta.php" method = "post" >
					
                        <tr><td><b>CADASTRAR UMA NOVA CONTA</b></td></tr>
                        <?php
                             if(isset($busca1) && isset($ai)){
                                 $achou1 = true;
                                 $reg1 = mysql_fetch_assoc($busca1);

                        ?>
                        <tr><td>Nome da Conta<br /><input type='text' name='nome' value = "<?php echo $reg1['nome_Conta']; ?>" maxlength = "70" size = "50"/></td></tr>
						<tr><td>Codigo <b>"Preenchimento Automatico"</b><br /><input type='text' name='cod' value = "<?php echo $reg1['cod_Conta']; ?>" maxlength = "20" size = "30"/></td></tr>
                         <?php
                         }
                         else{
                             echo "isso e um teste";

                         ?>
						<tr><td>Nome da Conta<br /><input type='text' name='nome' maxlength = "70" size = "50"/></td></tr>
						<tr><td>Codigo <b>"Preenchimento Automatico"</b><br /><input type='text' name='desc' maxlength = "20" size = "30"/></td></tr>
                         <?php
                         }
                         ?>
						<tr><td><input type='submit' name="Cadastra" value="Cadastrar"></td></tr>

                        </form>
                      </table>


                     <BR><BR>
					<table align = "left">
                        <tr><td><B>EFETUAR PAGAMENTO</B></td></tr>
						<tr><td colspan = "2">Descri��o da Conta<br /><input type='text' name='desc' maxlength = "70" size = "50"/></td></tr>
						<tr><td>Valor "5.05"<br /><input type='text' name='valor' maxlength = "50"/></td><td>Data "2013-01-21"<br /><input type='text' name='dat' maxlength = "10"/></td></tr>
						<tr><td>NUMERO DO USUARIO<br /><input type='text' name='usu' maxlength = "20" size = "25"/></td></tr>
						<td><input type='submit' name="pagar" value="PARGAR CONTA"></td></tr>
					</table>

				</form>
			<div id = "contas">
					<form action = "conta.php" method = "post">
                             <?php
                                   if ($cont != ""){
                                       $chou1 = 1;

                                   }
                                   
                             ?>
					  <table>
                         <tr>
					      <td><input type="image" src="ICON/computer-31182_150.png" width="40" height="30" border="0" title = "INSERIR CONTA" ></td>
					      </tr>
					   </table>

					
					<form action = "conta.php" method = "post">

					  <table>
                         <tr>
                         <td>
					     <select name= 'cont' size="10">
                            <?php
                                 
                                 while($reg = mysql_fetch_assoc($busca)){
                            ?>
                                 <option VALUE ="<?php echo $reg['nome_Conta']; ?>"><?php echo $reg['nome_Conta']; ?></option>
                                 <?php

                                }
                                if($reg != ""){
                                $achou = true;
                                }
                                 else{
                                 ?>
                                 <option></option>
                                 <?php
                                 }
                                 ?>
                         </select></td><TR>

                         <tr><td colspan = "2"><input type='submit' name='buscar'value = "Buscar Todas" maxlength = "50"/></td></tr>
                      </table>
					</div>
				    </form>
				</form>

				</div>

                   <form action = "gera_relatorio_de_contas.php" method = "post">
                     <table align = "center">
                         <tr><td>GERA RELATORIO DO M�S <br /><input type='text' name='relat' maxlength = "50" size="30"/></dt>
					        <td><input type="image" src="ICON/index.gif" width="40" height="30" border="0" title = "RELATORIO DE CONTAS PAGAS" /></td>
					        
					      </tr>
					  </table>
                 </form>
                 
                 <form action = "gera_relatorio_de_contas_ano.php" method = "post">
                     <table align = "center">
                         <tr><td>GERA RELATORIO DO ANO <br /><input type='text' name='ano' maxlength = "50" size="30"/></dt>
					        <td><input type="image" src="ICON/index.gif" width="40" height="30" border="0" title = "RELATORIO DE CONTAS PAGAS" /></td>

					      </tr>
					  </table>
                 </form>
			</div>
			
            <?php
                 if($achou){
                   	mysql_free_result($busca); //limpa o resultado da pesquisa libera a memoria ocupado
			        $obj->freebanco(); // fecha a conec��o com o banco

                 }
                 if($achou1){
                   	mysql_free_result($busca1); //limpa o resultado da pesquisa libera a memoria ocupado
			        $obj->freebanco(); // fecha a conec��o com o banco

                 }

            ?>
</body>
</html>
<?php

 }else{
         header("Location: Index.php?");
   }

}
  
}
aniversariantes();
?>
