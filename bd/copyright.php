<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function principal1() {

    if ($_COOKIE["nome"]) {
        ?>

        <html>
            <head>
                <meta charset="utf-8">
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />

                <title>Pagina Copyright</title>
            </head>
            <body>
    
         <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>
               
                <div class = "corpo_membro">
                    <br/><br/>
                    <marquee direction=up onmouseover="this.stop()" onmouseout="this.start()" scrollamount=1>

                      <span class="style4">DESENVOLVIDO POR:</span><br/>
                      <span class="style4"><a href="http://zeroem.com.br" target="_blank">ZEROEUM TECNOLOGIA</a></span><br/><br/>
                      <span class="style4">DESENVOLVEDOR E ANALISTE DE SISTEMA</span><br/><br/>
                      <span class="style4">WILLIAMS SILVA</span><br/>
                      <span class="style4">Gmail: "wswilliamssilva938@gmail.com"</span><br/>
                      <span class="style4">Skype: "williams-silva1"</span>

                    </marquee>

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

principal1();
?>

