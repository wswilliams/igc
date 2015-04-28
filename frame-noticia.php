<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <!-- This website template was downloaded from http://www.nuviotemplates.com - visit us for more templates -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <script type="text/javascript" src="js/banner_rotator.js"/>  
    <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" href="css/colorbox.css" />
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script src="js/jquery.colorbox.js"></script>
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <!--<script type="text/javascript" src="js/efeitosjquery.js"/>-->
    
    <title>Frame de Noticia</title>
    
    
</head>
    <body>
        
        
<?php

function frame_noticia(){

    //if(isset($_COOKIE["nome"])){

    ?>
        <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img class="carousel-img" src="img/baner/1.jpg" alt="Chania">
<!--      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>-->
    </div>

    <div class="item">
        <img class="carousel-img" src="img/baner/3.jpg" alt="Chania">
<!--      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>-->
    </div>

    <div class="item">
      <img class="carousel-img" src="img/baner/1.jpg" alt="Chania">
<!--      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>-->
    </div>

    <div class="item">
      <img class="carousel-img" src="img/baner/3.jpg" alt="Chania">
<!--      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>-->
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div><!-- /.carousel -->

        <!--
      <div class="contener2" i="contener2">  
        <div id="tr_destaque_1" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="img/tp_home_slide.png" border="0" title="CLICK PARA VER" >
            </div>
             
        </div>

        <div id="tr_destaque_2" style="display: none;">
            <div class="imagem-centro" wmode="transparent">
                    <img id="img_cortina" src="img/Figuratopo4.jpg" border="0" title="CLICK PARA VER" >
            </div>
            
        </div>
            
        <div id="tr_destaque_3" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="img/tp_home_slide.png" border="0" title="CLICK PARA VER" >
            </div>
            
        </div>

        <div id="tr_destaque_4" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="img/projeto1.gif" border="0" title="CLICK PARA VER" >
            </div>
            
        </div>
            
        <div id="tr_destaque_5" style="display: none;">
            <div class="imagem-centro">
                <img id="img_cortina" src="img/tp_home_slide.png" border="0" title="CLICK PARA VER" >
            </div>
            
        </div>

          <div class="div_navnews">
          <input id="btEsquerdo1" type="image" src="img/tp_home_slide_bot_esq_nor.png" title="Anterior" onclick="Anterior()"/>
          <input id="btEsquerdo2" type="image" src="img/tp_home_slide_esq_sel.png" title="Anterior" onclick="Anterior()"/>
        </div>
          <div class="div_navnews1">
          <input id="btDireito1" type="image" src="img/tp_home_slide_bot_dir_nor.png" title="Proxima" onclick="Proximo()"/>
          <input id="btDireito2" type="image" src="img/tp_home_slide_dir_sel.png" title="Anterior" onclick="Anterior()"/>
        </div>
     </div>  
            -->
<?php       
    //}

}
frame_noticia();
?>
    </body>
</html>