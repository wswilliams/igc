        <html>
            <head>
                <meta charset="utf-8">
                <link href="css/index.css" rel="stylesheet" type="text/css" />	
                <link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />

                <title>Pagina Membro</title>
            </head>
            <body>

<?php

$meses = array(1=> "Janeiro",2=>"Fevereiro",3=>"Março",4=>"Abril",5=>"Maio",6=>"Junho",7=>"Julho",8=>"Agosto",9=>"Setembro",
			   10=>"Outubro",11=>"Novembro",12=>"Dezembro");

$hoje = getdate();
$dia = $hoje["mday"];
$mes = $hoje["mon"];
$nomemes = $meses[$mes];
//$nomedias = $dias[$mes];
$ano = $hoje["year"];

?>
<div class="dat">
    <?php
        echo "<h3>Hoje dia $dia de $nomemes de $ano</h3>"; 
    ?>
</div>
                
</dody>
</html>