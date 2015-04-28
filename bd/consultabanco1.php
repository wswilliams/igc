<?php
function consultaBanco1(){

  if($_COOKIE["nome"]){
?>

<html>
<head>
	<title>Area de Membro</title>
	<meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	<link href="arquivo.css" rel="stylesheet" type="text/css" />
	 <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
	 
	<style type="text/css">
			<!--
			body{
				 background-image: url("images/Vista.jpg");
				 background-attachment: fixed;
				}

			-->
		</style>
</head>

 <body>
	<div id="corpo">
	
			<div id="central">
					<?php
						list ($widht, $hiedht, $type, $attr) = getimagesize("images/PLACA DA IGREJA.jpg");
						echo "<img src = \"images/PLACA DA IGREJA.jpg\" width = 980 align= center $attr alt = \"getimagesize() example \" />";
						
					?>
						
			</div>
<?php

		  
          include ("conexao.php");
			
      $obj = Connection::getInstance();
			$busca = mysql_query("Select *from cadastro") or die ("Nao foi possivel realizar a busca".mysql_error());		
			
			
			
					while($reg = mysql_fetch_assoc($busca))
					{
					  
?>
					    <table align = "center" >
							<tr><td><?php echo "<br><b>Nome: </b>".$reg["Id_nome"]; ?></td><td><?php echo $reg["Id_dia"]; ?></td>
							<td><?php echo $reg["Id_mês"]; ?></td></tr>
								
						</table>		
			<?php	
					}
			
				mysql_free_result($busca);
			  
				$obj->freebanco();
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
consultaBanco1();
?>
