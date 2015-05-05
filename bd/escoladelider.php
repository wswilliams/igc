<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Escola de Lider</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
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
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="Stylesheet" href="css/home.css" />
    <link rel="Stylesheet" href="css/datepicker.css" />
    <script type="text/javascript" src="js/formularioEscola.js"></script>
    <script type="text/javascript" src="js/cadastrar_escola.js"></script>
    <script type="text/javascript" src="js/dataHora.js"></script>
    
                <!--<link href="css/menu.css" rel="stylesheet" type="text/css" />-->
    <script>
           $(function(){
              $( "#dtinicio" ).datepicker({      
              changeMonth: true,
              changeYear: true
             });
              $( "#dtfim" ).datepicker({      
              changeMonth: true,
              changeYear: true
             });
         });
     </script>
     
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
          
     <div class="container">
       <div class="root-mastter-cabec">
           <p><h4 id="datahora"></h4></p>
           <?php require_once ("view/cabec.php"); ?>
       <div class="alert alert-info" role="alert"><h3> Escola de L&iacute;der</h3></div>
       </div>
         
    <div class="container">
         <br><br>
      <div class="container3">
           <br><br>
           <div class="row">
            <div class="col-xs-6 col-md-3" id="thumb">
                <a id="cadastrar" href="#">
                <!--<form id="cadastrar" action="#" method="POST">-->
                    <input type="hidden" name="nome"/>
                    <input type="image" src="ICON/internet-37197_150.png"  width="40" height="30" border="0" title = "Celula" />
                        <br><br><h6>Cadastrar</h6>
                <!--</form>-->
                </a>
            </div>
            <div class="col-xs-6 col-md-3" id="thumb">
                <form id="listarTodas" action="" method="POST">
                    <input type="hidden" name="nome"/>
                    <input type="image" src="ICON/internet-37197_150.png"  width="40" height="30" border="0" title = "Celula" />
                        <br><br><h6>Lista Todas</h6>
                </form>
            </div>
            <div class="col-xs-6 col-md-3" id="thumb">
                <form id="relatorio" action="gerar_relatorio_de_celulas.php" method="POST" target="_blanck">
                    <input type="hidden" name="rel"/>
                    <input type="image" src="ICON/internet-37197_150.png"  width="40" height="30" border="0" title = "Gerar Relatorio" />
                    <br><br><h6>Gerar Relat&oacute;rio das Celulas</h6>
                </form>
            </div>
         </div>
 
    </div>
        
   </div>

          <div class="container">
          
          <div class='row' id='cadastrar_escola'>
             <br><br><br>
                <div class='col-md-12'>
                <div class='form-group form-group-sm'>
                    <form id='cadastrar_escola_form' class='form-horizontal' action='' method='POST' onclick ="cadastrar_Escola();"> 
                        <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>Nome</label>
                        <div class='col-sm-10'>
                          <input class='form-control' type='text' name='nome' id='formGroupInputSmall' placeholder='xxxxxxxxxxxx' required='required'>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Data Inicio</label>
                        <div class='col-sm-10'>
                          <input id='dtinicio' class='form-control' type='text' placeholder='99/99/9999' id='formGroupInputSmall' required='required' name='dtinicio'/>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Data Final</label>
                        <div class='col-sm-10'>
                          <input id='dtfim' class='form-control' type='text' placeholder='99/99/9999' id='formGroupInputSmall' required='required' name='dtfinal' />
                          <br>
                        </div>
                        
                           <br>
                       
                       <p align = right>
                           <button class='btn btn-small' type='submit'>Enviar</button>
                      </p>
                      
                    </form>
                    </div>
                 </div>
            </div>
              <p id="exiberesposta"></p>
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
  </div>
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
