<?php

function principal() {

    if ($_COOKIE["nome"]) {
        $nome = $_COOKIE["nome"];
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <link href="arquivoIgc.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                <!-- Bootstrap core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">

                <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
                <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
                <script src="js/ie-emulation-modes-warning.js"></script>
                <link rel="Stylesheet" href="css/home.css" />

                <script type="text/javascript" src="js/jquery-ui.js"></script>
                <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
                <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
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
       </div>
                <!--<p align = "center"><img src="ICON/images (2).jpg" width="100" height="80" border="0" title = "LEIA A BIBBLIA"></p>-->
          <div class="container3">
           <br><br>
           <div class="row">
            <div class="col-xs-6 col-md-3">
              <a href="membro.php" class="thumbnail">
                <img src="ICON/flat-35681_150.png" width="40" height="30" border="0" title = "Area de Membro"><br>
                <h6>&Aacute;rea de Membro</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="celula.php" class="thumbnail">
                <img src="ICON/internet-37197_150.png" width="40" height="30" border="0" title = "Celula">
                <h6>Celula</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="escoladelider.php" class="thumbnail">
                <img src="ICON/computer-24944_150.png" width="40" height="30" border="0" title = "Escola de Lideres">
                 <h6>Escola de Lideres</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="ICON/button-41706_150.png" width="40" height="30" border="0" title = "Contas">
                 <h6>Contas</h6>
              </a>
            </div>
          </div>
          
          <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="anivesariante.php" class="thumbnail">
                <img src="ICON/baby-25388_150.png" width="40" height="30" border="0" title = "Aniversariantes">
                <h6>Aniversariantes</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="carta.php" class="thumbnail">
                <img src="ICON/icon-28157_150.png" width="40" height="30" border="0" title = "Cartas">
                <h6>Cartas</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a id="listarEmail" href="ver_email.php" class="thumbnail">
                <img src="ICON/icone_email.png" width="40" height="30" border="0" title = "Email">
                <h6>Email</h6>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="desconectar.php" class="thumbnail">
                <img src="ICON/sign-36980_640.png" width="40" height="30" border="0" title = "Sair">
                <h6>Sair</h6>
              </a>
            </div>
          </div>
           <br><br>
           <p id="exibePesquisa"></p>
       </div>
      </div><br><br><br>
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
        header("Location: Index.php?");
    }
}

principal();
?>
