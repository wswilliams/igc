  
<?php

function verEmail() {

    if ($_COOKIE["nome"]) {
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <link href="arquivoIgc.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                <!-- Bootstrap core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>

                <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
                <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
                <script src="js/ie-emulation-modes-warning.js"></script>
                <link rel="Stylesheet" href="css/home.css" />
                
                <script type="text/javascript" src="js/jquery-ui.js"></script>
                <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
                <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
                <script type="text/javascript" src="js/exiber_pesquisar.js"></script>
                <script type="text/javascript" src="js/pesquisar_Aniversariante_Hoje.js"></script>
                <script type="text/javascript" src="js/pesquisar_Aniversariante_Mes.js"></script>                
                <script type="text/javascript" src="js/dataHora.js"></script>
                
                
                <title>Pagina Inicial</title>
                
                    <script>
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                            ga('create', 'UA-39930240-2', 'geracaoparacristo.com');
                            ga('send', 'pageview');

                    </script>
                
            </head>
            <body onLoad="atualizarDataHora();">
        
      <div class="root-mastter">
          <div class="root-mastter-cabec">.</div>
          <div class="container1">
          </div>
                <!--<div class="root-mastter-cabec1">-->
<!--            </div>
                </div>-->

     <div class="container">
       <div class="root-mastter-cabec">
           <p><h4 id="datahora"></h4></p>
           <?php require_once ("view/cabec.php"); ?>
       <div class="alert alert-info" role="alert"><h3> Listar de Emails</h3></div>
       </div>
                <!--<p align = "center"><img src="ICON/images (2).jpg" width="100" height="80" border="0" title = "LEIA A BIBBLIA"></p>-->
          <div class="container3">
           <br><br>
           <div class="row">
           <?php
           require_once ("control/controle.php");
            require_once ("modelo/objetoMembro.php");
            $listaEmail = array();
            $obj = controle::getInstance();
            $listaEmail= $obj->listadeTodosEmailControle();

            $cont=1;
            $chave = array_keys($listaEmail);//pega todas as chaves do array
                            //echo $chave;
            $tamanhoLista = sizeof($chave);
            $ok="";
            if($tamanhoLista > 0){
                ?>
               <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Emails</div>

                <!-- Table -->
                <table class="table">
                  
                <!--<div class="form-group form-group-sm">-->
                    <?php
                    for($i=0; $i < $tamanhoLista; $i++) {
                         $indice2 = $chave[$i];
                    ?>
                        <tr><td><?php echo $listaEmail[$i]->getNome();?></td>
                      
                                <td><?php echo $listaEmail[$i]->getEmail();?></td>
                      
                                <td><?php echo  $listaEmail[$i]->getData();?></td>
                         </tr>
                        <tr><td colspan="4"><b>ASSUNTO:</b> <?php echo $listaEmail[$i]->getMensagem();?></tr> 
                         
             <?php            
                    }
             ?>
                        
                 <!--</div>-->
            
                </table>
              </div>
               <?php
            }else{
                ?>
                <div class='alert alert-danger' role='alert'>
                                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                                <span class='sr-only'>Error:</span>
                                 Nao ha email recebido no sistema
                 </div>
               <?php
            }
           ?>
            

             
          </div>
           <div class="container2">
               <br><br>
             <p id="exibePesquisa"></p>
           </div>

      </div>
         <br><br><br>
        <footer class="rodape-home">
              <p class="pull-left">
                  Sede: Rua 29 Quadra 139 N 149 Amazonino Mendes<br>
                  Tel (92) 32218417 Cep: 69099120 Manaus Amazonas 
              </p>
<!--              <p class="pull-right">
               <a class="navbar-brand" href="#">
                   <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                </a>
              </p>
              -->
      </footer>     

  </div>
</div>
       
	<!--end div principal root -->
        
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    </body>
        
        
        
        
        <?php
    } else {
        header("Location: ../index.php");
    }
}

verEmail();
?>
