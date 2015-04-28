<?php

function EscoladeLider() {

    if(isset($_GET["ok"])){
        
       $ret = $_GET["ok"];
        if($ret == 1){
        header("Location: principal1.php?ok=$ret");
        }
    }else {
  
    if ($_COOKIE["nome"]) {
        ?>

        <html>
            <head>
                <meta name="generator" content="Responsive Web Css (www.responsivewebcss.com)" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />

                <title>Pagina Escola</title>
            </head>
            <body>

             <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>
                 
                <div class = "corpo_membro">
                    <br><br><br>

                    <?php
                    require_once ("view/corpo_escoladelider.php");
                    ?>

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
}

EscoladeLider();
?>