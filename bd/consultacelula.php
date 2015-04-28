<?php
function ConsultaCelula(){

  if($_COOKIE["nome"]){
?>

<html>
<head>
	<title>Area de Celula </title>
	<meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	<link href="arquivoIgc.css" rel="stylesheet" type="text/css" />
     <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
        <script type="text/javascript">

        function mudar_cor_over(celula){
        celula.style.backgroundColor="#D6E5EB"
        }
         function mudar_cor_out(celula){
          celula.style.backgroundColor="#E0EEEE"
          }
        </script>

</head>

 <body>

<?php
	
      require_once ("control/controle.php");
      $obj = controle::getInstance();
      
      require_once ("modelo/objetocelula.php");
      $celula = new objetocelula();
      
      require_once ("modelo/objetoMembro.php");
      $membro = new objetoMembro();
      $membro1 = new objetoMembro();
      
      $lista = array();
      $lista1 = array();
      
      $achou=FALSE;
      
         if(isset($_POST["cod"])){
                  $valor = $_POST["cod"];
                  
                  $celula=$obj->pesquisarCelulaControle($valor);
                  $lista=$obj->listadeMembroda1Controle($valor);
	
        if(isset($_POST["busnome"])){
            $nome=$_POST["busnome"];
            //$busca2 = mysql_query("Select Matricula, Nome from membros where Nome like '%$nome%' and Status = 'ATIVO'") or die ("Nao foi possivel realizar a busca".mysql_error());
            $lista1=$obj->listadeMembrodaControle($nome);
            $achou=TRUE;
        }
        ?>
  <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>
      <br>
         <div class = "corpo_membro">  
             
           <div class="lista_de_membros">
          	  
                <table align = "center" border = "0" onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
			<tr>
                            <td>
                                <b>Nome da Celula</b><br />
                                <input type='text' name='nome' maxlength = "70" size = "70" value = "<?php echo $celula->getNome(); ?>" disabled="true"/>
                            </td>
			    <td>
                                <b>Lider</b><br />
                                <input type='text' name='lider' maxlength = "70" size = "50" value = "<?php echo $celula->getLider(); ?>" disabled="true"/>
                            </td>
                        </tr>
			<tr>
                            <td>
                                <b>Bairro</b><br />
                                <input type='text' name='bairro' maxlength = "50" size = "70" value = "<?php echo $celula->getBairro(); ?>" disabled="true"/>
                            </td>
                            <td>
                                <b>Rua</b><br /><input type='text' name='rua' maxlength = "50" size = "50" value = "<?php echo $celula->getRua(); ?>" disabled="true"/>
                            </td>
                        </tr>
                    </table>
               
			<table align = "center" border = "0" onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
                            <tr>
                                <td>
                                    <b>Numero</b><br />
                                    <input type='text' name='numero' maxlength = "11" size = "50" value = "<?php echo $celula->getCasa(); ?>" disabled="true"/>
                                </td>
				<td>
                                    <b>Dia </b><br />
                                    <select name='dia' disabled="true"><option value = "<?php echo $celula->getDia(); ?>"><?php echo $celula->getDia(); ?></option><option value = "Segunda">Segunda</option><option value = "Teca">Te�a</option><option value = "Quarta">Quarta</option>
					<option value = "Quinta">Quinta</option><option value = "Sexta">Sexta</option><option value = "Sabado">Sabado</option><option value = "Domingo">Domingo</option>
                                    </td>
				<td>
                                    <b>Status </b><br />
                                    <select name='status' disabled="true"><option value = "<?php echo $celula->getStatus(); ?>"><?php echo $celula->getStatus(); ?></option><option value = "ATIVA">ATIVA</option><option value = "INATIVA">INATIVA</option>
                                </td>
				<td>
                                    <b>Numero da Celula</b><br /><input type='text' name='cod' value = "<?php echo $celula->getNumero(); ?>" maxlength = "50" size = "40" disabled="true"/>
                                    <input type='hidden' name='cod' value = "<?php echo $celula->getNumero(); ?>"/>
                                </td>
                             </tr>
                         </table>
               
            
                  <div class="nome_membro">
                      
                      <div class="listademembronacelula">
                            <form action = "exclui_membro_celula.php" method = "post" > 
                             <b>Nomes dos Membros da Celula</b>
                                <br />
                                <select size="10" name="lis" >
                                <?php
                                
                                $chave = array_keys($lista);
                                
                                for ($index = 0; $index < sizeof($chave); $index++) {
                                    
                                    $indice = $chave[$index];
                                
                                ?>

                                <option>
                                   <font-size:18px><?php echo $lista[$indice]->getNome(); ?>
                                </option>
                                <input type="hidden" name= "cod" size="5" maxlength = "20" value = "<?php print $lista[$indice]->getMatricula(); ?>"/>
                            <?php
				}
                                
                            ?>
                                </select>
                                <br>
                                    <input type="image" src="ICON/icon-47588_150.png" width="40" height="30" border="0" title = "EXCLUIR MEMBRO" >
                       </form>
                     </div>
                      
                    <div class="listademembrodapesquisa">
                        <form action = "cadastrar_membros_celula.php" method = "post" >
                         COD
                         <input type="hidden" name= "cod" size="5" maxlength = "20" value = "<?php print $valor; ?>"/>
                         <br>
                        <select size="8" name='list' >

                          <?php
                            if($achou){
                               $chave = array_keys($lista1);
                                
                                for ($index = 0; $index < sizeof($chave); $index++) {
                                    
                                    $indice = $chave[$index];
                                
                         ?>   
                           <option value = <?php echo $lista1[$indice]->getMatricula(); ?>><?php echo $lista1[$indice]->getNome(); ?></option>

                         <?php
                            }
                            }
                         ?>

                         </select><br>
                         <input type="image" src="ICON/computer-31182_150.png" width="30" height="20" border="0" title = "INSERIR MEMBRO NA CELULA" >
                    </form>
                   </div>  
                                              
               </div>
               
               <div class="membrodapesquisa">
               <br><br><br>
                   <form action = "consultacelula.php" method = "post" >
                        <div>
                            <b>MEMBRO</b>
                        </div>
			<div>
                            <input type="text" name= "busnome" size="30" maxlength = "50" />
                        </div>
                        <input type="hidden" name= "cod" size="5" maxlength = "90" VALUE = "<?php print $valor; ?>" />      
                        
                        <div>
                            <b>BUSCAR</b><input type="image" src="ICON/set-30330_150.png" width="30" height="20" border="0" title = "CONSULTAR MEMBRO" >
                        </div>
                        
                    </form>
                 </div>
                
	   </div>
        </div>
	         <div class = "rodape">

                    <?php
                  //  require_once ("view/dataatual.php");
                    ?>
                </div>
       </div>
     <?php
        }else if(isset ($_GET["ok"])){
                   
                  $valor = $_GET["ok"];
                  $celula=$obj->pesquisarCelulaControle($valor);
                  $lista=$obj->listadeMembroda1Controle($valor);
	
        if(isset($_POST["busnome"])){
            $nome=$_POST["busnome"];
            //$busca2 = mysql_query("Select Matricula, Nome from membros where Nome like '%$nome%' and Status = 'ATIVO'") or die ("Nao foi possivel realizar a busca".mysql_error());
            $lista1=$obj->listadeMembrodaControle($nome);
            $achou=TRUE;
        }
        ?>
  <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>
      <br>
         <div class = "corpo_membro">  
             
           <div class="lista_de_membros">
          	  
                <table align = "center" border = "0" onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
			<tr>
                            <td>
                                <b>Nome da Celula</b><br />
                                <input type='text' name='nome' maxlength = "70" size = "70" value = "<?php echo $celula->getNome(); ?>" disabled="true"/>
                            </td>
			    <td>
                                <b>Lider</b><br />
                                <input type='text' name='lider' maxlength = "70" size = "50" value = "<?php echo $celula->getLider(); ?>" disabled="true"/>
                            </td>
                        </tr>
			<tr>
                            <td>
                                <b>Bairro</b><br />
                                <input type='text' name='bairro' maxlength = "50" size = "70" value = "<?php echo $celula->getBairro(); ?>" disabled="true"/>
                            </td>
                            <td>
                                <b>Rua</b><br /><input type='text' name='rua' maxlength = "50" size = "50" value = "<?php echo $celula->getRua(); ?>" disabled="true"/>
                            </td>
                        </tr>
                    </table>
               
			<table align = "center" border = "0" onmouseover="mudar_cor_over(this)" onmouseout="mudar_cor_out(this)">
                            <tr>
                                <td>
                                    <b>Numero</b><br />
                                    <input type='text' name='numero' maxlength = "11" size = "50" value = "<?php echo $celula->getCasa(); ?>" disabled="true"/>
                                </td>
				<td>
                                    <b>Dia </b><br />
                                    <select name='dia' disabled="true"><option value = "<?php echo $celula->getDia(); ?>"><?php echo $celula->getDia(); ?></option><option value = "Segunda">Segunda</option><option value = "Teca">Te�a</option><option value = "Quarta">Quarta</option>
					<option value = "Quinta">Quinta</option><option value = "Sexta">Sexta</option><option value = "Sabado">Sabado</option><option value = "Domingo">Domingo</option>
                                    </td>
				<td>
                                    <b>Status </b><br />
                                    <select name='status' disabled="true"><option value = "<?php echo $celula->getStatus(); ?>"><?php echo $celula->getStatus(); ?></option><option value = "ATIVA">ATIVA</option><option value = "INATIVA">INATIVA</option>
                                </td>
				<td>
                                    <b>Numero da Celula</b><br /><input type='text' name='cod' value = "<?php echo $celula->getNumero(); ?>" maxlength = "50" size = "40" disabled="true"/>
                                    <input type='hidden' name='cod' value = "<?php echo $celula->getNumero(); ?>"/>
                                </td>
                             </tr>
                         </table>
               
            
                  <div class="nome_membro">
                      
                      <div class="listademembronacelula">
                            <form action = "exclui_membro_celula.php" method = "post" > 
                             <b>Nomes dos Membros da Celula</b>
                                <br />
                                <select size="10" name="lis" >
                                <?php
                                
                                $chave = array_keys($lista);
                                
                                for ($index = 0; $index < sizeof($chave); $index++) {
                                    
                                    $indice = $chave[$index];
                                
                                ?>

                                <option>
                                   <font-size:18px><?php echo $lista[$indice]->getNome(); ?>
                                </option>
                                <input type="hidden" name= "cod" size="5" maxlength = "20" value = "<?php print $lista[$indice]->getMatricula(); ?>"/>
                            <?php
				}
                                
                            ?>
                                </select>
                                <br>
                                    <input type="image" src="ICON/icon-47588_150.png" width="40" height="30" border="0" title = "EXCLUIR MEMBRO" >
                       </form>
                     </div>
                      
                    <div class="listademembrodapesquisa">
                        <form action = "cadastrar_membros_celula.php" method = "post" >
                         COD
                         <input type="hidden" name= "cod" size="5" maxlength = "20" value = "<?php print $valor; ?>"/>
                         <br>
                        <select size="8" name='list' >

                          <?php
                            if($achou){
                               $chave = array_keys($lista1);
                                
                                for ($index = 0; $index < sizeof($chave); $index++) {
                                    
                                    $indice = $chave[$index];
                                
                         ?>   
                           <option value = <?php echo $lista1[$indice]->getMatricula(); ?>><?php echo $lista1[$indice]->getNome(); ?></option>

                         <?php
                            }
                            }
                         ?>

                         </select><br>
                         <input type="image" src="ICON/computer-31182_150.png" width="30" height="20" border="0" title = "INSERIR MEMBRO NA CELULA" >
                    </form>
                   </div>  
                                              
               </div>
               
               <div class="membrodapesquisa">
               <br><br><br>
                   <form action = "consultacelula.php" method = "post" >
                        <div>
                            <b>MEMBRO</b>
                        </div>
			<div>
                            <input type="text" name= "busnome" size="30" maxlength = "50" />
                        </div>
                        <input type="hidden" name= "cod" size="5" maxlength = "90" VALUE = "<?php print $valor; ?>" />      
                        
                        <div>
                            <b>BUSCAR</b><input type="image" src="ICON/set-30330_150.png" width="30" height="20" border="0" title = "CONSULTAR MEMBRO" >
                        </div>
                        
                    </form>
                 </div>
                
	   </div>
        </div>
	         <div class = "rodape">

                    <?php
                  //  require_once ("view/dataatual.php");
                    ?>
                </div>
       </div>
      <?php
        }     //  require_once ("view/dataatual.php");
        ?>
 	</body>
 </html>
 
 <?php

   }else{
         header("Location: Index.php?");
   }

}
ConsultaCelula();
?>
