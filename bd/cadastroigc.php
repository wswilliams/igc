<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Geracões para Cristo</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
    <script src="js/cadastrar_membrasia.js"></script>
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
    
    
                <!--<link href="css/menu.css" rel="stylesheet" type="text/css" />-->
    <script>
           $(function(){
              $( "#datanascimento" ).datepicker({      
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
         <br><br>
     <div class="row">
        <div class="col-md-12">
                <div class="form-group form-group-sm">
                   <form id="cadastrar-membro" class="form-horizontal" action="" method="POST">
                    
                        <label class="col-sm-2 control-label" for="formGroupInputSmall" id="lbel">Nome</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" name="nome" id="formGroupInputSmall" placeholder="xxxxxxxxxxxx" required="required">
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Data Nascimento</label>
                        <div class="col-sm-3">
                            <input id="datanascimento" class="form-control" type="text" placeholder="99/99/9999" id="formGroupInputSmall" required="required" name="data" />
                          <br>
                        </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Rg</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="rg" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">CPF</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="cpf" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Estado Civil</label>
                       <div class="col-xs-2">
                            <select class="form-control" name="estadocivil">
                                <option value="CASADO(A)">Casado(a)</option>
                                <option value="SOLTEIRO(A)">Solteiro(a)</option>
                                <option value="VIUVO(A)">Viuvo(a)</option>
                            </select>
                           <br>
                       </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Natural</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="natural" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Profiss&atilde;o</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="profissao" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Escolaridade</label>
                       <div class="col-xs-2">
                            <select class="form-control " id="formGroupInputSmall" name="escola" >
                                <option value="PRIMARIO">Prim&aacute;rio</option>
                                <option value="FUNDAMENTAL">Fundamental</option>
                                <option value="MEDIO">M&eacute;dio</option>
                                <option value="TECNICO">T&eacute;cnico</option>
                                <option value="SUPERIOR">Superior</option>
                            </select>
                           <br>
                       </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Fone</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="tel" placeholder="(99)99999-9999" id="formGroupInputSmall" required="required" name="fone" />
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Filhos</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="filho" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Sexo</label>
                       <div class="col-xs-2">
                            <select class="form-control" name="sexo">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                           <br>
                       </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Nec.Especiais</label>
                         <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="necessidade" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Bairro</label>
                        <div class="col-sm-6">
                          <input class="form-control" name="bairro" type="text" id="formGroupInputSmall" placeholder="xxxxxxxxxxxx" required="required">
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Rua</label>
                        <div class="col-sm-6">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="rua" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Casa</label>
                        <div class="col-sm-2">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="casa" />
                          <br>
                        </div> 
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Form.Eclesiart</label>
                        <div class="col-sm-3">
                            <input class="form-control " type="text" placeholder="(99)99999-9999" id="formGroupInputSmall" required="required" name="formacao" />
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Pai</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="pai" />
                          <br>
                        </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">M&atilde;e</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="mae" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Integ.Membrasia</label>
                        <div class="col-xs-3">
                            <select class="form-control" name="membrasia">
                                <option value="ACLAMADO">Aclamado</option>
                                <option value="BATISMO">Batismo</option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Fun&ccedil;&atilde;o</label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="funcao" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">J&aacute;Paticipou </label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text" placeholder="xxxxxxxxxxxx" id="formGroupInputSmall" required="required" name="participou" />
                          <br>
                        </div>
                        
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Trabalhando</label>
                        <div class="col-xs-2">
                            <select class="form-control" name="trabalhando">
                                <option value="SIM">Sim</option>
                                <option value="NÃO">N&Atilde;o</option>
                            </select>
                           <br>
                       </div>
                         <label class="col-sm-2 control-label" for="formGroupInputSmall">Viajando</label>
                        <div class="col-xs-2">
                            <select class="form-control" name="viajando">
                                <option value="SIM">Sim</option>
                                <option value="NÃO">N&Atilde;o</option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Congrega</label>
                        <div class="col-xs-2">
                            <select class="form-control" name="congrega">
                                <option value="CENTRAL">Central</option>
                                <option value="MANACAPURU">Manacapuru</option>
                                <option value="NOVA-OLINDA">Nova-Olinda</option>
                            </select>
                           <br>
                       </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" type="email" id="formGroupInputSmall" placeholder="xxxxx@xxx.com" required="required" />
                          <br>
                        </div>
                        <label class="col-sm-2 control-label" for="formGroupInputSmall">Lider de Celula</label>
                        <div class="col-xs-2">
                            <select class="form-control" name="lider">
                                <option value="N">N&Atilde;O</option>
                                <option value="M">SIM</option>
                            </select>
                           <br>
                       </div>
                       <p align = right>
                           <button class="btn btn-small" type="submit">Enviar</button>
                      </p>
                      
                    </form>
                 </div>
            </div>
         </div>
                
    </div>
<p id="exiberesposta"></p>
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
