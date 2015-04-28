<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

        <title>Galeria</title>

    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <link rel="Stylesheet" href="css/galeria.css" />              
    <link rel="Stylesheet" href="css/menu.css" />              
    
    <link rel="stylesheet" href="css/colorbox.css" />
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/colobox-interno.js"></script>
    <script src="js/jquery.colobox-item.js"></script>
    <script type="text/javascript" src="js/suavizar-carregamento-pagina.js"></script>
    <script type="text/javascript" src="js/newletter.js"></script>

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
            <div class="root-mastter-cabec">
                <div class="root-mastter-cabec1">
                    <div class="container1">
                        <?php
                            require_once ("cabec_1.php");
                       ?>
                    </div>
                </div>
            <div class="container1">
                   <?php
                        require_once ("cabec.php");
                   ?>
            </div>
                
            </div>
            <div class="container-baner">
                <div class="container2">
                
                    <h1 class="logo-galeria">GALERIA</h1>
                
                </div>
            </div>
                    
        <div class="container">
            
	<!--begin div principal root -->
           <br><br>
              <div class="row">
                <?php
                    require_once 'album1.php';
                ?>

      </div>
        
        
        
      </div>

</div>

<footer class="rodape-home">
              <p class="pull-left">
                  Sede: Rua 29 Quadra 139 N 149 Amazonino Mendes
              </p>
              <p class="pull-left">
                  Tel (92) 32218417 Cep: 69099120 Manaus Amazonas 
              </p>
              <p class="pull-right">
               <a class="navbar-brand" href="#">
                   <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                </a>
              </p>
              <br>
      </footer>
    
    <div class="root-mastter-cabec2">
           <div class="container5">
             <?php
//                  require_once ("cabec_2.php");
             ?>
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
    
    </body>
</html>
