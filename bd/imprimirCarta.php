<?php

function imprimirCarta() {

    if (isset($_COOKIE["nome"])) {
        
        $nome = $_POST["nome"]; // recebe a variavel
        $selecionado = $_POST["selec"]; // recebe a variavel
        $data_atual = date($_POST["dat"]);
                        
        $html = '
<style>
table { border-collapse: collapse; margin-top: 0; text-align: center; }
td { padding: 0.5em; }
h1 { margin-bottom: 0; }
</style>

<table>
<tr><td><input type="image" src="ICON/LOGO CARTA.jpg" width="100%" height="70%" border="0"><br><br><br><br><br><br><br><br></td></tr>
<tr><td align = "center" style="font-size: 14pt">CARTA DE RECOMENDAÇÃO<br><br><br><br><br><br><br></td></tr>
<tr><td align = "justify" style="font-size: 14pt">
A Igreja Evangélica Pentecostal Gerações Para Cristo <b>RECOMENDA</b> por meio desta que o amado(a) e querido irmão em Cristo
Jesus<b> '.$nome.' e família</b>, encontram-se em comunhão com está Igreja do Senhor Jesus Cristo, podendo assim
ser recebido como convém aos santos.<br><br><br><br><br><br><br><br><br><br><br><br><br><br></td></tr>
<tr><td><input type="image" src="ICON/ASSINATURA.png" width="100%" height="5%" border="0"></td></tr><tr>
</table>

';
//==============================================================
//==============================================================
//==============================================================
 require_once ("mpdf.php");

$mpdf=new mPDF('c'); 

$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
/*
        ?>

        <html>
            <head>
                <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
                <meta http-equiv="content-language" content="pt-br" />
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />
                
                <title>Pagina Gerar Carta</title>
                
            </head>
            <body>

           <div class="root" id="root">
                   
                <div class = "cabec">

                    <input type="image" src="ICON/LOGO CARTA.jpg" width="100%" height="70%" border="0">
                    <a onclick="print(); return false;" href="PrintPage"><img src="ICON/impressao.png" width="30" height="30" border="0" title = "Imprimir" ></a>
                </div>
                

                <div class = "corpo_gera_carta">
                    
                    <div class = "corpo_imprimir_carta">
                        <?php
                        $nome = $_POST["nome"]; // recebe a variavel
                        $selecionado = $_POST["selec"]; // recebe a variavel
                        $data_atual = date($_POST["dat"]);
                        ?>
                        <br><br><br>
                        <p align = "center">
                            <b>CARTA DE <?php print $selecionado; ?> </b>
                        </p>
                        <br><br><br>
                        <p align = "justify">
                            A Igreja Evang&eacute;lica Pentecostal Gera&ccedil;&odblac;es Para Cristo <b>RECOMENDA</b> por meio desta que o amado querido irm&atilde;o em Cristo
                            Jesus<b> <?php print $nome; ?> e fam&iacute;lia</b>, encontram-se em comunh&atilde;o com est&aacute; Igreja do Senhor Jesus Cristo, podendo assim
                        ser recebido como conv&eacute;m aos santos.
                        </p>
                        <br><br><br><br><br><br>
                        
                        <input type="image" src="ICON/ASSINATURA.jpg" width="100%" height="5%" border="0">
                        
                        <br><br><br><br><br>
                        
                        <?php
                            require_once ("dataatual.php");
                         ?>
                    </div>
                    
                </div>

                <div class = "rodape">
                    
                </div>

            </div>	
        </body>
        </html>
        <?php
 
 */
    } else {
        header("Location: Index.php?");
    }
}

imprimirCarta();
?>
