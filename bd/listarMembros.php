<?php

function consulta() {

    if ($_COOKIE["nome"]) {
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Lista de Membrasia</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
    <script src="js/cadastrar_historia.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" href="css/colorbox.css" />
    
    
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/colobox-interno.js"></script>
    <script src="js/jquery.colobox-item.js"></script>
    <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
    <script type="text/javascript" src="js/newletter.js"></script>
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="Stylesheet" href="css/home.css" />
    <link rel="Stylesheet" href="css/datepicker.css" />
    
    <script>
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                            ga('create', 'UA-39930240-2', 'geracaoparacristo.com');
                            ga('send', 'pageview');

                    </script>
    
     </head>
 <body>
     
      <body>
       <div class="root-mastter">
          <div class="root-mastter-cabec">.</div>
          <div class="container1">
          </div>
           
     <div class="container">
       <div class="root-mastter-cabec">
           <p><h4 id="datahora"></h4></p>
           <?php require_once ("view/cabec.php"); ?>
           
       </div>
     </div>
           
 <div class="container">
   <!--<div class="row">-->
      <!--<div class="col-md-10">-->     
        <div class="panel panel-default">
  <!-- Default panel contents -->
        <div class="panel-heading">
           <p id="tx-membro"> LISTA DE TODOS OS MEMBROS CADASTRADO NO SISTEMA</p>
           <a onclick="print(); return false;" href="PrintPage"><img src="asset/../ICON/impressao.png" width="30" height="30" border="0" title = "Imprimir" ></a>
        </div>

        <!-- Table -->
        <?php

                    require_once ("control/controle.php");
                    $obj = controle::getInstance();
                    require_once ("modelo/objetoMembro.php");
                    $membro = new objetoMembro();
                    
                    $lista = array();
                    
                    $lista = $obj->listadeTodosMembroControle();

          ?>
        
        <table class="table">
            
          </tr>
            <tr>
             <td id="tx-membro">
               Num  
             </td>
             <td id="tx-membro">
                 Nome do Membro
             </td>
             <td id="tx-membro">
                 Naturalidade
             </td>
             <td id="tx-membro">
                  Telefone
             </td>
              <td id="tx-membro">
                  Editar
             </td>
         </tr>
         
          <!--<tr>-->
               <!--<td align = "center"><b>Num</b></td><td align = "center"><b>Nome do Membro</b></td><td align = "center"><b>Naturalidade</b></td><td align = "center"><b>Telefone</b></td><td align = "center"><b>Editar</b></td>-->
          <!--</tr>-->
                    <?php
                        $cont=1;
                        $chave = array_keys($lista);//pega todas as chaves do array
                        //echo $chave;
                        for($i=0; $i<sizeof($chave); $i++) {
                        
                        $indice = $chave[$i];
                        
                    ?>

          <form action = "dadosDetalhados.php" method = "post" >

                              <tr>
                                <td id="tx-membro" align = "center"><?php echo "<br>".$cont;?></td>
                                <td id="tx-membro" align = "center"><?php echo "<br>".$lista[$indice]->getNome(); ?></td>
                                 <td id="tx-membro" align = "center"> <?php echo "<br>".$lista[$indice]->getNatural();?> </td>
                                 <td id="tx-membro" align = "center"><?php echo "<br>".$lista[$indice]->getFone();?> </td>
                                 <td id="tx-membro" align = "center"><br><input type="image" src="asset/../ICON/red-35780_150.png" width="30" height="20" border="0" title = "CUNSULTAR" ></td>
                              </tr>
                              <input type="hidden" name= "nome" size="50" maxlength = "90" VALUE = "<?php print $lista[$indice]->getNome(); ?>">
                            </form>

                      <?php
                        $cont++;
			}

                           ?>

                    </table>
      </div>
            
                   
        </div>
      </div>
     </div>     

    <!-- Button to trigger modal -->
         
       <footer class="rodape-home">
              <p class="pull-left">
                  Sede: Rua 29 Quadra 139 N 149 Amazonino Mendes<br>
                  Tel (92) 32218417 Cep: 69099120 Manaus Amazonas 
              </p>
              <p class="pull-right">
               <a class="navbar-brand" href="#">
                   <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                </a>
              </p>
              <br>
      </footer>
    
	<!--end div principal root -->
        
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

        <?php
    } 
}

consulta();
?>
