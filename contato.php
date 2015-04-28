<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Tapa Producoes</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>
    <!--<script type="text/javascript" src="js/jquery.maskedinput.min1.js"></script>-->
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <link rel="Stylesheet" href="css/contato.css" />              
    
    <link rel="stylesheet" href="css/colorbox.css" />
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script type="text/javascript" src="js/contatos.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script> 
    
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/colobox-interno.js"></script>
    <script src="js/jquery.colobox-item.js"></script>
    <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
    <script type="text/javascript" src="js/newletter.js"></script>
    <script type="text/javascript" src="js/inputmask.js"></script>
    
<!--    <script>        
              $(document).ready(function(){
                  $("#fone-validar").mask("(99)99999-9999");
                });
     </script>-->

    </head>

		
    <body>
         <div class="root-mastter">
            <div class="root-mastter-cabec">
                <div class="container1">
                       <?php
                            require_once ("cabec.php");
                       ?>
                </div>
            </div>
            <div class="container-baner">
                <div class="container2">
                
                    <p class="logo-galeria"><img src="img/tapa_exportados_web/tp_contatos/EXPORTADOS/tapa_nov_CORPO/tp_botao_subsecao_cont.png"></p>       
                
                </div>
            </div>
        
        <div class="container">
            
	<!--begin div principal root -->
           <br>
           <div class="row featurette" id="row-featurette">
               <div class="col-md-7">
                   <div class="form-group form-group-sm">
                   <form id="cadastrar-contatos" class="form-horizontal" action="" method="POST">
                    
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Nome</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="nome" type="text" id="formGroupInputSmall" placeholder="Nome input">
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Fone</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="fone" data-mask="(99)99999-9999" type="text" id="formGroupInputSmall" placeholder="Fone input">
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
                        <div class="col-sm-10">
                          <input class="form-control" name="email" type="text" id="formGroupInputSmall" placeholder="Email input">
                          <br>
                        </div>
                      
                       <label class="col-sm-2 control-label" for="formGroupInputSmall">Assunto</label>
                       <div class="col-xs-3">
                            <select class="form-control" name="assunto">
                                <option value="1">Or&ccedil;amento</option>
                                <option value="2">Duvidas</option>
                                <option value="3">Reclama&ccedil;&otilde;es</option>
                                <option value="4">Outros</option>
                            </select>
                           <br>
                       </div>
                      
                       <textarea  class="estilotextarea" name="mensagem"></textarea>
                       <p align = right>
                           <button class="btn btn-small" type="submit">Enviar</button>
                      </p>
                      
                    </form>
                   </div>
                </div>
               
               <div class="col-md-5">
                   <div class="list-group">
                       <a class="inline list-group-item active" id="active-titulo" href="#inline_historico">
                      CONTATOS
                    </a>
                    <a class="list-group-item">
                        TAPA PRODUÇÕES ARTÍSTICAS<br>
                        Av. Oscar Borel, nº 1030,<br> Compensa 2, Manaus – AM.<br>
                       CEP.69035-210<br>
                       CNPJ:10.365.496/0001-50
                    </a>
                    <a class="list-group-item">
                       (92)3652-3265 / 99308-8505<br>
                       98156-1577 / 98815-8754
                     </a>
                     <a class="list-group-item">
                       bastidores@tapaproducoes.com.br<br>
                    </a>
<!--<img src="img/tapa_exportados_web/tp_contatos/EXPORTADOS/tapa_nov_CORPO/tp_barra_contatos.png">-->
                  </div>
              </div>
               

      </div>
        
        
</div>
        <footer class="rodape-home">
          <div class="container3"><br>
              <p class="pull-left"></p>
            <a href="#"><p class="pull-right"></p></a>
                <address>
                    <strong></strong><br>
                    <br>
                    <br>
                    <abbr title="Phone"></abbr>
              </address>
        </div>
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
    
    </body>
</html>