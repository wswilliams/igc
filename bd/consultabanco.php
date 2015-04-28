<?php

function consultaBanco() {

    if (isset($_COOKIE["nome"])) {
        
        ?>

        <html>
            <head>
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                <meta http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
                <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>
                <script type="text/javascript" src="js/jquery.maskedinput.min1.js"></script>
                <link rel="stylesheet" href="css/jquery-ui.css" />
                <script type="text/javascript" src="js/jquery-ui.js"></script>
                <link href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />

                <title>Pagina Membro</title>
                
                
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
                        <br><br><br>
                    <?php
                    require_once ("view/corpo_edita.php");
                    ?>

                </div>
               
              </div>
                
                <div class = "rodape">

                    <?php
                    
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

consultaBanco();
?>