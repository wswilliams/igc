<?php
function consultaCelulaEspecifica(){

  if($_COOKIE["nome"]){
?>

<html>
	<head>
        <meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	    <link href="arquivoIgc.css" rel="stylesheet" type="text/css" />
	     <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
	     
		<title>Area de Celula</title>
	</head>
	<body>


     <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>

                <div class = "corpo_membro">
                    
                 <div class="lista_de_membros">
                    
   <?php
		
            require_once ("conexao.php");
		
	    $y2 = $_POST["nome"];

             $obj = Connection::getInstance();

            $busca = mysql_query("Select Codigo,NomeCelula, Lider from celulas where  NomeCelula like '%$y2%'") or die ("Nao foi possivel realizar a busca".mysql_error());
            
   ?>
        <br><br><br><br>
        
        <form action = "consultacelula.php" method = "post" >
             <table  align = "center" border = "1" width="100%">
                <tr>
                  <td colspan = "4" align = "center"><b>CELULA ENCONTRADA</b>
                  </td>
                </tr>
                <tr>
                    <td>
                        <b>Codigo</b>
                    </td>
                    <td><b>Nome da Celula</b>
                    </td>
                    <td><b>Nome do Lider</b></td>
                    <td>
                        <b>Editar</b>
                    </td>
            <?php
		$reg = mysql_fetch_assoc($busca);
                
                if(strcasecmp ($reg["NomeCelula"],"")==0){
		
                    header("Location: celula.php?ok=1");
                    
                }else{
		?>
		   <tr>
                       <td>
                           <input type="hidden" name= "cod" size="10" maxlength = "90" VALUE = "<?php print $reg['Codigo']; ?>" />
                            <?php print $reg['Codigo']; ?>
                       </td>
                     <td>
                         <input type="hidden" name= "nome" size="50" maxlength = "90" VALUE = "<?php print $reg['NomeCelula']; ?>"/>
                         <?php print $reg['NomeCelula']; ?>
                     </td>
                     <td >
                         <?php echo $reg["Lider"]; ?>
                     </td>
                      <td>
                         <input type="image" src="ICON/red-35780_150.png" width="30" height="20" border="0" title = "CONSULTAR" >
                      </td>
                   </tr>
		   <br>
		<?php
		  }
              ?>
			</table>
           </form>
				
				<?php
				mysql_free_result($busca);
				$obj->freebanco();
				
                                ?>
			</div>
               </div>
         </div>
	</body>
</html>

<?php

   }else{
         header("Location: Index.php?");
   }

}
consultaCelulaEspecifica();
?>
