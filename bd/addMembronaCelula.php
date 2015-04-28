 
<?php

function addMembroNaCelula() {

    if ($_COOKIE["nome"]) {
        $nome = $_COOKIE["nome"];
        $id = $_POST["id"];
        $lider=$_POST["lider"];
        $nomeCelula=$_POST["nome"];
        
        require_once ("control/controle.php");
        $obj = controle::getInstance();
      
      
      require_once ("modelo/objetoMembro.php");
      $membro = new objetoMembro();
      $lista = array();
      $lista1 = array();
      
      
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
                <script type="text/javascript" src="js/dataHora.js"></script>
                <script type="text/javascript" src="js/addMembrasiaNaCelula.js"></script>
                
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
       <div class="alert alert-info" role="alert"><h3>Adicionar Membrasia na Celula</h3></div>
       </div>
                <!--<p align = "center"><img src="ICON/images (2).jpg" width="100" height="80" border="0" title = "LEIA A BIBBLIA"></p>-->
          <div class="container3">
           <br><br>
           
           <div class='panel panel-default'>
                <div class='panel-heading'>Celula</div>
                  <table class='table'>
                    <tr>
                      <td>Celula</td><td>CodCelula</td>
                    </tr>
                    <tr>
                        <td><?php echo $nomeCelula; ?></td>
                        <td><?php echo $id; ?></td>
                    </tr>
                  </table> 
          </div>
           <?php
                  $lista=$obj->listadeMembrodaCelulaControle($id);
                  $chave = array_keys($lista);
                  
           ?>
           <div class="row">
                <div class="col-sm-6 col-md-6">
                    
                    <div class="caption">
                              <h5>Participantes da Celula</h5>
                            </div>
                            <form action ="" method = "post" onclick="return excluirMembrosCelula();"> 
                                <select id="listRecept" size="10" name="lis" >
                              <?php
                                for ($index = 0; $index < sizeof($chave); $index++) {
                                    $indice = $chave[$index];
                                   ?>
                                    <option>
                                   <font-size:18px><?php echo $lista[$indice]->getNome();?>
                                </option>
                                <input type="hidden" name="cod" size="5" maxlength = "20" value = <?php echo $lista[$indice]->getMatricula();?>/>
                                <?php
				}
                                ?>
                                </select>
                                <br>
                                <input type="image" src="ICON/icon-47588_150.png" width="40" height="30" border="0" title = "EXCLUIR MEMBRO"/>
                       </form>
                  </div>
                
           <div class="col-sm-6 col-md-6">
                   <div class="caption">
                       <h5>ADD Participantes na Celula</h5>
                    </div>
                  <?php
                               $lista1 = $obj->listadeTodosMembroControle() ;
                               $chave1 = array_keys($lista1);
                      ?>
                      <form  id="addMembro" action = "" method = "post">
                        <select id='listAdd' size="8" name='matricula' >
                          <?php
                                for ($index = 0; $index < sizeof($chave1); $index++) {
                                    
                                    $indice = $chave1[$index];
                                
                         ?>   
                           <option value = <?php echo $lista1[$indice]->getMatricula(); ?>><?php echo $lista1[$indice]->getNome(); ?></option>
                          
                         <?php
                            }
                            
                         ?>
                         </select><br>
                         <input type="hidden" name= "codcelula" size="5" maxlength = "20" value = "<?php print $id; ?>"/>
                         <input type="image" src="ICON/computer-31182_150.png" width="30" height="20" border="0" title = "INSERIR MEMBRO NA CELULA" >
                     </form>
              </div>
              </div>
            </div>
                                              
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

addMembroNaCelula();
?>


