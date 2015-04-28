<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <!-- This website template was downloaded from http://www.nuviotemplates.com - visit us for more templates -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <script type="text/javascript" src="../js/banner_rotator_1.js"/>
    <script type="text/javascript" src="../js/jquery-1.9.1.min1.js"></script>                
    <link href="../css/home.css" rel="stylesheet" type="text/css" />
    
    <title>Frame de Noticia</title>
    
<!--    <script type="text/javascript">
                $(document).ready(
			function(){
				IniciarBannerRotator1(1,4,5);
				IniciarImgRotator1(1,4,1000);
			});
		
		
</script>-->

    
</head>
    <body>
        
        
<?php

function frame_noticia1(){

    //if(isset($_COOKIE["nome"])){

    ?>
      <div class="contener2" i="contener2">  
        <div id="tr_destaque_1" style="display: none;">
            <div class="imagem-centro">
                    <img id="img_cortina" src="../img/brindes.jpg" border="0" title="CLICK PARA VER">
            </div>
             
        </div>

        <div id="tr_destaque_2" style="display: none;">
            <div class="imagem-centro">
                    <img id="img_cortina" src="../img/gifImg.gif" border="0" title="CLICK PARA VER">
            </div>
            
        </div>
            
        <div id="tr_destaque_3" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="../img/projeto1.gif" border="0" title="CLICK PARA VER">
            </div>
            
        </div>

        <div id="tr_destaque_4" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="../img/projeto1.gif" border="0" title="CLICK PARA VER">
            </div>
            
        </div>
            
        <div id="tr_destaque_5" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="../img/projeto1.gif" border="0" title="CLICK PARA VER">
            </div>
            
        </div>

          <div class="div_navnews">
          <input type="image" src="../img/set-28998_150.png" width="100%" height="100%" title="Anterior" onclick="Anterior1()"/>
        </div>
          <div class="div_navnews1">
          <input type="image" src="../img/set-28998_150.png" width="100%" height="100%" title="Proxima" onclick="Proximo1()"/>
        </div>
     </div>  
            
<?php       
    //}

}
frame_noticia1();
?>
    </body>
</html>