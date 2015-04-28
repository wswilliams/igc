<?php

function gerarRelatorioCarta() {

if (isset($_COOKIE["nome"])) {
        ?>

        <html>
            <head>
                <meta name="generator" content="Responsive Web Css (www.responsivewebcss.com)" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
                <meta http-equiv="content-language" content="pt-br" />
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                
                
                <title>Pagina Relatoria de Carta</title>
                
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
                    // classe para conexao com banco de dados
                        require_once ("conexao.php");
                        $obj = Connection::getInstance();
                        $achou = false; //variavel global para verificao
                        $busca1 = mysql_query("Select  m.Nome,c.nome_Carta,r.datarecebimento from membros m join recebemcartas r on Matricula = CodMembro join cartas c on CodCarta = Cod_Carta order by m.Nome") or die ("Nao foi possivel realizar a busca".mysql_error());
                        $achou = true;
			?>
                      
                        <table  align = "center" border = "1">
                         <tr>
                             <td colspan = "5" align = "center">
                                 <B>RELAT&Oacute;RIO DE CARTAS DE SA&Iacute;DA EMITIDAS</B>
                                 <a onclick="print(); return false;" href="PrintPage"><img src="ICON/impressao.png" width="30" height="30" border="0" title = "Imprimir" ></a>
                             </td>
                         </tr>
                        <tr>
                            <td align = "center">
                                <B>Nome do Membro</B>
                            </td>
                            <td align = "center">
                                <B>Tipo de Carta</B>
                            </td>
                            <td align = "center">
                                <B>Data de Emiss&atilde;o</B>
                            </td>
                            <td align = "center">
                                <B>Gerar Carta</B>
                            </td>
                        </tr>

    	             <?php
                         while($reg1 = mysql_fetch_assoc($busca1)){
                     ?>
                        <form action = "imprimirCarta.php" method = "post" target = "_blank">
                       <tr>
                           <td align = "center">
                               <?php print $reg1['Nome']; ?>
                              <input type="hidden" name= "nome" size="50" maxlength = "90" VALUE = "<?php print $reg1['Nome']; ?>"  />
                           </td>
                           <td align = "center">
                               <?php print $reg1['nome_Carta']; ?>
                               <input type="hidden" name='selec' size="50" maxlength = "90" VALUE = "<?php print $reg1['nome_Carta']; ?>">
                           </td>
                           <td align = "center">
                               <?php echo date($reg1['datarecebimento']); ?>
                               <input type="hidden" name= "dat" size="20" maxlength = "10" VALUE = "<?php echo date($reg1['datarecebimento']); ?>" />
                           </td>
                           <td align = "center">
                               <input type="image" src="ICON/b_view.png" width="30" height="30" border="0" title = "GERAR CARTA">
                           </td>
	                </tr>
                        </form>
                        
                        <?php
			}
			?>
                        </table>
                      
                        <?php
				mysql_free_result($busca1); //limpa o resultado da pesquisa libera a memoria ocupado
				$obj->freebanco(); // fecha a conec��o com o banco
			?>
                        
                     </div>
                </div>
               
                
                <div class = "rodape">
                    <?php
                    require_once ("view/dataatual.php");
                    ?>
                </div>
               

            </div>
            
        </body>
        </html>
        <?php
    } else {
        header("Location: Index.php?");
    }
}

gerarRelatorioCarta();
?>

