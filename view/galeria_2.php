<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="generator" content="Responsive Web Css (www.responsivewebcss.com)" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="css/galeria.css" />
        <script type="text/javascript" src="js/jquery-1.9.1.min1.js"></script>              
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" href="css/colorbox.css" />
                <!--<link rel="shortcut icon" href="images/LOGOMARCA IGC.jpg" />-->    
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/jquery.colobox-item.js"></script>
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <script>
    $(document).ready(function(){
       $("body").css("display", "none");
        $("body").fadeIn("slow");
      });
    </script> 
    
    <body>
        <!--begin div root - divi principal da pagina galeria-->
        <div id='root'>
            
            <!--begin cabecalho - menu do site-->
            <div class='box' id='cabec'>
                <div class='box' id='cabec-menu'>
                    <?php
//                    import do menu
                        require_once ("cabec.php");
                   ?>
                </div>
            </div>
            <!--end cabecalho-->
            
            <!--begin div center da pagina - onde esta acortina-->
       <div class='box' id='center-page'>
           
           <!--begin center da pagina - onde se encontra os albums de fotos-->
           <div class='box' id='center-page-album'>
               
               <!--begin album de foto 1-->
               <div class='box' id='album1'>
                   
                       
                  
                   <div class='box' id='album1-1'>
                      <a class="group3" href = "img/album1/folde.png" title="Tapas Produ&ccedil;&odblac;es">
                       <img src = "img/album1/folde.png" border = "0" width = "80%" height = "100%"></a>
                       <a class="group3" href = "img/brindes.jpg" title="Tapas Produ&ccedil;&odblac;es"></a>
                    <div class='box' id='album1-1-titulo'></div>
                  </div>
                <div class='box' id='album1-2'>
                    <div class='box' id='album1-2-titulo'></div>
                </div>
                <div class='box' id='album1-3'>
                    <div class='box' id='album1-3-titulo'></div>
                </div>
                <div class='box' id='album1-4'>
                    <div class='box' id='album1-4-titulo'></div>
                </div>
                <div class='box' id='album1-5'>
                    <div class='box' id='album1-5-titulo'></div>
                </div>
            </div>
               <!--end album de foto 1-->
               
               <!--begin album de foto 2-->
            <div class='box' id='album2'>
                <div class='box' id='album2-1'>
                    <a class="group6" href = "img/album2/folde.png" title="Tapas Produ&ccedil;&odblac;es">
                        <img src = "img/album2/folde.png" border = "0" width = "80%" height = "100%"></a>
                    <a class="group6" href = "img/album1/loading.gif" title="Tapas Produ&ccedil;&odblac;es"></a>
                    <div class='box' id='album2-1-titulo'></div>
                </div>
                <div class='box' id='album2-2'></div>
                <div class='box' id='album2-3'></div>
                <div class='box' id='album2-4'></div>
                <div class='box' id='album2-5'></div>
            </div>
               <!--end album de foto 2-->
               
               <!--begin album de foto 3-->
            <div class='box' id='album3'>
                <div class='box' id='album3-1'>
                    <a class="group7" href = "img/album3/folde.png" title="Tapas Produ&ccedil;&odblac;es">
                       <img src = "img/album3/folde.png" border = "0" width = "80%" height = "100%"></a>
                       <a class="group7" href = "img/brindes.jpg" title="Tapas Produ&ccedil;&odblac;es"></a>
                    <div class='box' id='album3-1-titulo'></div>
                 </div>
                <div class='box' id='album3-2'></div>
                <div class='box' id='album3-3'></div>
                <div class='box' id='album3-4'></div>
                <div class='box' id='album3-5'></div>
            </div>
               <!--end album de foto 3-->
               
               <!--begin album de foto 4-->
            <div class='box' id='album4'>
                <div class='box' id='album4-1'>
                    <a class="group8" href = "img/album4/folde.png" title="Tapas Produ&ccedil;&odblac;es">
                       <img src = "img/album4/folde.png" border = "0" width = "80%" height = "100%"></a>
                       <a class="group8" href = "img/brindes.jpg" title="Tapas Produ&ccedil;&odblac;es"></a>
                    <div class='box' id='album4-1-titulo'></div>
                 </div>
                <div class='box' id='album4-2'></div>
                <div class='box' id='album4-3'></div>
                <div class='box' id='album4-4'></div>
                <div class='box' id='album4-5'></div>
            </div>
               <!--end album de foto 4-->
               
               <!--begin album de foto 5-->
            <div class='box' id='album5'>
                <div class='box' id='album5-1'>
                    <a class="group9" href = "img/album5/folde.png" title="Tapas Produ&ccedil;&odblac;es">
                       <img src = "img/album5/folde.png" border = "0" width = "80%" height = "100%"></a>
                       <a class="group9" href = "img/brindes.jpg" title="Tapas Produ&ccedil;&odblac;es"></a>
                    <div class='box' id='album5-1-titulo'></div>
                 </div>
                <div class='box' id='album5-2'></div>
                <div class='box' id='album5-3'></div>
                <div class='box' id='album5-4'></div>
                <div class='box' id='album5-5'></div>
            </div>
               <!--end album de foto 5-->
          </div>
           <!--end center page album-->
        </div>
            <!--end center page-->
            
            <!--begin div rodape-->
            <div class='box' id='rodape'></div>
            <!--end rodape-->
        </div>
        <!--end div root-->
    </body>
</html>