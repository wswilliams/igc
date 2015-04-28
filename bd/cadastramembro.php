<?php

if(isset($_GET["ok"])){
  $ok=$_GET["ok"];
  
  switch ($ok){
    case 0:
        echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Parabens, cadastro realizado com sucesso\")</SCRIPT>";
    break;
    case 1:
        echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Desculpe, membro já é cadastro no sistema\")</SCRIPT>";
    break;
    case 2:
        echo "<SCRIPT LANGUAGE=\"JavaScript\"TYPE=\"text/javascript\"> alert(\"Erro, não foi possivel cadastrar o membro\")</SCRIPT>";
    break;
  }
}
function editarmembro() {

//    if ($_COOKIE["nome"]) {
        ?>

        <html>
            <head>
                <meta name="generator" content="Responsive Web Css (www.responsivewebcss.com)" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <meta http-equiv="content-language" content="pt-br" />
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>
                <script type="text/javascript" src="js/jquery.maskedinput.min1.js"></script>
                <link rel="stylesheet" href="css/jquery-ui.css" />
                <script type="text/javascript" src="js/jquery-ui.js"></script>


                <title>Pagina Editar Membro</title>
            </head>
            <body>

             <div class="root" id="root">
                   
                <div class = "cabec">

                    <?php
                    require_once ("view/cabec.php");
                    ?>
                </div>
                 
                <div class = "corpo_membro_formulario">

                    <?php
                    require_once ("view/corpo_edita_membro.php");
                    ?>

                </div>
              
                <div class = "rodape">

                </div>
                 
              </div>
            
        </body>
        </html>
        <?php
//    } else {
//        header("Location: Index.php?");
//    }
}

editarmembro();
?>
