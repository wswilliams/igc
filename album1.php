<!DOCTYPE html>
<html> 
<head>
        <meta charset="UTF-8" /> 
        <title>Album 1</title>      
        <link rel="stylesheet" href="css/glisse.css" />
        <link rel="stylesheet" href="css/app.css" />
        <!-- JS -->
        <!--<script src="js/jquery-1.9.1.min1.js"></script>-->
        <script src="js/glisse.js"></script>
        <script>
            $(function () {
                
                $('.myphotos').glisse({speed: 500, changeSpeed: 550, effect:'roll', fullscreen: false}); 
            });
        </script>
    </head>
    <body>
        <?php
       
          
          $caminho = "img/album-slide1/";
            $dir = opendir($caminho);
            $count = 0;
            $countitem = 0;
           
            while ( ($imagem = readdir($dir)) !== false )
            {
                 $group="group".$count;
               $caminho_completo = $caminho.$imagem;
               
               if (is_file($caminho_completo) && $imagem != "." && $imagem != ".."){
                 $item = "img/album{$count}/";
                $dir_item = opendir($item);
                echo "<div class='col-sm-6 col-md-4'>
                        <div class='thumbnail'>
                       <img  src ='{$caminho_completo}' class='myphotos' rel='{$group}' data-glisse-big='{$caminho_completo}' title='Album1' />
                        <hr>
                        <h3>folde_'{$count}'</h3>
                        <h3>group_'{$group}'</h3>
                        </div>
                    </div>";
                 
                   while ( ($item_imagem = readdir($dir_item)) !== false )
                    {
                       $caminho_item_completo = $item.$item_imagem;
                       if (is_file($caminho_item_completo) && $item_imagem != "." && $item_imagem != ".."){
                            echo "<img  src='' class='myphotos' rel='{$group}' data-glisse-big='{$caminho_item_completo}'/>";
                       }
                     $countitem++;  
                   }
                  
         $count++;
               }
            }
            closedir($dir_item);
            closedir($dir);
            
            
        ?>
        
    </body>
</html>